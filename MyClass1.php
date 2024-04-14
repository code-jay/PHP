<?php

class MyClass1
{
    const CONSTANT = 'constant value1';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

?>