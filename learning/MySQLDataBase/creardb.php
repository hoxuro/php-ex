<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";

    $conexion = mysqli_connect($servidor, $usuario, $password);

    if (!$conexion) {
        echo "conexion fallida";
    } else {

        $sql = "CREATE DATABASE usuarios";
        if (mysqli_query($conexion, $sql)) {
            echo "Base de datos creada con exito";
        } else {
            echo "error: " . mysqli_error($conexion);
        }

        mysqli_select_db($conexion, "usuarios");

        $sql2 = "CREATE TABLE clientes (nombre VARCHAR(20))";
        mysqli_query($conexion, $sql2);
    }

    ?>
</body>

</html>