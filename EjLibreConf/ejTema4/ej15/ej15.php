<?php

$base = (double) $_POST["base"];
$exponente = abs($_POST["exponente"]);

echo "Base: $base, exponente: $exponente<br><br>";

for ($ini = 1; $ini < $exponente + 1; $ini++) {
    $cont = $ini;
    $exponenciacion = $base;
    while ($cont > 1) {
        $exponenciacion *= $base;
        $cont--;
    }
    echo "Iteracion $ini = $exponenciacion<br>";
}

?>