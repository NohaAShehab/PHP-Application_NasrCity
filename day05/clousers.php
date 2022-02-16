<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//function test(){
//    echo "test";
//    return "test";
//}
//var_dump(test());
//
////echo gettype($test);
//var_dump(@is_callable(test));
//function greet (){
//    echo 'Good morning';
//    return "vacation";
//}

# object from clousure
//function (){
//    echo 'Good morning';
//    return "vacation";
//}
//clouser can be referenced as a variable
//
//(function ($name){   # greet --> refer to the function
//    echo 'Good morning';
//    return "vacation";})("test");
###########################################
//$greet= function (){   # greet --> refer to the function
//    echo 'Good morning';
//    return "vacation";};
//var_dump($greet);  #object of the type clousure
//var_dump(is_callable($greet)); # true
//$greet();
////$greet();
##############################3
# clouser and use keyword
$commmision=77;
$name= "Yasmin";
$sal= function ($sal)use($commmision){
        echo $sal*10;
        echo "<br>";
        echo $commmision;
        global $name;
        $name = "Yasmin Kamal";
        # create new var --> name commission
        $commmision = 10000;

};

$sal(1000);
var_dump($name);
var_dump($commmision);




