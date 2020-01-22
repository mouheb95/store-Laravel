<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

use App\Entity\Message;
use App\Entity\DateMessage;

class MessagesController extends Controller
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

        $users = User::All();
        $messages = Message::All();
        $message_details = DateMessage::All();
        
        return view('admin.Message.index',compact('messages','message_details','users'));

        } else

        $users = User::All();
        
        $messages = Message::where('receiver' , "=" , Auth::user()->id)->get();

        $senders = DateMessage::All();
        
        return view('Message.index',compact('messages','senders','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::All();
        
        $messages = Message::where('receiver' , "=" , Auth::user()->id)->get();

        $senders = DateMessage::All();
        
        return view('Message.index',compact('messages','senders','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last_detail_message_id = 0;
        $message = $request->all();
        $message['status'] = 0 ;
       /*dump($message);die();*/
        Message::create($message);
        $messages = Message::All();

        foreach ($messages as $key => $value) {
            $last_detail_message_id =  $value->id;
        }

            $dateMessage['date_lecture_message'] = Carbon::now()->toDateTimeString(); 
            $dateMessage['date_envoi_message'] = Carbon::now()->toDateTimeString();
            $dateMessage['user_id'] = Auth::user()->id;
            $dateMessage['message_id'] = $last_detail_message_id;

        DateMessage::create($dateMessage);

        return redirect('/message');
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
        $message = Message::findOrFail($id);
        
        return view('admin.Message.edit',compact('message'));
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
        //dump($id);die();
        $object = Message::where('id',$id)->delete();

        $object_detail = DateMessage::where('message_id' , '=' , $id)->delete();

        return redirect('/message')->with('success', 'Message deleted!');
    }
}
