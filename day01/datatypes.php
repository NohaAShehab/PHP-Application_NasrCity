<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
//$var1 = " noha100";
//var_dump($var1);
//$var2 = (int)$var1;
//
//var_dump($var2);


//$student= "Alaa";
//$Alaa = "Application_student";
//var_dump($student);
//var_dump($$student);


//$x = 10;
//$y = "10";
//var_dump($x==$y);  #check value
//var_dump($x===$y); # check value and the datatype


//$x = 100;
//$y= 200;
//
//var_dump($x <=> $y);  # -1 , x < y
//var_dump($y <=> $x); # 1 y > x
//var_dump($x <=> $x); # x =y


# reference operator

//$x= 10;
//$y= $x;
//var_dump($x, $y);
//$x = "iti";
//var_dump($x, $y);

//
//$a = 10;
//$b= &$a;  # & refernce opertor
//var_dump($a, $b);
//$a = "1000";
//var_dump($a, $b);


# error superrsision


//$b= @(44/0);
//var_dump($b);


//$data = `ls -l`;  # executable
//
//var_dump($data);
//
//$file  = `touch names.txt`;


//$num="10iiijkjkh";
//settype($num,"int");
//echo gettype($num);
//var_dump($num);
//# true, false

//$test = '100.10'; # string
//
//var_dump(is_numeric($test));

############################# isset , empty
# falsy values , "" ,[], '',0,flase, null,
//$x= 10;
//var_dump(isset($x)); # check if the varaible contain any value
//var_dump(empty($x));  # check if the vairable contain falsy values

##################

//$x= "";
//var_dump(isset($x)); # check if the varaible contain value
//var_dump(empty($x));  # check if the vairable contain falsy values

###################
//$x= 0;
//var_dump(isset($x)); # check if the varaible contain any value
//var_dump(empty($x));  # check if the vairable contain falsy values
#######################

//$x;
//var_dump(isset($x)); # check if the varaible contain any value  false
//var_dump(empty($x));  # check if the vairable contain falsy values --> true

###############
//$x=null;
//var_dump(isset($x)); # check if the varaible contain any value  false
//var_dump(empty($x));  # check if the vairable contain falsy values --> true
#

# isset --> check the variable is defined and its value not equal null  --> true

#################

//var_dump(isset($x)); # check if the varaible contain any value  false
//var_dump(empty($x));  # check if the vairable contain falsy values --> true
//var_dump($x);


//$lec = true;
//unset($lec);  # remove the variable from the memory
//
//
//var_dump($lec);
$x= 'fdssdf';
exit;
exit();

for($i=0;$i<10; $i++){

    if($i==4) exit;
    echo "We need the break!". $i."<br>";
}

echo "After the loop";