<?php

function showFriendsName($friend3, $friend1, $friend2){
    return ["friend1"=>$friend1, "friend2"=>$friend2, "friend3"=>$friend3];
}

$allfriends_name = showFriendsName(friend1:"John", friend2:"Rocky", friend3:'Jay');
print_r($allfriends_name);

?>