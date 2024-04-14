<?php

function func1($param1){
    echo $param1;  
}

func1('Hello');


$greet = function($param1){
    echo $param1;
};

$greet("Hello");


$fun1 = fn($param1, $param2)=> $param1+$param2;

$fun1(2,3);

?>