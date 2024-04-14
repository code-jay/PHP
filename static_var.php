<?php

function test(){
    $a = 0;
    echo $a;
    $a++;
}

test();
test();



function test2(){
   static $a = 0;
    echo $a;
    $a++;
}

test2();
test2();
test2();

?>