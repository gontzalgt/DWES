<?php
/**
 * Ejercicio de ejemplo
 * @author Gontzal García Triviño
 */

//$file = fopen("poema.txt", "r");
$file = fopen("poemaMayuscula.txt", "w");

// while (!feof($file)) {
//     $linea = fgets($file);
//     echo $linea;
//     echo "<br>";
// }
while (!feof($file)) {
    $linea = fgets($file);
    $text = strtoupper($linea);
    fwritte($file, $text);
}
fclose($file);

?>