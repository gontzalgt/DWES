<?php
/* 5 - Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
correspondiente. Marcar el día actual en verde y los festivos en rojo. 
@author: Gontzal García Triviño */
// Día del mes actual

$diaActual = date("j");
// $diaActual = 1;

// Devuelve el mes actual
$mesActual = date("n");
// $mesActual = 4;

// Año actual
$añoActual = date("Y");
// $añoActual = 2022
$festivosNacionales = array(
    mktime(0, 0, 0, 10, 21, $añoActual), //Fiesta Nacional de España
);
$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

// Cantidad de dias del mes
$diasMes = cal_days_in_month(CAL_GREGORIAN, $mesActual, $añoActual);
$semana = date("N", mktime(0, 0, 0, $mesActual, 1, $añoActual))-1;
$dia = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <Link link rel="stylesheet" href="style.css"></Link>
</head>
<body>
<table>
<?php

echo "<tr>";

for ($i = 0; $i < 7; $i++) {
    echo "<th>" . $dias[$i] . "</th>";
}
echo "</tr>";
echo "<tr>";

// Espacios en blanco del mes
for ($i = 0; $i < $semana; $i++) {
    echo "<td></td>";
}
while ($dia <= $diasMes) {
    
    if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivosNacionales) || ($dia + $semana) % 7 == 0) {
        echo "<td style='color:red'>" . $dia . "</td>";
    }
    else {
        if ($dia == $diaActual) {
            echo "<td style=\"background-color:green;\">$dia</td>";
        }
        else
            echo "<td>" . $dia . "</td>";
    }
    if (($dia + $semana) % 7 == 0) {
        echo "</tr><tr>";
    }
    $dia++;
}
echo "</tr>";
    ?>
    </table>
</body>
</html>