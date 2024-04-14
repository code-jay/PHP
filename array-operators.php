<?php

$arra1 = [2,"3",4,"8"=>5];
$array2 = [2,3,4,8=>5];

$c = $arra1 + $array2;

print_r($c);

if($arra1==$array2){
    echo "both array are same";
}else{
    echo "array are not same";
}

?>