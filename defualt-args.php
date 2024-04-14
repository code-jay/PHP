<?php

function showMessage($greet="Hello"){
    echo $greet." Morning";
}

// showMessage();
// showMessage(null);
// showMessage('Good');



function showMessage2($greet=array('orange'), $message=NULL){
    echo $greet[0]." ".$message; 
}

showMessage2();
showMessage2(array("Red", "Green", "Yello"), "color");

?>