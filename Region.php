<?php
namespace infrajs\region;

use infrajs\env\Env;
use infrajs\ip\IP;


class Region
{
	public static function get($lang = 'en')
	{
		$data = IP::get(null, $lang);
		if (!$data) return $data;
		if (empty($data['city'])) $data['city'] = '';
		if (empty($data['region_name'])) $data['region_name'] = '';
		if (empty($data['region_code'])) $data['region_code'] = '';
		if (empty($data['country_name'])) $data['country_name'] = '';
		if (empty($data['country_code'])) $data['country_code'] = '';
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