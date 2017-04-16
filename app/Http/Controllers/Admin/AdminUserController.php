<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\User;

class AdminUserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');        
    }

    public function getAll()
    {
        $users = User::all();
        $ser = 1;
        $uz;
        foreach ($users as $user) {
            $ca = collect($user->created_at);
            $ua = collect($user->updated_at);
            $uz[]= array(
                'ser' => $ser ++,
                'name'=>$user->name.' '.$user->lastname,
                'email'=> $user->email,
                'created_at'=> date('m-d-Y', strtotime($ca['date'])),
                'updated_at'=> date('m-d-Y', strtotime($ua['date'])),
                );
        }
        //return $uz;

         return Datatables::of($uz)->make(true);
    }
    
}
