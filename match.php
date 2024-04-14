<?php

$food = 'cake';

$return_var = match ($food){
    'apple'=>'This is apple',
    'bar'=> 'This is bar',
    'cake'=>'This is cake'
};

var_dump($return_var);
?>