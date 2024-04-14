<?php
$a = 10;

function scopevar(){
   global $a;
   echo $a;
}

scopevar();

print_r($GLOBALS);

?>