<?php
/**
 * 
 */
session_start();
echo session_id();
if (isset($_SESSION['nombre'])) {
    echo "<br>/" . $_SESSION['nombre'];
} else {
    $_SESSION['nombre'] = "";
}

if (isset($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
}
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
    <form action="" method="post">
        <input type="text" name="nombre" value="">
        <input type="submit" name="send" value="enviar">
    </form>
</body>
</html>