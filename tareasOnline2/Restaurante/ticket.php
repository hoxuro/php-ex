<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <?php

    //CONTINUO LA SESION PARA ACCEDER A VARIABLES
    session_start();

    $numMesa  = $_SESSION['numMesa'];
    $nombreCam = $_SESSION['nombreCam'];
    $appCam = $_SESSION['appCam'];
    $primerPlato = $_SESSION['primerPlato'];
    $segundoPlato = $_SESSION['segundoPlato'];
    $bebida = $_SESSION['bebida'];
    $strExtras = $_SESSION['strExtras'];

    ?>

    <h2>¡Gracias por su compra!</h2>
    <div class="cesta">
        <p style="font-weight: 500;">Ticket de su pedido</p>

        <p>Número de mesa: <?php echo $numMesa  ?></p>
        <p>Camarero que le atenderá: <?php echo $nombreCam . " " . $appCam;  ?></p>
        <p>Primer Plato: <?php echo $primerPlato  ?></p>
        <p>Segundo Plato: <?php echo $segundoPlato  ?></p>
        <p>Bebida: <?php echo $bebida  ?></p>
        <p>Extras seleccionados:
            <?php
            if ($strExtras == "") {
                echo "Ninguno";
            } else {
                echo $strExtras;
            }  ?>
        </p>

        <p style="font-size: 22px;">Total a pagar: <span style="font-weight: 500;">23,50€</span></p>

    </div>




</body>

</html>