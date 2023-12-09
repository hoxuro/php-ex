<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./actualizar2.php" id="miformu" method="get" name="miformu">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" />
        </div>

        <?php

        $host = 'localhost';
        $usuario = "root";
        $pass = "";

        // Establecer la conexion con MySQL
        $conexion = mysqli_connect($host, $usuario, $pass) or die("Error de conexion");

        // Seleccionamos la base de datos
        mysqli_select_db($conexion, "usuarios");

        $consultar = "SELECT nombre FROM clientes";

        $registros = mysqli_query($conexion, $consultar);

        echo "<label for='seleccionar'>Elige un nombre: </label>";
        echo "<select name='seleccionar' id='seleccionar'>";

        while ($registro = mysqli_fetch_row($registros)) {

            echo "<option value='$registro[0]'>" . $registro[0] . "</option>";
        }

        echo "</select>";

        ?>

        <input type="submit" value="actualizar" />

    </form>

</body>

</html>