<?php

$fruits = ['banana', 'apple',"Kiwi","Orange"];

function formatstr($str){
    echo "[".$str."#]<br>";
}
//$str = formatstr("iti");
//echo $str;
//
//$myarr=[];
//foreach ($fruits as $item){
//    echo formatstr($item);
//    $myarr[]=formatstr($item);
//}
//
//var_dump($myarr);
$resArray =[];
//$res=array_walk($fruits,"formatstr");
//var_dump($res, $resArray); #
//var_dump($fruits);
//array_walk($fruits, function($str){
//    echo "[".$str."#]<br>";
//});

//$fruits = ['banana', 'apple',"Kiwi","Orange"];
//
//$res=array_map(function ($item){
//    return "#".$item."#";}, $fruits);
//
//var_dump($res);
//
//array_walk($fruits, function ($item){
//    echo "#".$item."#"."<br>";});
//
//var_dump($fruits);


$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];
$res= [];
//for ($i=0; $i<count($instructors); $i++){
//    $res[]=$instructors[$i]." teaches ".$courses[$i];
//}
//var_dump($res);

//$rs=array_map(function ($ins,$c){
//    return $ins." teaches ".$c;},$instructors,$courses);
//var_dump($rs);
//

//$input_array = array('a', 'b', 'c', 'd', 'e');
//$output_array = array_chunk($input_array, 4);
//var_dump($output_array);

//
//$instructors = ["Eng. Shery", "Noha", "Andrew"];
//$courses = ['Admin', 'PHP', 'Node'];
//$res= array_combine($courses,$instructors);
//var_dump($res);

//$my_array = [1,90,2,55,3,55,5,6,7,8,100];
//var_dump($my_array);
//$res=array_filter($my_array,function ($item){
//    return $item%5==0;
//});
//var_dump($res);
//var_dump(array_merge($res));
//
# array_key_intersect---> associative array
//$a= ["name"=>"Ahmed","track"=>"Application",
//    "course"=>"PHP"];
//$b= ["name"=>"Noha",
//        "course"=>"Python"];
//
//var_dump(array_intersect_key($a, $b));

//
//$arr = array('a' => 123, 'b' => 213, 'c' => 321);
//$allowed = array('b', 'c');
//$allowed = array_flip($allowed);
//var_dump($allowed);
//
//$filtered = array_intersect_key($arr,$allowed);
//var_dump($filtered);

$info=["username"=>"Noha",
    "email"=>"nshehab@iti.gov.eg",
    "track"=>"Application","_5"=>42];
extract($info);
echo $username." ".$email." ".$track."  ".$_5;


















