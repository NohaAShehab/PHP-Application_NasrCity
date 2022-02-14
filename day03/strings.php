<?php
    #trim function
//    $greet= "  Good morning team  \t";
//    var_dump($greet);
//    $greet=rtrim($greet,"maG \t");
//    var_dump($greet);

//$str="You came
//to me
//in that hour
//of need";
//echo nl2br($str);
//
//$name="noha";
//$s = 'monkey';
//printf("[%'#10s]\n",  $s);// use the custom padding character '#'
//printf("[%'$10s]\n",  $name);// use the custom padding character '#'

//
//$num = 5;
//$location = 'tree';
//$format = 'There are %d monkeys in the %s';
//echo sprintf($format, $num, $location);
//echo "<br>";
//echo sprintf($format, 10, 'zoo');


//$mydata= "noha:application:iti:iruiour:8reuoworiwur";
//$mydata=explode(":",$mydata,3
//);
//var_dump($mydata);

//$newstr=implode("||",$mydata);
//var_dump($newstr);
//$_REQUEST["name"]="test";
//$_REQUEST["password"]="8o787";
//unset($_REQUEST["_ijt"]);
//$str= join(":",$_REQUEST);
//var_dump($_REQUEST);
//echo $str;


############## str tokinnizer

//$string = "My name is Noha, I works at ITI";
//$tok = strtok($string, " ");
//var_dump($tok);
//$tok = strtok($string, " ");
//var_dump($tok);
//while ($tok!=false){
//    echo $tok."<br>";
//    $tok=strtok("\n\t ");
//}
//var_dump($string);

//$phptxt="PHP is simple";
//echo substr($phptxt,-5,2); //


//$a="php";
//$b="php";
//var_dump(strcmp($a,$b));
//$a="ahmedyyyyyy&#";
//$b="Ahmedyyyyyy_$";
//var_dump(strcasecmp($a,$b));

//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
//echo $onlyconsonants."<br>";
//
//$input = array('A: XXX', 'B: Xmm', 'C: Xyui');
////$input = array('A: X##', 'B: X##', 'C: X##i');
//$input=substr_replace($input,"##",3,2);
////$input=substr_replace($input, 'YYY', 3, 3);
//var_dump($input);
////echo implode('; ', $input);
///
###################3333 Regular expression
//$email='nshehab@gmail.com';
//$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
//$res=preg_match($pattern,$email);
//var_dump($res);
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern="/ain/i"; # i--> ignore cases
//# return 1 if part of the expression  statisfy pattern
//$res=preg_match($pattern,$str);
//var_dump($res);
# scan all string --> number of matches
$res=preg_match_all($pattern,$str,$matches);
var_dump($res);
var_dump($matches);


//noha@ggg-kldjf-fklklj.com
