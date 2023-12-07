<?php

$lista = [-1, 2, 0, 4, 5, -6, 7, 8, -9, 10];

$pos = 0;
$neg = 0;

for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] > 0) {
        ++$pos;
    }
    if ($lista[$i] < 0) {
        ++$neg;
    }
}

echo "Positivos: $pos<br>Negativos: $neg";


?>