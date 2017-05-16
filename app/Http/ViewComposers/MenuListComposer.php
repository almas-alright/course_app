<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Menus;
use App\Menu;
/**
* 
*/
class MenuListComposer
{
	protected $menus;

	function __construct()
	{
		$this->menus = Menu::all();
	}

	function compose(View $view){
		$view->with('all', $this->menus);
	}
}