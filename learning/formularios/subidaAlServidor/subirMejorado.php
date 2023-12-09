<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $directorioSubida = "uploads/";
    $max_file_size = "512000";

    $extensionesValidas = array("png", "gif");

    if (isset($_POST["submit"]) && isset($_FILES['imagen'])) {
        $errores = 0;
        $nombreArchivo = $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directoriotemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);

        // echo '<pre>', var_dump($arrayArchivo), '</pre>';

        $extension = $arrayArchivo['extension'];

        if (!in_array($extension, $extensionesValidas)) {
            echo "Extension no valida";
            $errores = 1;
        }

        if ($filesize > $max_file_size) {
            echo "La imagen supera el tamaño maximo";
            $errores = 1;
        }

        if ($errores == 0) {
            $nombreCompleto =  $directorioSubida . $nombreArchivo;
            move_uploaded_file($directoriotemp, $nombreCompleto);
            echo "fichero subido correctamente";
        }
    }

    ?>
</body>

</html>