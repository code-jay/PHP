<?php

class MyClass{
    const CONSTANT_VALUE = "some constant Value";

    protected function showMessage(){
        echo "Bases class protected function is called";
    }
}

class OtherClass extends MyClass{
    public static $my_static = "Static Variable";

    public static function doublecolon(){
        echo parent::CONSTANT_VALUE;
        echo self::$my_static;

    }

    public function callBase(){
        parent::showMessage();
    }
}



// echo MyClass::CONSTANT_VALUE;
echo OtherClass::$my_static;

OtherClass::doublecolon();
$obj = new OtherClass();
$obj->callBase();
?>