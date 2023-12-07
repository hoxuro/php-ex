<?php

$cantidad = $_POST["cantidad"];
$num = ($_POST["num"] == "") ? 0 : $_POST["num"];
$strNums = $_POST["nums"] . $num;

echo $cantidad;
if ($cantidad  < 11) {
    $cantidad++;

?>
    <form action="ej8.php" method="post">
        <label for="num">Introduce el num entero <?php echo $cantidad ?></label>
        <input type="text" name="num" />
        <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>" />
        <input type="hidden" name="nums" value="<?php echo $strNums ?>" />
        <input type="submit" />
    </form>
<?php

} else {

    $arrNums = explode(",", $arrNums);


?>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid black;
        }

        .borde {
            border: 1px solid black;
        }

        div {
            display: inline-block;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            text-align: center;
        }
    </style>

    <table class="table">
        <tr>
            <td class="borde">Enero:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[0] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Febrero:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[1] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Marzo:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[2] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Abril:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[3] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Mayo:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[4] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Junio:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[5] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Julio:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[6] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Agosto:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[7] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Septiembre:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[8] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Octubre:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[9] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Noviembre:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[10] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde">Diciembre:</td>
            <td>
                <div style="background-color: red; width:<?php
                                                            $longitud = $arrTemps[11] * 10;
                                                            echo $longitud . "px";
                                                            ?>; height:20px;"></div>
            </td>
        </tr>
        <tr>
            <td class="borde"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td>
                <div>0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>35&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div>40&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            </td>
        </tr>
    </table>


<?php
}

?>