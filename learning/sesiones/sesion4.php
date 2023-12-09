<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // Capturar las variables que se han propagado
    session_start();

    if (isset($_SESSION['iniciada']) == true) {

        session_unset();
        session_destroy();

        if (isset($_SESSION['nombre'])) {
            echo 'Nombre: ' . $_SESSION['nombre'];
            echo '<br/>';
        } else {
            echo "No hay una sesion nombre asignada";
        }
    } else {
        echo 'No se ha definido la sesión';
    }

    ?>

</body>

</html>