<?php

abstract class AbstractClass{

    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut(){
        print $this->getValue();
    }
}


class concreteClass1 extends AbstractClass{

    protected function getValue(){
        echo "Concrete Class 1";
    }

    public function prefixValue($prefix){
        echo "{$prefix} ConcreteClass 1";
    }
}


class concreteClass2 extends AbstractClass{

    protected function getValue(){
        echo "Concrete Class 2";
    }

    public function prefixValue($prefix){
        echo "{$prefix} ConcreteClass 2";
    }
}


$class1 = new concreteClass1();
$class1->printOut();

$class1->prefixValue("Hello");
?>