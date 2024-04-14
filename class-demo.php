<?php

class simpleClass{

    public $name = "Jay";

    public function displayName(){
        echo $this->name; 
    }
}

$object1 = new simpleClass();

echo $object1->name;
echo $object1->displayName();

// $className = "simpleClass";
// $object2 = new $className();


?>