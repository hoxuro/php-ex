<?php

$cantidad = $_POST["cantidad"];
$strNums = $_POST["nums"] . $_POST["num"];

if ($cantidad  < 15) {
    $cantidad++;

?>
    <form action="ej3.php" method="post">
        <label for="num">Introduce numero <?php echo $cantidad ?>:</label>
        <input type="text" name="num" />
        <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>" />
        <input type="hidden" name="nums" value="<?php echo $strNums ?>," />
        <input type="submit" />
    </form>

<?php

} else {

    function rotar(&$array)
    {
        $ultimo = $array[count($array) - 1];
        $anterior = $array[0];
        for ($elem = 1; $elem < count($array); $elem++) {
            if ($elem < count($array)) {
                $cont = $array[$elem];
                $array[$elem] = $anterior;
                $anterior = $cont;
            }
        }

        $array[0] = $ultimo;
    }


    $nums = explode(",", $strNums);

    echo "-------- ARRAY SIN RONTAR ---------<br/>";
    echo '<pre>', var_dump($nums), '</pre>';

    rotar($nums);

    echo "<br/>-------- ARRAY ROTADO ---------<br/>";
    echo '<pre>', var_dump($nums), '</pre>';
}
