<?php

function function1(){
    function function2(){
        echo "Hello I'm inside function2";
    }
}

if(function_exists('end')){
    echo "end exists";
}

?>