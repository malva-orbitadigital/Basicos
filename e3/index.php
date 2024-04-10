<?php

$var = "a-a-r-e-f-a";
echo $var;
echo "<br>";

$var = str_replace("a", "tortuga", $var);
echo $var;
echo "<br>";

$var = explode("-", $var);
print_r($var);
echo "<br>";

rsort($var);
print_r($var);


?>