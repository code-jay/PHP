<?php
class sample{
public $var=10;
public function __construct(){
echo"this is construct";
}
public function add( $var2){
return $this->var + $var2;
}
public function __destruct(){
echo "this is destructor";
}

}
$obj=new sample();
echo $obj->add(10);

?>