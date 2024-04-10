<?php

$texto = "Comer algas es realmente sano";
echo $texto;
echo "<br>";
$textoArr = explode(" ", $texto);

$posAlgas = array_search("algas", $textoArr, true);
echo "Posición 'algas': " . $posAlgas+1;
echo "<br>";

$texto = str_replace(array( "Comer", "realmente"), array("cosa","Adios"), $texto);
echo $texto;
echo "<br>";

$buscar = "asd";
$contiene = stripos($texto, $buscar);
echo "Contiene '".$buscar."': ";
echo $contiene != false ?"sí":"no";
echo "<br>";

// $texto = strrev($texto);
$palabras = explode(" ", $texto);
$texto = "";
foreach ($palabras as $palabra){
    $texto .= strrev($palabra)." ";
}
echo $texto;
echo "<br>";

$numChar = substr_count($texto, "e");
echo "Hay ". $numChar . " 'e' en el texto";


// foreach (count_chars($texto, 1) as $i => $val) {
//     if (chr($i) == 'e'){
//         echo "Hay $val \"" , chr($i) , "\" en el texto\n";
//     }
//  }


?>