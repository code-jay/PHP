<?php

# key can be interger or string only

$array = [
        3 => 20,
        "key1" => 70,
        "foo" =>111,
        4 =>array(
            2=>array(
                4,5
            )
        ),
];

#echo $array[4][2][0];
#var_dump($array);

$array = [20,70,6=>111,222,];
#var_dump($array);

$array = array(5=>1, 12=>2);

$array[] = 56;

var_dump($array);

$array["x"] = 56;

var_dump($array);

unset($array["x"]);

var_dump($array);

unset($array);
var_dump($array);
?>