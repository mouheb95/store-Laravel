<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Entity\LineCart;
use App\Entity\Post;

class LineCartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
        if(Auth::user()->role == 0){

        $linecarts = LineCart::All();

        return view('admin.LineCart.index',compact('linecarts'));

        } else {

        $linecarts = LineCart::where('user_id' , '=' , Auth::user()->id)->get();
        $linecart = LineCart::where('user_id' , '=' , Auth::user()->id)->first();

/*dump($linecarts);die();*/
        return view('LineCart.index',compact('linecarts', 'linecart'));

        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $object = $request->all(); 

        $total_cart = Cart::where('user_id' , '=' , Auth::user()->id )->first();
        if($total_cart != null){
            $object['total']   = $total_cart['total'] + $object['price'];
        } else {
            $object['total']   = $object['price'];
        }

        $object['post_id'] = $object['post'];
        $object['user_id'] = Auth::user()->id;
        
       // dump($object);die();

        Cart::create($object);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
