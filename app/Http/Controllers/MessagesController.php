<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use msg model
use App\Message;
class MessagesController extends Controller
{
    //
    public function submit(Request $request){

        //validation
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);

        //create message
        $message=new Message;
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->message=$request->input('message');

        //save it
        $message->save();

        //flash message
        return redirect('/home')->with('success','Message Sent');
    }

    //get all the messages from the db
    public function getMessages(){
        $messages=Message::all();

        return view('messages')->with('messages',$messages);
    }
}
