<?php
/**
 * index.php
 * @author Gontzal García Triviño
 */

include("config.php");

if (isset($_POST['enviar'])) {

    $tmp = explode('.',$_FILES['file']['name']);
    $ext = end($tmp);

    if (($_FILES['file']['size'] < MAXSIZE) && 
    in_array($_FILES['file']['type'],$formatospermitidos) &&
    in_array($ext,$extensiones)) {
        if ($_FILES['file']['error']>0) {
            echo "Return Error";
        }
        else{
            $filename = $_FILES['file']['name'];
            $filename = uniqid().'.'.pathinfo($filename,PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["file"]["tmp_name"], DIRUPLOAD . $filename);
        }
    };
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagenes</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="file">Imagen: </label><input type="file" name="file" id="">
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
        $handle = opendir(DIRUPLOAD);
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '<img src="'.DIRUPLOAD.$file.'" class="carrousel"/>';
            }
        }
        closedir($handle);
    ?>
</body>
</html>