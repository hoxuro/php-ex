<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    try {

        //abrimos la conexion
        $conn = new mysqli('localhost', 'root', '', 'pruebas');
        echo 'Conexion OK';

        echo "<br/>";

        $query = "SELECT * FROM users";


        $rows = $conn->query($query);

        while ($fila = $rows->fetch_assoc()) {

            echo $fila['id'];
            echo $fila['name'];
            echo $fila['email'];
            echo $fila['created'];
        }

        $conn->close();
    } catch (Exception $e) {

        die("Error: " . $e->getMessage());
    } finally {

        $base = null;
    }


    ?>



</body>

</html>