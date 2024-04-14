<?php

$str = "XYZ-ABC-JAY";
$str_array = explode("-", $str,2);

print_r($str_array);
?>


<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));

?>