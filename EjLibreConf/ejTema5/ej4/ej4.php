<?php
function mostrar($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $valor = $array[$i];

        if ($i % 9 === 0 && $i !== 0) {

            echo "$valor<br/><br/>";
        } else {
            echo "$valor ";
        }
    }
}

function mostrarResaltar($array, $num)
{
    for ($i = 0; $i < count($array); $i++) {
        $valor = $array[$i];

        if ($i % 9 === 0 && $i !== 0) {

            if ($valor == $num) {
?>
                <p style="font-weigth: bold; color: red; margin:0; padding: 0; box-sizing: border-box; display:inline-block"><?php echo $valor ?></p><br /><br />

            <?php
            } else {
                echo "$valor<br/><br/>";
            }
        } else {
            if ($valor == $num) {
            ?>
                <p style="font-weight: bold; color: red; margin:0; padding: 0; box-sizing: border-box; display:inline-block"><?php echo $valor ?></p>

    <?php
            } else {
                echo "$valor ";
            }
        }
    }
}

if (isset($_POST["siguiente"])) {
    function intercambiar(&$array, $valor1, $valor2)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $valor1) {
                $array[$i] = $valor2;
            }
        }
    }

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $arrayAleatorio = explode(",", $_POST["array"]);

    intercambiar($arrayAleatorio, $num1, $num2);

    mostrarResaltar($arrayAleatorio, $num2);
} else {


    function rellenarArrayRandom(&$array)
    {
        for ($i = 0; $i < 100; $i++) {
            array_push($array, random_int(0, 20));
        }
    }

    $arrayAleatorio = array();

    rellenarArrayRandom($arrayAleatorio);

    $strArray = implode(",", $arrayAleatorio);

    echo "**************** ARRAY RANDOM *********************<br/><br/>";
    mostrar($arrayAleatorio);

    // echo '<pre>', var_dump($arrayAleatorio), '</pre>';
    // echo "<br/>";

    ?>

    <form action="ej4.php" method="post">
        <label for="num1">Introduce un numero 1, que se encuentre en el array random que quieras sustituir por otro numero </label>
        <input type="text" name="num1" /><br><br>
        <label for="num2">Introduce un numero 2, que es el nuevo valor que tendra num 1 en el array</label>
        <input type="text" name="num2" />
        <input type="hidden" name="array" value="<?php echo $strArray ?>"><br><br>
        <input type="submit" name="siguiente" Value="Siguiente">
    </form>

<?php

}


?>