<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class ContactController extends Controller
{
    //
    public function index(){
        return view('pages.contact');
    }

    public function sendMessage(Request $request){

        // validations
        $request->validate([
            "name"=>["required","string","min:3","max:30"],
            "email"=>['required','email'],
            "subject"=>["required","string","min:5","max:30"],
            "content"=>["required","min:10","max:500"]
        ]);


        //connect to database
        $message = new Message() ; // object from class message
        $message->name = $request->name; // save the request in database
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->content;

        $message->save(); // save data in database
        return redirect('contact')->with('success','your message has been sent successfully'); // return contact Badge

    }
}
