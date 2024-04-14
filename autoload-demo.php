<?php

spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});




$obj1 = new User("mySQL");

$obj1->addUser(1, 'Jay', 'Design');

echo $obj1->id;
echo $obj1->name;
echo $obj1->department;

// $obj2 = new User(1, "Jay");

// echo $obj2->id;
// echo $obj2->name;
// echo $obj2->department;


$obj2 = new Task();


?>