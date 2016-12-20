<?php
namespace infrajs\region;

use infrajs\env\Env;
use infrajs\ip\IP;


class Region
{
	public static function get($lang = 'en')
	{
		$data = IP::get(null, $lang);
		$data = array(
			'city' => $data['city'],
			'region' => $data['region_name'],
			'region_code' => $data['region_code'],
			'country'=> $data['country_name'],
			'country_code' => $data['country_code']
		);
		return $data;
	}
}