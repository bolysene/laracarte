<?php 

if(!function_exists('pages_title'))
{
	function page_title($title)
	{
		$basic_message = 'Laracarte - List of artisans';

		if($title === ""){
			return $basic_message;
		}else{
			return $title.' | '.$basic_message;
		}
	}
}


if(!function_exists('set_active_route'))
{
		function set_active_route($route)
	{
		$route_is = Route::is($route) ? 'active' : ' ';

		return $route_is;
	}
}
















 ?>