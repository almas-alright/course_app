<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Option;

class AdminOptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');        
    }

    public function socialLinks(){
    	$social['facebook'] = $this->value(Option::val('url_facebook'));
    	$social['twitter'] = Option::val('url_twitter');
    	$social['gplus'] = Option::val('url_gplus');
    	$social['linkedin'] = Option::val('url_linkedin');
    	return  $social;//view('admin.option.index', compact('social'));	
    }

    public function store(Request $request){
    	return $request->all();	
    }

    protected function value($val){
    	if(is_null($val)){
    		return "...";
    	}
    	else{
    		return $val['option_value'];
    	}
    }
}
