<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Option;
use Illuminate\Http\Request;

class AdminOptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        // Option::firstOrCreate(['option_name' => 'url_facebook', 'option_value' => 'http://facebook.com/sdsd']);
        // Option::firstOrCreate(['option_name' => 'url_twitter', 'option_value' => 'http://twitter.com/sdsd']);
        // Option::firstOrCreate(['option_name' => 'url_gplus', 'option_value' => 'http://plus.google.com/sdsd']);
        // Option::firstOrCreate(['option_name' => 'url_linkedin', 'option_value' => 'http://linkedin.com/sdsd']);
    }

    public function socialLinks()
    {
        $social['facebook'] = Option::val('url_facebook');
        $social['twitter']  = Option::val('url_twitter');
        $social['gplus']    = Option::val('url_gplus');
        $social['linkedin'] = Option::val('url_linkedin');
        return view('admin.option.index', compact('social'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        
        foreach($input as $key => $val){
            $option = Option::firstOrNew(array('option_name' => $key));
            $option->option_value = $val;
            $option->save();
        }


    }

}
