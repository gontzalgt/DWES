<?php
/**
 * Ejercicio caducar sesiones
 * @author: Gontzal García Triviño
 */
//contador pulsaciones
session_start();
$contador = 0;
if (isset($_SESSION['contador'])) {
    $contador = $_SESSION['contador'];
    $contador++;
    $_SESSION['contador'] = $contador;
} else {
    $contador = 1;
    $_SESSION['contador'] = $contador;
}
$_SESSION['inicioTime'] = time();
$_SESSION['intervaloTime'] = 5;
if(isset($_SESSION['inicioTime'])) {
$tiempo_transcurrido = time();
/*se multiplica por 60 segundos ya que se configura en minutos*/
$tiempo_maximo = $_SESSION['inicioTime'] + ( $_SESSION['intervaloTime'] * 60 ) ;
echo $tiempo_maximo;
echo "<br>";
echo $tiempo_transcurrido;
if($tiempo_transcurrido > $tiempo_maximo){
header("Location: salir.php");
}
}
else {
/*se resetea el inicio*/
$_SESSION['inicioTime'] = time();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caducar sesiones</title>
</head>
<body>
    <h1>Contador de pulsaciones</h1>
    <p>Has pulsado el botón <?php echo $contador; ?> veces</p>
</body>
</html>