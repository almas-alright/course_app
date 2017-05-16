<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    //
    public function index(){

    	$tasks = Task::all();
    	return view('front.welcome', compact('tasks'));
    }
    public function show(Task $task){

    	return view('front.single', compact('task'));
    }
}

//https://github.com/jeremykenedy/laravel-auth
