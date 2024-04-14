<?php

class sampleClass{
        public int $number = 10;
        private $interest = 10;

        protected $name = "XYZ";

        public function __construct(){
            #echo $this->number;
        }

        private function showResult(){
            #echo $this->number;
            echo $this->interest;
        }

        public function showNumber(){
            #echo $this->number;
            echo $this->showResult();
            echo $this->newresult();
            echo $this->name;
        }

        protected function newresult(){
            #echo $this->number;
            echo $this->showResult();
            echo $this->name;
        }
}


class extendedClass extends sampleClass{

    public function childpro(){

        echo $this->newresult();
    }
    
}

$object1 = new sampleClass();
$object1->number;
#echo $object1->name;

$object1->showNumber();
$object1->newresult();


$object2 = new extendedClass();

$object2->showNumber();
$object2->childpro();

?>