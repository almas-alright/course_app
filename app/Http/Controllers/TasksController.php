<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    //
    public function index(){

    	$tasks = Task::all();
    	return view('open.welcome', compact('tasks'));
    }
    public function show(Task $task){

    	return view('open.single', compact('task'));
    }
}

//https://github.com/jeremykenedy/laravel-auth
