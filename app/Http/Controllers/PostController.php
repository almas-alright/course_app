<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    //
    public function index(){
    	$posts = Post::all();
    	return view('front.post.index', compact('posts'));
    }
}
