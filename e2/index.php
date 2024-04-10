<?php
$num = 15;
echo $num;
echo "<br>";

echo $num%3 == 0 ? "Es divisible entre 3" : "No es divisible entre 3";
echo "<br>";

$num = $num*21;
echo "15 x 21 = " . $num;
echo "<br>";

for ($i=0; $i < 100; $i++) { 
    $num += 1;
}
echo $num;
echo "<br>";

echo "Raíz cuadrada de ". $num . ": " . round(sqrt($num));

?>