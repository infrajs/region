<?php

use infrajs\region\Region;
use infrajs\ans\Ans;

$ans = array();

$ans['data'] = Region::get('ru');

return Ans::ret($ans);
