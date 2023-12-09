<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();

    $_SESSION['iniciada'] = true;
    $_SESSION['nombre'] = 'heri';
    $_SESSION['edad'] = 21;

    echo 'Identificador de la sesión:' . session_id();
    echo '<br/>';
    echo ' Nombre de la sesión:' . session_name();
    echo '<br/>';

    echo 'Nombre:' . $_SESSION['nombre'];
    echo '<br/>';
    echo 'Edad:' . $_SESSION['edad'];
    echo '<br/>';

    echo "<a href='../sesion3.php'> Comprobar las variables en otra pagina <a/>";
    echo '<br/>';
    echo "<a href='../sesion4.php'> Finaliza la sesion <a/>";
    echo '<br/>';


    ?>
</body>

</html>