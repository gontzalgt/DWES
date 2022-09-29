<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Gontzal García Triviño">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        $desde=1;
        $hasta=10;
            for ($i = $desde; $i <= $hasta; $i++){
                echo("<tr>");
                if($i!=$desde)echo ("<td style=\" background-color:green;\">".$i."</td>");
                else echo ("<td style=\" background-color:green;\">"."x"."</td>");
                for ($j = $desde; $j <= $hasta; $j++){
                    if($i!=$desde) echo ("<td>".$i*$j."</td>");
                    else echo ("<td style=\" background-color:green;\">".$i*$j."</td>");
                }
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>