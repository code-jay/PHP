<?php
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()".PHP_EOL;;
    }
}

class OtherClass extends MyClass
{
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()".PHP_EOL;
    }
}

$class = new OtherClass();
$class->myFunc();
?>