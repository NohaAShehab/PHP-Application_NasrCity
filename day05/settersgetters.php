<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Person{
    # attributes
    public $name; # can be accessed from the outside the class
    protected $age;
    public $intake=42;
    private $address ;


    ################ construnctor
    #### mulitple constructor
    function __construct($name=null,$age=null)
    {
        # calling --> define the object
        echo "Constructor called <br>";
        $this->name=$name;
        $this->age= $age;
    }

    function  __destruct(){
        echo "<br>".json_encode($this);
        # invoked --> unset(object) or at the end of the script
        echo " <h2> object removed</h2>";
    }
    #change the object structure
    # set new property form the run
    function __set($var_name, $value)
    {
        // TODO: Implement __set() method.
        # do whatever validation you want
        $this->$var_name=$value;
//        unset($this->$var_name);
//        trigger_error("We don't do that here");
//        echo "We don't do that here";

    }
    
    function __get($var_name){
        # get value of the object
        return $this->$var_name."%%";
    }
}

//$p=new Person();
//$p->name= "Ahmed";
//$p->dept="os";
//echo "<h1>".$p->dept."</h1>";
//var_dump($p->__get("dept"));
//var_dump($p->__get("name"));
//$p->name="Nasr_city";
//$p2= new Person("Roaa",2);
//$p2->test="iti";
//
//var_dump($p);
//var_dump($p2);
//
//# update --> object structure
//# dynamic setters and getters


class Employee{
    public $emp_name;
    private $sal;
    static $test="iti";

    function __construct($name=null, $sal=null){
        $this->emp_name=$name;
        $this->sal=$sal;
        echo self::$test;
//        @var_dump(self);

    }
    function __set($var_name,$value){
        echo "<h1> called </h1>";
        $this->$var_name=$value."#";
//        unset( $this->$var_name);
    }
    function __get($var_name){
        return trim($this->$var_name,"#");
    }
//
//    function __call(){
//        echo '<h1> object called </h1>';
//    }
}

$e1=new Employee();
# php support object modification in the runtime
//$e1->dept="OS";
//$e1->day="wednesday";
$e1->__set("day","wednesday");
var_dump($e1);
$res=$e1->__get("day");
echo $res;
//$e1->__call();//
//$e2= new Employee("Ahmed",1000);
//$e2->city="NasrCity";
//$e2->__set("test","phpp");
//
//var_dump($e2);
