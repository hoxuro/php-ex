<?php

$base = $_POST["base"];
$exponente = $_POST["exponente"];

$potencia = pow(abs($base), abs($exponente));

echo $potencia;

?>