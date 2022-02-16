<?php


//interface DisplayMsg {
//    public function printMsg(string $msg);
//}
//
////class Test implements DisplayMsg{
////    function printMsg(string $msg){
////        echo "echo ".$msg;
////    }
////}
////$t = new Test();
////var_dump($t instanceof DisplayMsg);
//
//class Application {
//    private $displayer;   # make sure the object ---> Displaymsg
//    public function getDisplayer(): DisplayMsg {
//        return $this->displayer;
//    }
//    public function setPrinter(DisplayMsg $dismsg) {
//        $this->displayer = $dismsg;
//    }
//}
//
//
//$a= new Application();
//$a->setPrinter(new class implements DisplayMsg{
//    public function printMsg(string $msg){
//        echo $msg;
//    }
//});  # displaymsg
//$res= $a->getDisplayer();
//$res->printMsg("fff");
//
//var_dump($res instanceof DisplayMsg);


Interface Printable{
    function printstr($name);
}

class Mystr{
    private $msg;
    public $new_msg="hi";
    function setStr(Printable  $s){
        $this->msg= $s;
    }

    function getStr():Printable{
        return $this->msg;
    }
}

//class Helper implements Printable{
//
//}

//$h = new Helper();

//$s = new Mystr();
//$s->setStr($h);
//echo "fff";

$s = new Mystr();
$s->setStr(new class implements Printable{
    function printstr($name)
    {
        // TODO: Implement printstr() method.
        echo json_encode($name);

    }
});

//function(){};
var_dump($s->getStr());
var_dump($s->getStr() instanceof Printable);

$m= $s->getStr()->printstr($s);



