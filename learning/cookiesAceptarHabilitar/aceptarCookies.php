<?php

if (isset($_GET["aceptar"])) {
    $caducidad = time() + (60 * 60 * 24 * 365);
    setcookie("micookie", 1, $caducidad);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_GET["aceptar"]) && !isset($_COOKIE["micookie"])) :
    ?>

        <div>
            <h2>cookies</h2>
            <p>ACEPTA LAS COOKIES</p>
            <a href="?aceptar=1">Acepto</a>
        </div>

    <?php
    endif
    ?>
</body>

</html>