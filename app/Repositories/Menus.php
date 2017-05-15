<?php

namespace App\Repositories;

use App\Menu;

/**
* 
*/
class Menus
{
	
	public function all(){

		return collect(Menu::all());
	}
}