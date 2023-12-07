<?php

$num = (int) $_POST["numero"];
$divisible = (int) $_POST["divisible"];

echo "Los numeros enteros positivos menores a $num y <br/>
no divibles entre $divisible son: <br/>";

for ($i = $num - 1; $i > 0; $i--) {
    if ($i % $divisible !== 0) {
        echo $i . "<br/>";
    }
}
