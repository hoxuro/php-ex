<?php


function rellenarArrayRandom(&$array)
{
    for ($i = 0; $i < 100; $i++) {
        array_push($array, random_int(0, 100));
    }
}

function rellenarExp($array, &$arrayRellenar, $exponente)
{
    for ($i = 0; $i < 100; $i++) {
        array_push($arrayRellenar, pow($array[$i], $exponente));
    }
}

$numero = array();
$cuadrado = array();
$cubo = array();

rellenarArrayRandom($numero);

rellenarExp($numero, $cuadrado, 2);

rellenarExp($numero, $cubo, 3);


echo '<pre>', var_dump($numero), '</pre>';
echo "<br/>";
echo '<pre>', var_dump($cuadrado), '</pre>';
echo "<br/>";
echo '<pre>', var_dump($cubo), '</pre>';
echo "<br/>";
