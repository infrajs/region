<?php
use infrajs\env\Env;
use infrajs\ip\IP;
use infrajs\template\Template;
use infrajs\region\Region;
use infrajs\event\Event;

Env::add('region', function () {
	$data = IP::get();
	$data = array(
		'city' => $data['city'],
		'region' => $data['region_name'],
		'region_code' => $data['region_code'],
		'country'=> $data['country_name'],
		'country_code' => $data['country_code']
	);
	if ($data['country_code'] == 'RU') {
		$data['city'] = Region::trans2rus($data['city']);
		$data['region'] = Region::trans2rus($data['region']);
	}
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
