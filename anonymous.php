<?php

class Foo{

 public $bar;
 public $var1 = "Hello";
 public $var2 = 1+2;
 static $var3 = 4;

 function __construct(){
    $value = self::$var3;
    $this->bar = function() use($value){
        return $value;
    };
 }
}

$obj = new Foo();

echo ($obj->bar)();

?>