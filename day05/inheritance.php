<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
# create your own datatype
class Person{
    protected $name;
    private $intake;
    function  __construct($name, $intake)
    {
            $this->name=$name;
            $this->intake= $intake;
    }

    public function callingPerson(){
        echo "I am a person";}

    function  __destruct(){
        echo "<h4>object removed </h4>";
    }

    # function cannot be overriden in the child classes.
    final function testfinal(){
        echo "I am test function";
    }
}
class Student extends Person{
    public $level;
    
    function  __construct($lv)
    {
        parent::__construct($name="",$intake=42);
        $this->level=$lv;
    }

    public function callingStudent(){
        echo $this->name;
        echo "I am a studnet ";}


    public function callingPerson($var=""){
        echo "bla bla bla";}

    function  __destruct(){
        parent::__destruct();
        echo "<h4>Student removed </h4>";
    }

//    function testfinal(){
//        echo "I am test function";
//    }
}

//$s = new Student(5);
//var_dump($s);
//$s->callingStudent();
//$s->callingPerson();

//
final class A{  # class cannot be inherited


}
//class B extends  A{
//
//}
//echo "hi";