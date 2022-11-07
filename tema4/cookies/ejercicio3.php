<?php
/* 3 - Crea un formulario de login que permita al usuario recordar los datos introducidos. Incluye una
opción para borrar la información almacenada.
@author: Gontzal García Triviño */
//formulario login
if (isset($_POST["enviar"])) {
    //comprobar si el usuario quiere borrar la información
    if (isset($_POST["borrar"])) {
        setcookie("usuario", "", time() - 3600);
        setcookie("contrasena", "", time() - 3600);
        echo "Información borrada";
    }
    else {
        //comprobar si el usuario quiere recordar los datos
        if (isset($_POST["recordar"])) {
            setcookie("usuario", $_POST["usuario"], time() + 60);
            setcookie("contrasena", $_POST["contrasena"], time() + 60);
        }
        //comprobar si el usuario y la contraseña son correctos
        if ($_POST["usuario"] == "gontzal" && $_POST["contrasena"] == "gontzal") {
            echo "Usuario y contraseña correctos";
        }
        else {
            echo "Usuario o contraseña incorrectos";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio3.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" value="<?php if (isset($_COOKIE["usuario"])) {echo $_COOKIE["usuario"];} ?>"><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" value="<?php if (isset($_COOKIE["contrasena"])) {echo $_COOKIE["contrasena"];} ?>"><br>
        <input type="checkbox" name="recordar" id="recordar">
        <label for="recordar">Recordar usuario y contraseña</label><br>
        <input type="checkbox" name="borrar" id="borrar">
        <label for="borrar">Borrar información</label><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>