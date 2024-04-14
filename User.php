<?php


class User{
    public int $id;
    public string $name;
    public string $department;
    public string $db;
    public function __construct( private string $dbconnection){
       
        $this->dbconnection = $dbconnection;
        #echo "Object properties initialized";
    }

    public function addUser(int $id, string $name, string $department){
        $this->id=$id;
        $this->name=$name;
        $this->department=$department;
    }

    public function updateUser(int $id, string $name, string $department){
        #Update code
    }

    public function deleteUser(int $id){
        #Update code
    }

    function __destruct(){
        echo "Destroying ".__CLASS__;
    }
}
?>