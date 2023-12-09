<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Sesiones
    session_id("33");
    echo session_id();

    echo session_name();
    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = 'Heri';

    var_dump($_SESSION);
    echo '<br/>';

    echo  'Nombre ' . $_SESSION['nombre'];
    echo '<br/>';
    unset($_SESSION['nombre']);

    if (isset($_SESSION['nombre']) == false) {
        echo 'Nombre no definido';
    }


    session_destroy(); // finaliza la sesion que yo he dejado abierta

    ?>
</body>

</html>