<?php

class myClass{

    const INTEREST_RATE = 100;

    function showIntesrestRate(){
        echo self::INTEREST_RATE;
    }
}

echo myClass::INTEREST_RATE;

$obj = new myClass();

echo $obj->showIntesrestRate();


?>