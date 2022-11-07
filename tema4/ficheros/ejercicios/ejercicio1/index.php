<?php
/**
 * Ejercicio 1
 * @author Gontzal García Triviño
 * Desarrolla una aplicación que genere un script para cración de usuarios a partir de un fichero.
 */

include("config.php");
//generar script de creación de usuarios a partir de un fichero
//el fichero tiene el siguiente formato:
//nombre;apellidos;email;password;fecha_nacimiento;telefono;direccion;cp;ciudad;provincia;pais
//el script de creación de usuarios se guardará en un fichero llamado usuarios.sql

//abrir fichero
$archivo = fopen("usuarios.txt", "r");
//leer fichero
$linea = fgets($archivo);
//cerrar fichero
fclose($archivo);
//generar script
$script = "INSERT INTO usuarios (nombre, apellidos, email, password, fecha_nacimiento, telefono, direccion, cp, ciudad, provincia, pais) VALUES ";
while ($linea != false) {
    $datos = explode(";", $linea);
    $script .= "('" . $datos[0] . "', '" . $datos[1] . "', '" . $datos[2] . "', '" . $datos[3] . "', '" . $datos[4] . "', '" . $datos[5] . "', '" . $datos[6] . "', '" . $datos[7] . "', '" . $datos[8] . "', '" . $datos[9] . "', '" . $datos[10] . "'),";
    $linea = fgets($archivo);
}
$script = substr($script, 0, -1);
$script .= ";";
//guardar script en fichero
$archivo = fopen("usuarios.sql", "w");
fwrite($archivo, $script);
fclose($archivo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>Formato:</p>
        <select name="rol" id="">
            <option value="mysql">MySQL</option>
            <option value="linux">Linux</option>
            <option value="oracle">Oracle</option>
        </select>
        <br>

        <p>Año:</p>
        <select name="rol" id="">
            <option value="22/23">22/23</option>
        </select>
        <br>

        <p>Curso:</p>
        <select name="rol" id="">
            <option value="1">1º DAW</option>
            <option value="2">2º DAW</option>
        </select>
        <br>
        
        <input type="submit" name="enviar" value="enviar">
</body>
</html>