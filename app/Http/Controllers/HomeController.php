<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Option::val('static_home_page');
        $home = Post::find($id);
        return view('front.views.home', compact('home'));
    }

    public function post($slug){
        $post = collect(Post::slug($slug)->first());    
        return view('front.views.post', compact('post'));
    }
  

    public function contact(){

        return view('front.views.contact');
    }
}
