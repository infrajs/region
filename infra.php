<?php
use infrajs\env\Env;
use infrajs\template\Template;
use infrajs\region\Region;
use infrajs\event\Event;
use infrajs\lang\Lang;

Env::add('region', function () {
	$lang = Lang::name();
	$data = Region::get($lang);
	return $data;
}, function ($newval) {
	if (empty($newval['country'])) return false;
	if (empty($newval['lang'])) return false;
	$lang = Lang::name();
	if ($newval['lang'] != $lang) return false;
	return true;
});

Event::one('Controller.oninit', function () {
	Template::$scope['Region'] = array();
	Template::$scope['Region']['get'] = function () {
		$lang = Lang::name();
		return Region::get($lang);
	};
});
