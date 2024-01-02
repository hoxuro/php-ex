<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Biblioteca</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="container mainContainer">
    <h1>Biblioteca Zaidín-Vergeles</h1>
    <?php

    $page = isset($_GET['page']) ? $_GET['page'] : "";

    switch ($page) {
      case 'error':
        echo '<p style="color: red; text-align: center; font-size: 18px;">Error, usuario y/o contraseña incorrectos</p>';
        break;
      default:
        echo '<h2 style="text-align: center">Por favor, inicie sesión</h2>';
    }

    ?>
    <form class="loginForm" action="./admin/actions/login.act.php" method="post">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="nombreApellidos" name="nombreApellidos" class="form-control" required />
        <label class="form-label" for="nombreApellidos">Usuario (p.e: Jose Alonso):</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="password" name="password" class="form-control" />
        <label class="form-label" for="form2Example2">Contraseña (1111):</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4 btn-sign">
        Sign in
      </button>
    </form>
  </div>

  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>