<?php

function randomNumbers($length)
{
    $array = [];
    for($i=0;$i<$length;$i++){
        $array[]=mt_rand(1,10);
    }
    return $array;
}

$res = randomNumbers(10);
var_dump($res);

function yieldNumbers($length)
{

    # code execution once at time -- when needed --
    for($i=0;$i<$length;$i++){
        yield $i;
    }

}
$gen=yieldNumbers(10000000);
var_dump($gen); #itertable object
$c=0;
foreach ($gen as $value){
    echo $value."<br>";
    $c++;
    if ($c==10){
        break;
    }
}

