<?php

class Test{

    public readonly string $name;

    public function __construct(string $prop){
        $this->name = $prop;
    }

}


$obj = new Test("XYZ");

echo $obj->name;

$obj->name = "Jay";

echo $obj->name;

?>