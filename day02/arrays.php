<?php

//    $arr = ["Ahmed", "Mohamed", "Yosra"];
//    var_dump(count($arr));
//
//    for($i=0;$i<count($arr);$i++){
//        echo $arr[$i]."<br>";
//    }

//$nums = range(0,10);
//var_dump($nums);

//$nums = range("a","z");
//var_dump($nums);
//
$nums = range("A","z",4);
//var_dump($nums);

$arr = array("32",444, True, $nums);
//var_dump($arr);

//var_dump($arr[1]);
////echo $arr;
//print_r($arr);

//foreach ($arr as $item){
//    var_dump($item);
//}

//$arr[14]="iti";
//$arr[5]="uuuu";
//var_dump($arr);
////
////for ($i=0; $i<count($arr);$i++){
////    var_dump($arr[$i]);
////}
//
//foreach ($arr as $i=>$item){
//    echo $i." =>   ". $item." ".gettype($item)."<br>";
////    $arr[$i]="ooo";
//
//}

//var_dump($arr);

############ Associative array
//$info=["Name"=>"Noha",
//    "Email"=>"nshehab@iti.gov.eg","Track"=>"Application"];
//foreach ($info as $key=>$value){
//    echo $key." : ". $value."<br>";
//}

//foreach ($info as $value){
//    echo   $value."<br>";
//}
//echo $info["Name"];
//$info["intake"]=42;
//var_dump($info);
//
//$info["Name"]="Noha Shehab";
//var_dump($info);
//$info=["Name"=>"Noha",
//    "Email"=>"nshehab@iti.gov.eg","Track"=>"Application"];
//
//#display array_keys
//
//$keys=array_keys($info);
//var_dump($keys);
//
//
//$values=array_values($info);
//var_dump($values);

$std = "Ahmed";
$track = 42;

//$std_info= compact("std","track");
//var_dump($std_info);



//$num=range(0,10);#5
////$num[10]="Mohy";
//$alphas=["a","b","c","d"];  #4
//$alphas[10]= "application";
//var_dump($num,$alphas);
////$res =  $num+$alphas;
////var_dump($res);
//# + check the
//$res =  $alphas+ $num;
//var_dump($res);

# indexed array is a special type of the associative array
# produce key --> int ---> according to the array size

//$arr = ["name"=>"iti", "id"=>100, "course"=>"PHP"];
//
//$arr2= ["intake"=>42, "year"=>2022, "name"=>"application"];
//
//$arr3 = $arr + $arr2;
//var_dump($arr3);


################### sorting
$arr = ["name"=>"iti", "id"=>100, "course"=>"PHP"];
var_dump($arr);
//sort($arr); # sort array elements according to values ,
//#exclude the keys --> sort array according to values and convert it to
//# simmple od indexed array
//var_dump($arr);

//ksort($arr);
//var_dump($arr);

//$arr=[2,5,6,10,22,"1","12","120","1","8"];
//$arr[10]="B83485";
//$arr[5] ="Ahmed11";
//var_dump($arr);
////
//sort($arr);
//var_dump($arr);

//$a= ["1","10","2","200","111","111111111111111"];
//var_dump($a);
//sort($a,SORT_NUMERIC);
//var_dump($a);

################
//ksort($arr);
//var_dump($arr);
##### reverse sort
//krsort($arr);
//var_dump($arr);
//asort($arr);  # sort ass --> according to values
//var_dump($arr);
###################

//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//$a = array(3, 2, 5, 6, 1,1000,10);
//var_dump($a);
//$newarr=usort($a,"cmp");  # return true
//var_dump($a);
//var_dump($newarr);
//usort($a,function($a, $b) {
//    if ($a == $b) return 0;
//    return ($a < $b) ? -1 : 1;} );
//
//var_dump($a);
###########################
//shuffle($a);
//var_dump($a);

################## special functions
//$a = array(3, 2, 5, 6, 1,1000,10);
//var_dump($a);
//$anew=array_reverse($a);
//var_dump($anew);
//
//array_push($a,"test");
//var_dump($a);
//
//array_push($a,"kljkkj");
//var_dump($a);
//
//$e=array_pop($a);
//var_dump($a);
//var_dump($e);

$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow',
    "four"=>"purple");
//var_dump(array_flip($colors));
//var_dump(prev($colors));
var_dump(current($colors));
var_dump(next($colors));
//var_dump(current($colors));
var_dump(prev($colors));
//var_dump(next($colors));
////var_dump(next($colors));
//reset($colors);
//var_dump(current($colors));
//var_dump(end($colors));














