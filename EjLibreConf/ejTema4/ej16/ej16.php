<?php

$num = abs($_POST["numero"]);

$divisiones = 0;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $divisiones++;
    }
}

if ($divisiones > 0) {
    echo "El numero $num no es primo";
}
if ($divisiones == 0) {
    echo "El numero $num es primo";
}

?>