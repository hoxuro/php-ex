<?php

for ($num = 2; $num <= 100; $num++) {
    $divisiones = 0;
    // si encuentra un numero que lo divida quiero que salga del bucle para 
    // que sea mas eficiente
    for ($i = 2; $i <= 100 && $divisiones === 0; $i++) {
        if ($num % $i === 0 && $i !== $num) {
            $divisiones++;
        }
    }

    if ($divisiones === 0) {
        echo "$num<br/>";
    }
}


?>