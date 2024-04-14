<?php

$functionavail = true;

#functionName1();

function functionName1(){
    echo "Hello function 1 ";
}


if($functionavail){
    function function23(){
        echo "hello function 2";
    }
}

#function2();

?>


<?php 
// function within function

function function1(){
    function function2(){
        echo "Hello I'm inside function2";
    }
}

function1();
function2();

?>