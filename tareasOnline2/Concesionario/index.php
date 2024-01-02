<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Concesionario</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>

  <?php

  // si el usuario se ha logueado
  if (isset($_POST['iniciar'])) {

    // si ha iniciado sesion correctamente
    if (trim(strtolower($_POST['loginNombre'])) == 'juan' && trim(strtolower($_POST['loginPass'])) == 'juan123') {

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
        <form class="main-form" action="./calcularPresupuesto.php" method="post" id="formulario">
          <h2>Configure su vehículo</h2>
          <!-- MODELO -->
          <div class="group">
            <label for="modelo">Modelo:</label>
            <select name="modelo" id="modelo" required>
              <option value=""></option>
              <option value="718">718</option>
              <option value="911">911</option>
              <option value="panamera">Panamera</option>
              <option value="cayenne">Cayenne</option>
            </select>
          </div>
          <!-- COLOR -->
          <div class="group">
            <label for="color">Color:</label>
            <select name="color" id="color" required>
              <option value=""></option>
              <option value="blanco">Blanco</option>
              <option value="negro">Negro</option>
              <option value="rojo">Rojo Guardia</option>
              <option value="amarillo">Amarillo Racing</option>
              <option value="plata">Plata GT Metalizado</option>
              <option value="azul">Azul Gentian Metalizado</option>
            </select>
          </div>
          <!-- LLANTAS -->
          <div class="group">
            <label for="llantas">Llantas:</label>
            <select name="llantas" id="llantas" required>
              <option value=""></option>
              <option value="serie">De serie</option>
              <option value="18">18"</option>
              <option value="19">19"</option>
              <option value="20">20"</option>
            </select>
          </div>
          <!-- PUERTAS -->
          <div class="group">
            <label for="puertas">Puertas:</label>
            <select name="puertas" id="puertas" required>
              <option value=""></option>
              <option value="3">3</option>
              <option value="3">5</option>
            </select>
          </div>
          <!-- CABALLOS -->
          <div class="group">
            <label for="caballos">Caballos de Vapor:</label>
            <select name="caballos" id="caballos" required>
              <option value=""></option>
              <option value="300">300cv</option>
              <option value="350">350cv</option>
              <option value="400">400cv</option>
            </select>
          </div>
          <!-- MOTOR -->
          <div class="group">
            <label for="motor">Tipo de Motor:</label>
            <select name="motor" id="motor" required>
              <option value=""></option>
              <option value="diesel">Diesel</option>
              <option value="gasolina">Gasolina</option>
              <option value="electrico">Electrico</option>
              <option value="hibrido">Hibrido</option>
            </select>
          </div>

          <input type="submit" value="Continuar" />
        </form>
        <div class="main-img-box"></div>
      </div>


    <?php

    }
    // si no ha iniciado bien la sesion
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
        <form class="formLogin" action="./index.php" method="post">
          <h2>Bienvenido de vuelta, inicie sesion</h2>
          <p style="color: red;">Usuario o contraseña incorrectos</p>
          <div class="group">
            <label for="loginNombre">Nombre de usuario (juan): </label>
            <input type="text" name="loginNombre" />
          </div>
          <div class="group">
            <label for="loginPass">Contraseña (juan123): </label>
            <input type="text" name="loginPass" />
          </div>

          <input type="submit" name="iniciar" value="Iniciar Sesión" />
        </form>
      </div>

    <?php

    }
  }
  // si aun no ha iniciado sesion
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
      <form class="formLogin" action="./index.php" method="post">
        <h2>Bienvenido de vuelta, inicie sesion</h2>
        <div class="group">
          <label for="loginNombre">Nombre de usuario (juan): </label>
          <input type="text" name="loginNombre" />
        </div>
        <div class="group">
          <label for="loginPass">Contraseña (juan123): </label>
          <input type="text" name="loginPass" />
        </div>

        <input type="submit" name="iniciar" value="Iniciar Sesión" />
      </form>
    </div>

  <?php

  }
  ?>
</body>

</html>