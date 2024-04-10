<?php

$var = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
print_r($var);
echo "<br>";

$traduccion = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

for ($i=0; $i < count($var); $i++) {
    $var[$i] = $traduccion[$i];
}
print_r($var);
echo "<br>";


?>