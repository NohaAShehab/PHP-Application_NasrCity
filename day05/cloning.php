<?php

class Product{
    public $name;
    public $category;
}

$p = new Product;
$p->name ="kiwi";
var_dump($p);

$p2=clone $p;
$p2->name = "orange";
var_dump($p2, $p);


$p3 = $p2;  # the same reference
var_dump($p3);
$p2->name="test";

var_dump($p3,$p2);