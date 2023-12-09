<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $minombre = $_GET["nombre"];

    $servidor = 'localhost';
    $usuario = "root";
    $pass = "";

    // Establecer la conexion con MySQL
    $conexion = mysqli_connect($servidor, $usuario, $pass) or die("Error de conexion");

    // Seleccionamos la base de datos
    mysqli_select_db($conexion, "usuarios");


    $sql = "INSERT INTO clientes VALUES ('$minombre')";

    mysqli_query($conexion, $sql);


    ?>
</body>

</html>