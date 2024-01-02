<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiacion</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <?php

    // inicio sesion para traspasar las variables
    session_start();
    // si ya se ha enviado la solicitud de financiacion
    if (isset($_POST['enviada'])) {

        $nombreCliente = $_POST['nombre'];
        $apellidosCliente = $_POST['apellidos'];
        $edadCliente = $_POST['edad'];
        $direccionCliente = $_POST['direccion'];
        $precioCoche = intval($_POST['precio']);
        $entrada = $_POST['entrada'];
        $meses = isset($_POST["12"]) ? 12 : 36;


    ?>

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
            <div class="finan-box">
                <h2>Financiamos su coche nuevo</h2>
                <p>Gracias por su solicitud Sr/a: <?php echo $nombreCliente . " " . $apellidosCliente  ?><br>
                    <br>
                    Los datos introducidos son:
                </p>

                <p>
                    Su edad: <?php echo $edadCliente  ?> años <br>
                    Precio del vehículo: <?php echo $precioCoche  ?> €<br>
                    Entrada dispuesto a pagar: <?php echo $entrada  ?> € <br>
                    Mensualidades: <?php echo $meses  ?> meses
                </p>
                <p>Después de analizar su caso nuestra respuesta es:</p>

                <?php

                if ($edadCliente < 25) {
                    echo "<p>Lo sentimos, pero no cumple con el requisito de edad mínima para concederle el préstamo...<p/>";
                } else {
                    $factorMultiplicacion = $meses == 12 ? 1.08 : 1.16;
                    $cuota = round($factorMultiplicacion * ($precioCoche - $entrada) / $meses, 2);

                    echo "<p><span>¡Enhorabuena!</span> su préstamo ha sido concedido. La cuota mensual será de $cuota € al mes en $meses cuotas. <br/> <br/>
                Próximamente le enviaremos una carta a su dirección $direccionCliente.</p>";
                }

                // despues de imprimir por pantalla la validacion o denegacion de la financiacion cierro sesion
                session_reset();
                session_destroy();

                ?>


            </div>
            <div class="main-img-box2 img-finan"></div>
        </div>


    <?php


    }
    // si la solucitud de financiacion aun no ha sido enviada
    else {
    ?>

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
            <form class="main-form" action="./finanPresupuesto.php" method="post" id="formulario">
                <h2>Financie su vehículo con facilidad</h2>
                <!-- NOMBRE -->
                <div class="group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" required />
                </div>
                <!-- APELLIDOS -->
                <div class="group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" required />
                </div>
                <!-- EDAD -->
                <div class="group">
                    <label for="edad">Edad:</label>
                    <input type="number" name="edad" required />
                </div>
                <!-- DIRECCION -->
                <div class="group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" name="direccion" required />
                </div>
                <!-- PRECIO DEL COCHE -->
                <div class="group">
                    <label for="precio">Precio del coche (€):</label>
                    <input type="text" name="precio" value="<?php echo $_SESSION['presupuesto'];  ?> €" readonly />
                </div>
                <!-- ENTRADA -->
                <div class="group">
                    <label for="entrada">Entrada dispuesto a pagar:</label>
                    <select name="entrada" id="entrada" required>
                        <option value=""></option>
                        <option value="5000">5000 euros</option>
                        <option value="10000">10000 euros</option>
                        <option value="15000">15000 euros</option>
                        <option value="20000">20000 euros</option>
                    </select>
                </div>
                <!-- MENSUALIDADES -->
                <div class="group">
                    <p style="font-weight: 500;">¿En cuantas mensualidades desea devolver el prestamo?</p>
                    <input class="mes" name="12" value="12" type="checkbox">
                    <label for="12">12 meses al 8.0%</label>
                    <br />
                    <br />
                    <input class="mes" name="36" value="36" type="checkbox">
                    <label for="36">36 meses al 16.0%</label>
                </div>

                <input type="submit" name="enviada" value="Enviar solicitud de financiacion" />
            </form>
            <div class="main-img-box2 finan-img"></div>
        </div>

    <?php

    }

    ?>

    <!-- Creo un script para que solo se pueda seleccionar 1 opcion de los 2 checkbox existentes -->
    <script>
        var checkboxes = document.querySelectorAll('.mes');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                checkboxes.forEach(function(innerCheckbox) {
                    if (innerCheckbox !== checkbox) {
                        innerCheckbox.checked = false;
                    }
                });
            });
        });
    </script>
</body>

</html>