<?php

$output = `ls -al`;
echo "<pre>$output</pre>";


$output2 = shell_exec('ls -al');
echo "<pre>$output2</pre>";
?>