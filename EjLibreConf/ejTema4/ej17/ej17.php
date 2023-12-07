<?php

$num = gmp_init($_POST["numero"]);

if ($num <= 0) {
    echo "ERROR. Debe introducir un numero ENTERO y POSITIVO!<br/><br/>";

    ?>

    <form action="ej17.php" method="post">
        <label for="numero">Introduce un numero entero y positivo:</label>
        <input type="text" name="numero" />
        <input type="submit" name="enviar" />
    </form>


    <?php
} else {

    //al final del ejercicio me he dado cuenta que a lo mejor no
    //se pedia exactamente esto pero lo he dejado porque he apren
    //dido sobre como habilitar extensiones y sumar numeros muy
    //grandes en php
    $i = 0;
    do {
        $num = gmp_add($num, gmp_add($num, gmp_init(1)));
        $i++;
    } while ($i < 100);

    $gmp_num = gmp_strval($num);
    echo "El resultado de sumar los 100 numeros siguientes es $gmp_num";

}

?>