<?php


$num = $_POST["numero"];
$total = (int) $_POST["total"];

$sumatoria = $num + $total;

if ($sumatoria >= 1000) {
    echo "La suma de los numeros introducidos ha igualado o superado los 1000";
} else {
    ?>

    <form action="ej23.php" method="post">
        <label for="numero">Introduce un numero entero:<br /><br /></label>
        <input type="number" name="numero" />
        <input type="hidden" name="total" value="<?php echo $sumatoria ?>" />
        <input type="submit" name="enviar" value="Sumar" />
    </form>

    <?php

}


?>