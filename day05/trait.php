<?php

trait greetingTrait{

    function hello(){
        echo "<h1> Hello from greet trait </h1>";
    }

    function welcome($name){
        echo "<h1> Hello ".$name."</h1>";
    }

}
# group functionality


class A{
    use greetingTrait,test;

    #override the trait function
    protected function abc()
    {
        var_dump($this);
    }

}
$a = new A;
//$a->abc();
$a->welcome("noha");
$a->hello();
class B{
    use greetingTrait;
}
$r= new ReflectionClass("A");
var_dump($r->getMethods());
trait test{
    function abc(){
        echo "abcc";
    }
    function obje($obj){
        echo $obj->name;
    }
}