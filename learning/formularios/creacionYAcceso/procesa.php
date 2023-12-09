<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST['name'])) {
        if (!empty($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
            echo 'Nombre del usuario' . $usuario;
        }
    }

    if (isset($_POST['pass'])) {
        if (!empty($_POST['pass'])) {
            $pass = $_POST['pass'];
            echo 'Nombre del usuario' . $pass;
        }
    }

    ?>
</body>

</html>