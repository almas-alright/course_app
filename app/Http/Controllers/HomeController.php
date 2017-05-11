<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;

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
        return view('front.views.home');
    }

    public function trainings(){

        $trainings = Training::all();

        return view('front.views.trainings', compact('trainings'));
    }
}
