<?php

var_dump(date('jS F Y'));

//var_dump(mktime(12,53,30, 2,15,2040));
//$secs= mktime(12,53,30, 2,15,2040);
////$d = new DateTime($secs);
////var_dump($d);
//
//echo date('m/d/Y', $secs);


//$d = new DateTime();
//var_dump($d);


//$t = time();
//var_dump($t);
//echo date('Y-m-d H:i:s', $t);
//
//var_dump(date("U"));
//
//var_dump(getdate());

//var_dump(checkdate(2, 29, 2020)); // valid
//var_dump(checkdate(2, 29, 2021));
//
//
//
//echo strftime('%X')."<br>";
//echo strftime('%c')."<br>";
//echo strftime('%y')."<br>";
//echo strftime('%A')."<br>";

$bdayunix = mktime (0, 0, 0, 6,16, 1992);
$nowunix = time(); // get unix ts for today
$ageunix = $nowunix - $bdayunix;
$time=$ageunix / (365 * 24 * 60 * 60);
var_dump($time); # age --





