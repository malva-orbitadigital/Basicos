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
echo "<br>";

$nuevo = array_filter($var, function($a) {
        return !str_contains($a, 'a');
    });
print_r($nuevo);
echo "<br>";

echo "Dimensión: " . count($nuevo);

?>