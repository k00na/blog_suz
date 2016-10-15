<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use App\Post;

class PagesController extends Controller
{
    //

    public function index(){

        
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);

        return view('pages.index', compact('posts'));
    }

    public function posts(){

        return view('pages.posts');
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

    		$message->to('kunaigor44@gmail.com');
            

    		$message->subject($data['subject']);

    	});

    	return redirect()->route('home');
    }

    public function showPost($slug){

        //$post = Post::findOrFail($slug);

        $post = Post::where('slug', $slug)->first();


        return view('pages.show_post', compact('post'));
    }
}
