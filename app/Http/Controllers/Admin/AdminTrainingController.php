<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;
use App\Training;
class AdminTrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');        
    }

    public function create(){
        return view('admin.training.new');
    }

    public function getAll()
    {
        $trainings = Training::all();
        $ser = 1;
        $tr;
        foreach ($trainings as $training) {
            $ca = collect();
            $ua = collect($training->updated_at);
            $tr[]= array(
                'ser' => $ser ++,
                'name'=>$training->name,
                'start_at'=> date('m-d-Y', strtotime($training->start_at)),
                'end_at'=> date('m-d-Y', strtotime($training->end_at)),
                'price' => '$ '.$training->price,
                );
        }
        //return $tr;

         return Datatables::of($tr)->make(true);
    }
}


