<?php

$numabs = abs($_POST["numero"]);

$digitos = 0;
while ($numabs > 1) {
    $digitos++;
    $numabs = $numabs / 10;
}

echo $digitos;
?>