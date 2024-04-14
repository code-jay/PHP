<?php

$y = 1;

$func2 = function($x) use($y){
    return $x + $y;
};

$sum = $func2(4);
echo $sum;


$fn1 = fn($x) => $x+$y;

var_dump($fn1(10));

?>