<?php

$a = 100;
$b = 10;

if($a>$b){
    echo "a is greater than b";
}elseif($a==$b){
    echo " a and b are equal";
}else{
    echo "b is greater than a";
}


if($a>$b):
    echo "a is greater than b";
elseif($a==$b):
    echo " a and b are equal";
else:
    echo "b is greater than a";
endif;

?>