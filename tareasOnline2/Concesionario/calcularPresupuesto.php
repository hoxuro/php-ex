<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Presupuesto</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>


    <?php
    // SI EL USUARIO A ELEGIDO NO FINANCIAR
    if (isset($_POST['noFinance'])) {

        session_start();


        $modelo = $_SESSION['modelo'];
        $llantas = $_SESSION['llantas'];
        $color = $_SESSION['color'];
        $puertas = $_SESSION['puertas'];
        $caballos = $_SESSION['caballos'];
        $motor = $_SESSION['motor'];
        $strClass = $_SESSION['strClass'];
        $presupuesto = $_SESSION['presupuesto'];

    ?>

        <!-- IMPRIMO POR PANTALLA LOS RESULTADOS DEL PRESUPUESTO -->

        <div class="logo-box">
            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg width="300px" height="300px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd" clip-rule="evenodd">
                    <path fill="#ffffff" d="M0 0h192.756v192.756H0V0z" />

                    <path d="M30.16 99.605V93.15c0-2.06 1.453-3.292 3.457-3.292h17.415c2.004 0 3.457 1.232 3.457 3.292v6.455c0 2.061-1.453 3.291-3.457 3.291H33.617c-2.004 0-3.457-1.23-3.457-3.291zM2.834 89.859h21.35c2.041 0 2.924 1.949 2.924 3.751v1.508c0 2.28-1.361 3.936-3.733 3.936H5.814v3.842h-2.98V89.859zM57.707 89.859h21.441c1.526 0 2.924 1.011 2.924 2.611v3.384c0 1.416-1.104 2.169-2.354 2.501 1.802.846 2.17 2.721 2.354 4.541h-2.924c-.129-1.967-.975-3.842-3.236-3.842H60.686v3.842h-2.979V89.859zM109.047 89.859v2.611H89.225c-.791 0-1.122.57-1.122 1.324 0 .717.368 1.269 1.122 1.269h16.164c2.648 0 4.082 1.269 4.082 3.972 0 2.262-1.213 3.861-3.566 3.861h-20.32v-2.611h19.805c.68 0 .975-.588.975-1.195 0-.697-.146-1.434-.975-1.434H88.6c-2.17 0-3.42-1.673-3.42-3.751 0-2.593 1.397-4.045 4.046-4.045h19.821v-.001zM135.748 89.859v2.611h-19.566c-.459 0-.625.441-.625.828v6.345c0 .387.24.643.625.643h19.566v2.611h-19.566c-2.133 0-3.584-1.471-3.584-3.623v-5.589c0-2.464 1.047-3.825 3.584-3.825h19.566v-.001zM138.947 89.859h2.998v5.075h17.305v-5.075h3.07v13.037h-3.07v-5.351h-17.305v5.351h-2.998V89.859zM165.465 89.859h24.457v2.611h-21.479v2.52h21.479v2.592h-21.479v2.703h21.479v2.611h-24.457V89.859z" />

                    <path d="M34.868 100.285h15.116c.919 0 1.673-.404 1.673-1.453v-4.909c0-1.048-.735-1.453-1.673-1.453H34.868c-.938 0-1.692.405-1.692 1.453v4.909c0 1.049.772 1.453 1.692 1.453zM5.814 92.47v3.972h16.991c.736 0 1.379-.294 1.379-1.122v-1.47c0-.864-.515-1.379-1.379-1.379H5.814v-.001zM60.686 92.47v3.972h17.727c.588 0 .735-.497.735-.993v-1.766c0-.846-.312-1.214-1.177-1.214H60.686v.001z" fill="#ffffff" />
                </g>
            </svg>
        </div>

        <div class="main-box">
            <div class="factura">
                <h2>Resumen de la configuracion:</h2>
                <p>Modelo: <?php echo $modelo  ?></p>
                <p>Color: <?php echo $color  ?></p>
                <p>Llantas: <?php echo $llantas  ?>"</p>
                <p>Puertas: <?php echo $puertas  ?></p>
                <p>Caballos: <?php echo $caballos  ?>cv</p>
                <p>Motor: <?php echo $motor  ?></p>

                <h3>¡Enhorabuena por su compra!</h2>
                    <p class="textImporte">Importe total (IVA incluido): <span><?php echo $presupuesto ?></span> €</p>
            </div>
            <div class="main-img-box2 <?php echo $strClass; ?>"></div>
        </div>

    <?php
        // despues de imprimir por pantalla el precio del coche cierro sesion
        session_reset();
        session_destroy();
    } else {
        // HAGO CALCULOS CON LA CONFIGURACION SELECCIONADA
        // inicio la sesion para poder transferir variables
        // entre paginas
        session_start();

        // selecciono las variables necesarias
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $llantas = $_POST['llantas'];
        $puertas = $_POST['puertas'];
        $caballos = $_POST['caballos'];
        $motor = $_POST['motor'];

        // ESTABLEZCO LAS VARIABLES DE SESION
        $_SESSION['modelo'] = $modelo;
        $_SESSION['color'] = $color;
        $_SESSION['llantas'] = $llantas;
        $_SESSION['puertas'] = $puertas;
        $_SESSION['caballos'] = $caballos;
        $_SESSION['motor'] = $motor;

        // modificar la imagen dinamicamente dependiendo
        // del modelo seleccionado
        $strClass = "";

        switch ($modelo) {
            case "911":
                $strClass = 'car-1';
                break;
            case "718":
                $strClass = 'car-2';
                break;
            case "cayenne":
                $strClass = 'car-3';
                break;
            case "panamera":
                $strClass = 'car-4';
                break;
        }


        $presupuesto = 0;
        switch ($modelo) {
            case "718":
                $presupuesto = $presupuesto + 75000;
                break;
            case "911":
                $presupuesto = $presupuesto + 140000;
                break;
            case "panamera":
                $presupuesto = $presupuesto + 120000;
                break;
            case "cayenne":
                $presupuesto = $presupuesto + 100000;
                break;
        }

        switch ($llantas) {
            case "serie":
                $presupuesto = $presupuesto + 0;
                break;
            case "18":
                $presupuesto = $presupuesto + 624;
                break;
            case "19":
                $presupuesto = $presupuesto + 2100;
                break;
            case "20":
                $presupuesto = $presupuesto + 2700;
                break;
        }

        switch ($color) {
            case "blanco":
                $presupuesto = $presupuesto + 500;
                break;
            case "negro":
                $presupuesto = $presupuesto + 624;
                break;
            case "rojo":
                $presupuesto = $presupuesto + 2100;
                break;
            case "amarillo":
                $presupuesto = $presupuesto + 2700;
                break;
            case "plata":
                $presupuesto = $presupuesto + 1018;
                break;
            case "azul":
                $presupuesto = $presupuesto + 1018;
                break;
        }

        switch ($puertas) {
            case "3":
                $presupuesto = $presupuesto + 0;
                break;
            case "5":
                $presupuesto = $presupuesto + 5000;
                break;
        }

        switch ($caballos) {
            case "300":
                $presupuesto = $presupuesto + 0;
                break;
            case "350":
                $presupuesto = $presupuesto + 5000;
                break;
            case "400":
                $presupuesto = $presupuesto + 10000;
                break;
        }

        switch ($motor) {
            case "diesel":
                $presupuesto = $presupuesto + 0;
                break;
            case "gasolina":
                $presupuesto = $presupuesto + 2000;
                break;
            case "electrico":
                $presupuesto = $presupuesto + 20000;
                break;
            case "hibrido":
                $presupuesto = $presupuesto + 15000;
                break;
        }

        $_SESSION['strClass'] = $strClass;
        $_SESSION['presupuesto'] = $presupuesto;

    ?>

        <!-- IMPRIMO POR PANTALLA LOS RESULTADOS DE LA PRIMERA CONFIGURACION -->

        <div class="logo-box">
            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg width="300px" height="300px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd" clip-rule="evenodd">
                    <path fill="#ffffff" d="M0 0h192.756v192.756H0V0z" />

                    <path d="M30.16 99.605V93.15c0-2.06 1.453-3.292 3.457-3.292h17.415c2.004 0 3.457 1.232 3.457 3.292v6.455c0 2.061-1.453 3.291-3.457 3.291H33.617c-2.004 0-3.457-1.23-3.457-3.291zM2.834 89.859h21.35c2.041 0 2.924 1.949 2.924 3.751v1.508c0 2.28-1.361 3.936-3.733 3.936H5.814v3.842h-2.98V89.859zM57.707 89.859h21.441c1.526 0 2.924 1.011 2.924 2.611v3.384c0 1.416-1.104 2.169-2.354 2.501 1.802.846 2.17 2.721 2.354 4.541h-2.924c-.129-1.967-.975-3.842-3.236-3.842H60.686v3.842h-2.979V89.859zM109.047 89.859v2.611H89.225c-.791 0-1.122.57-1.122 1.324 0 .717.368 1.269 1.122 1.269h16.164c2.648 0 4.082 1.269 4.082 3.972 0 2.262-1.213 3.861-3.566 3.861h-20.32v-2.611h19.805c.68 0 .975-.588.975-1.195 0-.697-.146-1.434-.975-1.434H88.6c-2.17 0-3.42-1.673-3.42-3.751 0-2.593 1.397-4.045 4.046-4.045h19.821v-.001zM135.748 89.859v2.611h-19.566c-.459 0-.625.441-.625.828v6.345c0 .387.24.643.625.643h19.566v2.611h-19.566c-2.133 0-3.584-1.471-3.584-3.623v-5.589c0-2.464 1.047-3.825 3.584-3.825h19.566v-.001zM138.947 89.859h2.998v5.075h17.305v-5.075h3.07v13.037h-3.07v-5.351h-17.305v5.351h-2.998V89.859zM165.465 89.859h24.457v2.611h-21.479v2.52h21.479v2.592h-21.479v2.703h21.479v2.611h-24.457V89.859z" />

                    <path d="M34.868 100.285h15.116c.919 0 1.673-.404 1.673-1.453v-4.909c0-1.048-.735-1.453-1.673-1.453H34.868c-.938 0-1.692.405-1.692 1.453v4.909c0 1.049.772 1.453 1.692 1.453zM5.814 92.47v3.972h16.991c.736 0 1.379-.294 1.379-1.122v-1.47c0-.864-.515-1.379-1.379-1.379H5.814v-.001zM60.686 92.47v3.972h17.727c.588 0 .735-.497.735-.993v-1.766c0-.846-.312-1.214-1.177-1.214H60.686v.001z" fill="#ffffff" />
                </g>
            </svg>
        </div>

        <div class="main-box">
            <div class="factura">
                <h2>Resumen de la configuracion:</h2>
                <p>Modelo: <?php echo $modelo  ?></p>
                <p>Color: <?php echo $color  ?></p>
                <p>Llantas: <?php echo $llantas  ?>"</p>
                <p>Puertas: <?php echo $puertas  ?></p>
                <p>Caballos: <?php echo $caballos  ?>cv</p>
                <p>Motor: <?php echo $motor  ?></p>

                <h3>¿Desea financiar la compra?</h2>
                    <form class="form2" action="./finanPresupuesto.php" method="post">
                        <input type="submit" name="siFinance" value="Si" />
                    </form>
                    <form class="form2" action="./calcularPresupuesto.php" method="post">
                        <input type="submit" name="noFinance" value="No" />
                    </form>
            </div>
            <div class="main-img-box2 <?php echo $strClass; ?>"></div>
        </div>


    <?php

    }

    ?>
</body>

</html>