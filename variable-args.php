<?php

function sum(...$numbers){
    echo  $numbers[4].$numbers[3].$numbers[2].$numbers[1].$numbers[0];
}

#sum(1,2,3,4,5);
?>



<?php

function add($a, $b)
{
    return $a+$b;
}

$sum = add(1,2,3);
print $sum;
?>