<?php

class OpenSource {
    private $instructor;
    protected $sub_tracks;
    public $list_of_courses;
    const PI = 3.1415;
    static $t= "ff";
    public function __construct() {
        $this->instructor = "Noha";
        $this->sub_tracks = "Application";
        $this->list_of_courses =
            ["Python","PHP","Scala","Laravel","Admin"];
    }
    public function getInstructor() {
        return $this->instructor;
    }
    public function setInstructor($instructor) {
        $this->instructor = $instructor;
    }
    private function getsub_tracks() {
        return $this->sub_tracks;
    }
}


$test = new ReflectionClass("OpenSource");
var_dump($test);
$methods =$test->getMethods();
var_dump($methods);
$methods =$test->getProperties();
var_dump($methods);
//$t =$test->getProperty("list_of_course");
//var_dump($t);

//$t =$test->getConstant("PI");
//var_dump($t);
//
//var_dump($test->getStaticPropertyValue("t"));
//var_dump($test->getStaticProperties());


//$pdo = new ReflectionClass("PDO");
//
//$methods =$pdo->getMethods();
//var_dump($methods);




