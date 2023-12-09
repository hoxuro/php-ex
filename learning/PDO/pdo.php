<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO 1</title>
</head>

<body>



    <?php

    try {

        // abro la conexion
        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        // linea para acceder a bases de datos de forma mas consistente y segura
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // establezco que voy a trabajar con caracteres utf8
        $base->exec("SET CHARACTER SET utf8");

        // creo una sentencia sql para obtener datos de la base de datos
        $query = "SELECT id, name, email, created FROM users WHERE id = ?";

        // almaceno el objeto PDO statement
        $resultado = $base->prepare($query);

        $resultado->execute(array("2"));

        while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

            echo "id: " . $registro['id'] . "<br/>";
            echo "name: " . $registro['name'] . "<br/>";
            echo "email: " . $registro['email'] . "<br/>";
            echo "created: " . $registro['created'] . "<br/>";
        }

        $resultado->closeCursor();
    } catch (Exception $e) {

        die('Error: ' . $e->getMessage());
    } finally {
        $base = null;
    }

    ?>

</body>

</html>