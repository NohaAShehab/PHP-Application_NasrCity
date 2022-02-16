<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//    var_dump($_REQUEST);

//$res=getSum(55,55);
//unset($getsum);
//var_dump($res);
//function GetSum($x,$y){
//    $z=$x+$y;
//    echo 'Sum of x and y is'.$z."<br>";
//    return $x;
//}
//getsum(5,10);
//getsum(5,10);

//
//function GetSum($x=0,$y=0){
//    $z=$x+$y;
//    echo "x= ".$x." y= ".$y."<br>";
//    echo 'Sum of x and y is '.$z." <br>";
//    return $x;
//}
////getsum(4,6);
////getsum(4);
////getsum();
////getsum($y=5, $x=4);
//
//################## unknown number of parameters
//# accept 0 or more parameters
//function acceotargs(...$abaas){
//    var_dump($abaas);  # return an array
//    $sum=0;
////    foreach ($abaas as $item){
////        $sum+=$item;
////    }
////    var_dump($sum);
////    echo $abaas;
//    $result=json_encode($abaas); # into string
////    [4,6,7,89,5]
//    var_dump($result);
//    echo $result;  # strign
//    $res=json_decode($result);
//    var_dump($res);
////    [{},{},{}]
//}
//
//acceotargs();
//
//acceotargs(4,6,7,89,5);
//
////function test(){
////    return true;
////    echo "test line";  # unreachable line  --> ignore
////}
////
////test();


//function callbyval($x,$y){
//    var_dump($x,$y);
//}
//$x=5; $y=7;
//callbyval($x,$y);

function callbyRef(&$x,$y){
    $x+=1;
    var_dump($x,$y);
}

$x=10;  # global scope
callbyRef($x,7);

//$x=11;
//
callbyRef($x,7);
var_dump($x);




