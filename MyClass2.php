<?php

class MyClass2
{
    const CONSTANT = 'constant value2';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

?>