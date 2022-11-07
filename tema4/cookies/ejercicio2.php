<?php
/* 2 - Escriba una página que compruebe si el navegador permite crear cookies y se lo diga al usuario
(mediante una o más páginas).
@author: Gontzal García Triviño */
//crear cookie sin tiempo
setcookie("cookie", "valor1");
// Comprobar si el navegador permite crear cookies
if (isset($_COOKIE["cookie"])) {
    echo "El navegador permite crear cookies";
}
else {
    echo "El navegador no permite crear cookies";
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

</body>
</html>