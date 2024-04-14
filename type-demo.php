<?php

class User{

    public int $id;
    public string $name;

    public function __construct(){
       # connect to database;
    }
    public function addUser(int $id, string $name){
        $this->id = $id;
        $this->name = $name;

        #connect to DB
        #insert id and name in user table
    }

    public function showUser(int $userid){
        #$this->id = $id;
        echo "id is ".$this->id." Name is ".$this->name;
        # connect to DB
        # write some sql Queries and get the record
        #return $data;
    }

    public function deleteUser(int $userid){
        # 1. check data from table user for $userid
        # 2. delete that data
        return 1;
    }

    public function updateUser(int $userid){
        
    }
}

// $userid = $_POST['userid'];
// $username = $_POST['username'];

$user1  = new User();
$user1->addUser(1000, 'Jay');
$user1->showUser(1000);
$response = $user1->deleteUser(1000);
if($response==1){
    echo "record successfully deleted";
}
$user1->updateUser(1000);

// echo $user1->id;
// echo $user1->name;
?>