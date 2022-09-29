<?php 
    $num0 = 8;
    $num1 = 2;
    $num2 = 7;
    if($num0>=$num1 && $num0>=$num2){
        echo $num0;
        if($num1>=$num2){echo $num1;echo $num2;}
        else {echo $num2;echo $num1;}
    }
    if($num1>$num0 && $num1>=$num2){
        echo $num1;
        if($num0>=$num2){echo $num0;echo $num2;}
        else {echo $num2;echo $num0;}
    }
    if($num2>$num0 && $num2>$num1){
        echo $num2;
        if($num0>=$num1){echo $num0;echo $num1;}
        else {echo $num1;echo $num0;}
    }
echo ("<br><br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/tree/main/unit3/condiciones/ej1\">Enlace Github aquí.</a>");
?>