<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = $_POST["num"];

    if ($num != 4) {
        echo "mal, vuelve a enviar numero zoquete</br>";
        ?>
        <form action="adivina.php" method="post">
            <label for="num">Envia num:</label>
            <input type="text" name="num" />
            <input type="submit" value="Continuar" />
        </form>
        <?php
    } else {
        echo "ahora si lo has adibinao"; //escrito mal a posta
    }
    ?>
</body>

</html>
