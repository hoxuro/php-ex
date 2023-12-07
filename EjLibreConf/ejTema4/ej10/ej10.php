<?php

$cadena = $_POST["numero"];
$arrCadena = preg_split("/\s+/", $cadena);


$cont = $arrCadena[0];
$sum = $arrCadena[0];

echo "Sumando...<br>$cont ";

$i = 1;
while ($cont > 0 && $i < count($arrCadena)) {
    $cont = $arrCadena[$i];
    $sum += $arrCadena[$i];
    $i++;

    if ($cont < 0) {
        echo " $cont ";
    }
    if ($cont > 0) {
        echo "+ $cont ";
    }
}
echo "= ";

echo "$sum";
?>