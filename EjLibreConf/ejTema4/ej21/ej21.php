<?php

$cadena = $_POST["numero"];
$arrCadena = preg_split("/\s+/", $cadena);


$cantidad = count($arrCadena) - 1;

$mayorPar = $arrCadena[0];
$mediaImpares = 0;
for ($i = 0; $i < $cantidad; $i++) {
    if ($arrCadena[$i] >= 0) {
        if ($arrCadena[$i] % 2 !== 0) {
            $mediaImpares += $arrCadena[$i] / $cantidad;
        }

        if ($arrCadena[$i] % 2 === 0 && $arrCadena[$i] > $mayorPar) {
            $mayorPar = $arrCadena[$i];
        }
    }


}

echo "Numeros introducidos: $cantidad<br/>";
echo "Media de los numeros impares: $mediaImpares<br/>";
echo "Mayor numero par introducido: $mayorPar<br/>";


?>