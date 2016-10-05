<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class PagesController extends Controller
{
    //

    public function index(){

        return view('pages.index');
    }

    public function about(){

    	return view('pages.about');
    }

    public function contact(){

    	return view('pages.contact');
    }

    public function contactSend(Request $request){

        
    	$this->validate($request, array(
    			'name'=>'required',
    			'email'=>'required|email',
    			'body'=>'required'
    		));

    	$data = array(
    		'email'=>$request->email,
    		'body'=>$request->body,
    		'name'=>$request->name,
            'subject'=>$request->subject
    		);


    	Mail::send('emails.contact', $data, function($message) use ($data){

    		$message->from($data['email'], $data['name']);

    		$message->to('kunaigor44@gmail.com', $data['subject']);

    		$message->subject($data['body']);

    	});

    	return redirect()->route('home');
    }
}
