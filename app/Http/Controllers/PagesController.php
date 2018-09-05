<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PagesController extends Controller
{
	public function getHome(){

        $posts = Post::orderBy('created_at','desc')->limit(4)->get();

		return view('pages.welcome')->withPosts($posts);
		//return "Home Page";
	}

    public function getAbout(){
    	//return "hello About Page";
    	$first = 'Herwin';
    	$last  = 'Mardhana';
    	$full  = $first . " " . $last;
    	$email = 'herwin.mardhana@gmail.com';

    	$data  = [];
    	$data['fullname'] = $full;
    	$data['email'] = $email;
    	return view('pages.about')->withData($data);
    }

    public function getContact(){
    	return view('pages.contact');
    }
}
