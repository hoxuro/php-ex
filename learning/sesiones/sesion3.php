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

        echo 'Nombre: ' . $_SESSION['nombre'];
        echo '<br/>';
        echo 'Edad: ' . $_SESSION['edad'];
        echo '<br/>';
    } else {
        echo 'No se ha definido la sesión';
    }

    ?>

</body>

</html>