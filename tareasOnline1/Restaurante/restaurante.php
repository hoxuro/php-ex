<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");

        body {
            font-family: "Roboto", sans-serif;
            max-width: 40rem;
            margin: 0 auto;

            background-image: linear-gradient(to right top,
                    #b9d6f2,
                    #95bbe0,
                    #70a0ce,
                    #4886bc,
                    #006daa);
            background-repeat: no-repeat;
            height: 100vh;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            filter: drop-shadow(2px 2px 5px #000);
        }

        div {
            margin-top: 20px;
            font-size: 20px;


            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
        }

        div p:last-child {
            text-align: center;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php

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


    ?>

    <h2>Pedido realizado, su resumen es:</h1>
        <div class="factura">
            <p>Número de mesa: <?php echo $numMesa ?></p>
            <p>Nombre y apellidos del camarero: <?php echo $nombreCam . " " . $appCam ?> </p>
            <p>Primer Plato: <?php echo $primerPlato ?></p>
            <p>Segundo Plato: <?php echo $segundoPlato ?></p>
            <p>Bebida: <?php echo $bebida ?> </p>
            <p>Extras seleccionados:
                <?php
                $strExtras = "";
                $strExtras = ($pan != "") ? $strExtras . "Pan" : "";
                $strExtras = ($mantequilla != "") ? $strExtras . " Mantequilla" : "";
                $strExtras = ($puro != "") ? $strExtras . " Puro" : "";

                if ($strExtras == "") {
                    echo "Ninguno";
                } else {
                    echo $strExtras;
                }

                ?>
            </p>

            <p>¡Que aproveche!</p>
        </div>

        <?php

        ?>
</body>

</html>