<?php

$array = [3,4,5,6,7,8];

foreach($array as $value){
     $value=$value;
}


foreach($array as $key=>$num){
    echo $key."---".$num;
}


foreach($array as &$value){
    if($value==5)
        break;

    $value=$value*2;
}


foreach($array as &$value){
    if($value==5)
        continue;
    
    $value=$value*2;
}

echo "<pre>";
print_r($array);
echo "<pre>";
?>