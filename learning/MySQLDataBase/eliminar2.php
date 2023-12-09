<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $encontrado = false;
    $minombre = $_GET["nombre"];

    $servidor = 'localhost';
    $usuario = "root";
    $pass = "";

    $conexion = mysqli_connect($servidor, $usuario, $pass) or die("Error de conexion");

    mysqli_select_db($conexion, "usuarios");

    $consultar = "SELECT nombre FROM clientes";

    $registros = mysqli_query($conexion, $consultar);

    while ($registro = mysqli_fetch_row($registros)) {
        echo "Nombre: " . $registro[0];
        echo "<br/>";

        if (!$encontrado) {
            if ($registro[0] == "$minombre") {
                $encontrado = true;
            } else {
                $encontrado = false;
            }
        }
    }

    if ($encontrado) {
        $sql = "DELETE FROM clientes WHERE nombre= '$minombre'";
        mysqli_query($conexion, $sql);
        echo $minombre . " ha sido borrado de la base de datos";
    } else {

        echo $minombre . " NO ha sido borrado de la base de datos";
    }

    ?>

</body>

</html>