<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    $conexion = mysqli_connect('localhost', 'root', '', 'pruebas');

    echo '<pre>', var_dump($conexion), '</pre>';


    $insert =  "INSERT INTO users( name, email) values( 'pedro', 'pedro@dominio.es')";

    $return = mysqli_query($conexion, $insert);

    print_r(($return));

    mysqli_close($conexion);

    ?>

</body>

</html>