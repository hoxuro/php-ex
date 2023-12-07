<?php

$num = (int) $_POST["numero"];

$contador = 0;
$sumatoria = 0;

$i = 1;
do {
    if ($i % 3 === 0) {
        $contador++;
        $sumatoria += $i;
        echo $i . "<br/>";
    }
    $i++;
} while ($i != $num);

echo "Entre el 1 y $num hay $contador numeros divisibles entre 3 y la sumatoria de esos numeros es $sumatoria";
