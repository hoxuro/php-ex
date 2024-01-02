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

    // INICIO SESION PARA EMPEZAR A ALMACENAR VARIABLES
    session_start();

    // Primero selecciono las variables
    $numMesa = $_POST['numMesa'];
    $nombreCam = $_POST['nombre'];
    $appCam = $_POST['apellidos'];
    $primerPlato = $_POST['primerPlato'];
    $segundoPlato = $_POST['segundoPlato'];
    $bebida = $_POST['bebida'];

    $pan = isset($_POST['pan']) ? $_POST['pan'] : "";
    $mantequilla = isset($_POST['mantequilla']) ? $_POST['mantequilla'] : "";
    $puro = isset($_POST['puro']) ? $_POST['puro'] : "";

    // CREO EL STRING FINAL DE EXTRAS SELECCIONADOS
    $strExtras = "";
    $strExtras = ($pan != "") ? $strExtras . "Pan" : "";
    $strExtras = ($mantequilla != "") ? $strExtras . " Mantequilla" : "";
    $strExtras = ($puro != "") ? $strExtras . " Puro" : "";


    // ALMACENO LAS VARIABLES NECESARIAS PARA EL TICKET
    $_SESSION['numMesa'] = $numMesa;
    $_SESSION['nombreCam'] = $nombreCam;
    $_SESSION['appCam'] = $appCam;
    $_SESSION['primerPlato'] = $primerPlato;
    $_SESSION['segundoPlato'] = $segundoPlato;
    $_SESSION['bebida'] = $bebida;
    $_SESSION['strExtras'] = $strExtras;


    ?>

    <h2>Pedido realizado, su cesta de la compra es:</h1>
        <div class="cesta">
            <p>Primer Plato: <?php echo $primerPlato ?></p>
            <p>Segundo Plato: <?php echo $segundoPlato ?></p>
            <p>Bebida: <?php echo $bebida ?> </p>
            <p>Extras seleccionados:
                <?php
                if ($strExtras == "") {
                    echo "Ninguno";
                } else {
                    echo $strExtras;
                }
                ?>
            </p>

            <form action="./ticket.php" method="post">
                <input type="submit" name="finalizar" value="Finalizar compra">

            </form>
        </div>

        <?php

        ?>
</body>

</html>