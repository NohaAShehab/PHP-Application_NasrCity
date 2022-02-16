<?php

//
//$printclousure=function (){
//    echo "<h1>".$this->dept."</h1>";
//};  # can be used with object---> object has propertu with name dept
//#
//class Student{
//    public $dept="application";
//
//}
//$s= new Student();
//$printclousure->bindTo($s)();
//
//class Company{
//    public $dept;
//    function __construct($dept_name){
//        $this->dept= $dept_name;
//    }
//}
//
//$c= new Company("Vodafone");
//#bind clousure to the object
//$res=$printclousure->bindTo($c);
//var_dump($res);
//$res();
//
//
//$test_closure=function ($m){
//    echo "<h1>".$this->$m."</h1>";
//};
//
//$c->location="Cairo";
//$test_closure->bindTo($c)("location");


################# closure

class Student{
    protected $level=0;
    private $grade= "Excellent";
    public $name="Ahmed";

    function getgrade(){
        return $this->grade;
    }
}


$printcloousure=function ($var_name){
    echo "<h3>".$this->$var_name."</h3>";
};

//$nameclo=function (){
//    echo "<h3>".$this->level."</h3>";
//    echo "<h3>".$this->grade."</h3>";
//};
//$s=new Student();
////$printcloousure->bindTo($s)("name");
//
////$printcloousure->bindTo($s,Student::class)("level");
////$printcloousure->bindTo($s,Student::class)("grade");
//
//$nameclo->call($s); #no scope worry


function sayhello(){
    echo "hello";
    return function ($name){
        echo $name;
        return function (){
            echo "<h2>you reached the end </h2>";
        };
    };
}

//$res=sayhello();
//
//var_dump($res);
////$t=$res("ahmed");
////$t();
//$res("ahmed")();



# define clousure inside the class

//class Test{
//
//
//    function testfun(){
//        echo "hello ";
//        return function ($name){
//            echo $name;
//            return function (){
//                echo "<h2>you reached the end </h2>";
//            };
//        };
//    }
//
//    function abc($x){
//        if ($x==0)return function ($name){echo "<h1>".$name."</h1>";};
//        return function (){
//            echo "not equal zero";
//        };
//    }
//}
//
//
//$s=new Test();
//$s->testfun()("noha")();
//$s->abc(10)();


//function test (int $x, float $y):int{
//    var_dump($x,$y);
//}
//test(10,5);
//
//function (PDO $db){
//
//}



