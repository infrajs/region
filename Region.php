<?php
namespace infrajs\region;

use infrajs\env\Env;

class Region
{
	public static function get()
	{
		//Определяем текущий регион
		$sel = Env::get('region');
		return $sel;		
	}
}