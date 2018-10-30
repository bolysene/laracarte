<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;

use Illuminate\Support\Facades\Mail;
use App\Modeles\Message ;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('messages.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'=> 'required|min:3',
    		'email'=> 'required|email',
    		'message'=> 'required|min:10',
    		
    	]);

        $message = Message::create($request->only('name','email','message'));

       $messagedelivered = new ContactMessageCreated($request->name, $request->email, $request->message);
       
        Mail::to('admin@laracarte.com')->send($messagedelivered);

        flash('Votre message a été envoyé avec success nous vous reviendrons sous peu.')->success();

        return Redirect()->route('home');
    }

}
