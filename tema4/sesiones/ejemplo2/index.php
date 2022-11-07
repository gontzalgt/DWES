<?php
/**
 * 
 */
session_start();
echo session_id();
if (isset($_SESSION['mensaje'])) {
    echo "<br>/" . $_SESSION['mensaje'];
} else {
    $_SESSION['mensaje'] = "Hola";
}
?>