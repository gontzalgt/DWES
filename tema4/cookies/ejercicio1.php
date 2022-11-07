<?php
/* 1 - Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la
cookie y destruirla.
@author: Gontzal García Triviño */
// Crear cookie
setcookie("cookie", "valor1", time() + 60);
// Comprobar estado de la cookie
if (isset($_COOKIE["cookie"])) {
    echo "La cookie existe";
}
else {
    echo "La cookie no existe";
}
// Destruir cookie
setcookie("cookie", "", time() - 3600);
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