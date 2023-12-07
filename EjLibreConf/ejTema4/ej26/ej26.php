<?php

$num = $_POST["numero"];
$numArr = str_split($num);

$digito = $_POST["digito"];
$posicionesArr = [];

for ($i = 0; $i < count($numArr); $i++) {
    if ($numArr[$i] === $digito) {
        array_push($posicionesArr, ($i + 1));
    }
}

// uso la funcion implode para convertir el array a string
// separado por comas,
$posicionesStr = implode(", ", $posicionesArr);

if (count($posicionesArr) > 1) {
    echo "El digito introducido $digito, se encuentra en las posiciones: $posicionesStr del numero $num";
} else {
    echo "El digito introducido $digito, se encuentra en la posicion: $posicionesStr del numero $num";
}
