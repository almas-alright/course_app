<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
class TrainingController extends Controller
{
    public function index(){
    	$trainings = Training::all();
    	return view('front.views.trainings', compact('trainings'));
    }

    public function show($slug){
    	$training = collect(Training::slug($slug)->first());   	
    	return view('front.views.single', compact('training'));
    }
}
