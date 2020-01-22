<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Entity\Cart;
use App\Entity\PhotoProduit;
use App\Entity\LineCart;
use App\Entity\Post;
class CartController extends Controller
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

        $carts = LineCart::All();

        return view('admin.Cart.index',compact('carts'));

        } else {
        $photos = PhotoProduit::All();
        $carts = LineCart::where('user_id' , '=' , Auth::user()->id)->get();
        $cartOne = LineCart::where('user_id' , '=' , Auth::user()->id)->first();

        //dump($carts);die();
/*
        $cartStatus = cart::where('id' , '=' , 9)->first();  
        dump($cartStatus);die();  */

        return view('LineCart.index',compact('carts', 'cartOne','photos'));

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

        $cart = new Cart();

        $cart->user_id = Auth::user()->id;
        $cart->status = 0;
        $cart->save();

        $carts = Cart::all();
        foreach ($carts as $key => $value) {
            $cart_id = $value->id;
        }
        $total_cart = LineCart::where('user_id' , '=' , Auth::user()->id )->first();
        if($total_cart != null){
            $object['total']   = $total_cart['total'] + $object['price'];
        } else {
            $object['total']   = $object['price'];
        }

        $object['post_id'] = $object['post'];
        $object['user_id'] = Auth::user()->id;
        $object['cart_id'] = $cart_id;
        
       // dump($object);die();

        LineCart::create($object);

           return redirect('/cart'); 
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
