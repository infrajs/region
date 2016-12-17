<?php
use infrajs\env\Env;
use infrajs\ip\IP;
use infrajs\template\Template;
use infrajs\region\Region;
use infrajs\event\Event;

Env::add('region', function () {
	$data = IP::get('176.194.181.238');
	
	$data = array(
		'city' => $data['city'],
		'region' => $data['region_name'],
		'region_code' => $data['region_code'],
		'country'=> $data['country_name'],
		'country_code' => $data['country_code']
	);

	foreach($data as $k=>$v) $data[$k] = str_replace("'","",$v);
	return $data;
}, function ($newval) {
	return sizeof($newval) == 5;
});

Event::one('Controller.oninit', function () {
	Template::$scope['Region'] = array();
	Template::$scope['Region']['get'] = function () {
		return Region::get();
	};
});
