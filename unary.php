<?php

$boolVar = false;

if(!$boolVar){
    echo "Hello";
}

$tern = 10;
$val1 = "greater than 8";
$val2 = "less than 8";

# ternary operator ?:
$mess = $tern>8?$val1:$val2;

echo $mess;

?>