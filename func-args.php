<?php

function function1(
$input
){
    //echo $input[0];
}

$array2 = [2,3,4,5];
function1($array2)
?>


<?php

function add_some_extr(&$string){
    $string .= " and some extra text"; 
}

$str = 'This is a string';

add_some_extr($str);

echo $str;

?>