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
















 ?>