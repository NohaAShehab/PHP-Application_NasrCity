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
    static $work="iti";
    const YEAR= 2022;
    
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
        var_dump($this);
        echo "<br>".json_encode($this);
        # invoked --> unset(object) or at the end of the script
        echo " <h2> object removed</h2>";
    }


    # functions by default public access modifiers
    function speak(){  # $this --> represent current object
            echo "I am ".$this->name." ".
                $this->address." ".$this->age;
//            var_dump($this);
    }

    function changeAddress($address){

            $this->address = $address;
    }
    # helper function
    private  function changeage($age){
            $this->age= $age;
    }

    static function personclass(){
        echo '<br> I am static function in the person Class';
    }



}

$p = new Person("Ahmed",22);
var_dump($p);
$p2 = new Person();
var_dump($p2);
$p->name="noha";
var_dump($p);
//$p->age= 29;
# check of $var --> instance of class
var_dump($p instanceof Person);
# static depend on the class
//var_dump(Person::$work);
//var_dump(Person::YEAR);
$p->speak();
unset($p);
//$p->changeAddress("October");
//var_dump($p);
Person::personclass();

