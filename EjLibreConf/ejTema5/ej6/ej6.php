<?php

function mostrarResaltar($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $valor = $array[$i];

        if ($valor % 2 == 0) {
?>
            <p style="font-weigth: bold; color: red; margin:0; padding: 0; box-sizing: border-box; display:inline-block"><?php echo $valor ?></p><br /><br />

        <?php
        } else {
        ?>
            <p style="font-weigth: bold; color: blue; margin:0; padding: 0; box-sizing: border-box; display:inline-block"><?php echo $valor ?></p><br /><br />
    <?php
        }
    }
}

$cantidad = $_POST["cantidad"];
$num = ($_POST["num"] == "") ? 0 : $_POST["num"];
$strNums = $_POST["nums"] . $num;

if ($cantidad  < 8) {
    $cantidad++;

    ?>
    <form action="ej6.php" method="post">
        <label for="num">Introduce un numero entero <?php echo $cantidad ?>: </label>
        <input type="text" name="num" />
        <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>" />
        <input type="hidden" name="nums" value="<?php echo $strNums ?>," />
        <input type="submit" />
    </form>
<?php

} else {

    $arrNums = explode(",", $strNums);

    mostrarResaltar($arrNums);
}

?>