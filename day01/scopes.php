<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    # localscope

//    function sayhello(){
//        # inside local scope --> variables cannot be accessed outside the function
//        $msg = "Good morning";
//        echo $msg;
//    }
//    sayhello();
//    echo $msg;  # notice variable is not defined

//    #global scope
//    $iti = "Information Technology Institute"; # global scope
//    # can be accessed from any part of the script except within the function
//
//    function testglobal(){
////        var_dump($iti);
//        echo $iti;
//    }
//
//    testglobal();
//
//    var_dump($iti);


#global scope
$iti = "Information Technology Institute"; # global scope
# can be accessed from any part of the script except within the function
//function testglobal(){
//    echo "<br> ---- function scope started ------ <br>";
//    global $iti;
////        var_dump($iti);
//    echo $iti;  # read the value
//    echo "<br>";
//    $iti = "ITI";
//    echo $iti;
//    echo "<br> ---- function scope ended ------ <br>";
//
//}
//
//testglobal();
//
//var_dump($iti);

######################### static scope ######################

//
//function countcalls(){
//    # static local variable
//    static $count =0;  # executed in the first time you call function
//    $count = $count+1;  # check static value in the memory
//    echo 'Count = '. $count. "<br>";
//}
//
//countcalls();
//countcalls();
//countcalls();
//
//
//static $count = 100000;  # global scope
//$count = $count +1;
//var_dump($count);
//
//
//echo "Script ended";




$count = 100000;  # global scope
$count = $count +1;
var_dump($count);

//function countcalls(){
//    # static local variable
//    static $count=0; # executed in the first time you call function
//    $count = $count +1;
//    var_dump($count);
//    global $count;
//    $count = $count+1;  # check static value in the memory
//    echo 'Count = '. $count. "<br>";
//}
//
//countcalls();
//var_dump($count);
//
//countcalls();
//var_dump($count);
//
//
//countcalls();
//var_dump($count);



############### parameter scope
//function addnums($num1, $num2){
//    # parameter scope --> parameters can be accessed within the function scope
//    # like the local scope
//    echo "num1 = ".$num1. " num2= ".$num2."<br>";
//    return $num1+$num2;
//}
//
//
//$res = addnums(10,120);
//var_dump($res);
//var_dump($num1);



###################################### constants , not varaible
# can be accessed from any part of the script
//const iti = "Information Technology Institue";
//define("pi",3.14);
//
//function testfunction(){
//    var_dump(iti);
//    var_dump(pi);
//}
//const abc = "application42";  # constant must be defined the script -global-
//testfunction();
//
//var_dump(iti);
//var_dump(pi);

############################3 super global scope
# can be accessed and mofieded at any part of the script ---

var_dump($_GET);

function populateGet(){
    $_GET["name"] = "Noha";
}
populateGet();

var_dump($_GET);








