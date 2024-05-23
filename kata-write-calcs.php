<?php
$resource = "calculs_3.txt";
$documento = fopen($resource, "w");

$numero = 3;
$factorial = 1;
for($i = 1 ; $i < $numero + 1; $i++)
{
    $factorial *= $i;
}
$frase = "Número: " . $numero . " Quadrat: " . pow($numero, 2) . " Cub: " . pow($numero, 3) . " Factorial: " . $factorial;
fwrite($documento, $frase);
fclose($documento);

?>