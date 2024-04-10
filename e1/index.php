<?php

$texto = "Comer algas es realmente sano";
echo $texto;
echo "<br>";
$textoArr = explode(" ", $texto);

$posAlgas = array_search("algas", $textoArr, true);
echo "Posición 'algas': " . $posAlgas;
echo "<br>";

$texto = str_replace("realmente", "muy", $texto);
echo $texto;
echo "<br>";

$contieneAnacardo = str_contains($texto, "anacardo");
echo "Contiene anarcardo: ";
echo $contieneAnacardo?"sí":"no";
echo "<br>";

$texto = strrev($texto);
echo $texto;
echo "<br>";

$numE = count_chars($texto);

foreach (count_chars($texto, 1) as $i => $val) {
    if (chr($i) == 'e'){
        echo "Hay $val \"" , chr($i) , "\" en el texto\n";
    }
 }

?>