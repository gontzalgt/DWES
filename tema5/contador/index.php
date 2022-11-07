<?php
/**
* index.php del contador
* @author Gontzal García Triviño
*/
require_once("contador.php");
$c1=new Contador();
$c2=new Contador();

for($i=0;$i<5;$i++){
    $c1->contador();
}

for($i=0;$i<10;$i++){
    $c2->contador();
}

echo $c1->toString();
echo '<br>';

echo $c2->toString();
echo '<br>';

echo 'Numero contadores creados: '.Contador::contarInstancias();
?>