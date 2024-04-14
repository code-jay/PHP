<?php

function inverse($x){

    if(!$x){
        throw new Exception("Division by Zero");
    }
    return 1/$x;
}

try{
    echo inverse(0);
    echo inverse(5);
}catch(Exception $e){
    echo "Message: ".$e->getMessage();
}finally{
    echo "Code has been successfully executed.";
}


?>