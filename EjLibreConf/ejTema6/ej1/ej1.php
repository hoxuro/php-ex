<?php

function esCapicua($num)
{
    $numReverse = (int) join("", array_reverse(str_split($num)));

    return ($num === $numReverse);
}

function esPrimo($num)
{
    $divisiones = 0;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $divisiones++;
        }
    }

    return ($divisiones === 0);
}

function siguientePrimo($num)
{
    $encontrado = false;
    $siguientePrimo = 0;

    for ($sig = $num + 1; !$encontrado; $sig++) {
        $divisiones = 0;

        for ($i = 2; $i < $sig; $i++) {
            if ($sig % $i === 0) {
                $divisiones++;
            }
        }

        $siguientePrimo = $sig;
        $encontrado = ($divisiones === 0);
    }

    return $siguientePrimo;
}

function potencia($base, $exp)
{
    $potencia = 1;
    do {
        $potencia *= $base;
        $exp--;
    } while ($exp != 0);

    return $potencia;
}

function digitos($num)
{
    $digitos = 0;

    while ($num > 1) {
        $digitos++;
        $num /= 10;
    }

    return $digitos;
}

