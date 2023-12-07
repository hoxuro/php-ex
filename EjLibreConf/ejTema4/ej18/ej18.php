<?php

$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];


if ($num1 < $num2) {
    $cont = $num1;
    $num1 = $num2;
    $num2 = $cont;
}

if ($num1 == $num2) {
    echo "Los numeros son iguales, vuelva a introducir<br/><br/>";

    ?>

    <form action="ej18.php" method="post">
        <label for="numero">Introduce un numero entero:</label>
        <input type="text" name="numero1" /><br /><br />
        <label for="numero">Introduce otro numero entero:</label>
        <input type="text" name="numero2" /><br />
        <input type="submit" name="enviar" value="Enviar" />
    </form>

    <?php
}

if ($num1 > $num2) {

    do {
        echo $num2 . "<br/>";
        $num2 += 7;

    } while ($num2 < $num1);
    echo $num1;

}

?>