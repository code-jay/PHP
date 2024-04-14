<?php

interface Template{
    public function setVariable($name, $var);
    public function getVariable();
}

class WorkingTemplate implements Template{

    private $vars = [];
    private $values;
    public function setVariable($name, $var){
        $this->vars[$name] = $var;
    }

    public function getVariable(){
        foreach($this->vars  as $name=>$var){
            $this->values .=$var;
        }

        return $this->values;
    }
}

$obj = new WorkingTemplate();

$obj->setVariable(1, "test1");
$obj->setVariable(2, "test2");


var_dump($obj->getVariable());
?>