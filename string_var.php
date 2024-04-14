<?php

$var1 = "Hello";
$str_var = "This is a $var1 simple\\var";

echo $str_var;



echo <<<STARTEND
        *
    *  $str_var *    *
*   *   *   *   *
STARTEND;


$var2 = 1000;
var_dump($var2);
#$var3 = (string)$var2;
$var3 = strval($var2);
var_dump($var3)
?>