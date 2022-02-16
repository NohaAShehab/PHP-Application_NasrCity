<?php

//Interface Animals{
//    public function makeNoise();
//}
//class Cat implements Animals{
//    public function makeNoise(){
//        $this->meow();
//    }
//    function meow(){
//        echo '<br> mewo';
//    }
//}
//class Dog implements Animals{
//    public function makeNoise(){
//        $this->bark();
//    }
//    function bark(){
//        echo '<br> bark';
//    }
//}
//
//
//class Person{
//    Const CAT='cat';
//    Const DOG='dog';
//    private $petpreference;   # object --> prefer dog, cat
//    private $pet; # $pet ==> pet object
//
//    public function isCatLover() :bool{
//        $this->petpreference =Person::CAT;
//        return $this->petpreference;
//    }
//    public function isDogLover(): bool {
//        return $this->petpreference =self::DOG;
//    }
//    public function setPet(Animals $pet) {
//        $this->pet = $pet;
//    }
//    public function getPet(): Animals {
//        return $this->pet;
//    }
//}
//
//$p= new Person;
//var_dump($p);
//$p->isDogLover(); ### person like dogs
//
//if($p->isDogLover()){
//    $p->setPet(new dog());
//}
////var_dump($p);
////
////$res=$p->getPet();
////var_dump($res);
////$res->makeNoise();
//$p->getPet()->makeNoise();
//# modifying the function behavou accordint to pet type

#######################

class Test{
    # allow user call function
    function __call($funname,$args){
//        echo $funname;
        if($funname=="hello"){
            echo "Hello".json_encode($args);
        }else{
            echo "<h1>".$funname." called"."</h1>";
            echo "args are ".json_encode($args);

        }
    }

    static function __callstatic($name, $args)
    {
        var_dump($name);
        var_dump($args);
    }
}

$t= new Test;
var_dump($t);
#overlaod class with new unknown functions 
$t->hello("noha","hh","test");
$t->welcome("jhgh",7,88,888);
$t->introduceYourself("noha","cairo");

Test::teststatic(6.7,7,8,9);