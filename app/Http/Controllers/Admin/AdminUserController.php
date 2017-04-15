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
        $users = User::select('*');

    return Datatables::of($users)        
        ->make(true);
    }
}
