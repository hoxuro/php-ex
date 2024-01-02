<?php

function toTitleCase($cadena)
{
    // Divido la cadena en palabras
    $palabras = explode(' ', strtolower($cadena));

    // Pongo en mayuscula la primera letra de cada palabra
    $palabrasCapitalizadas = array_map('ucfirst', $palabras);

    // Uno las palabras
    $cadenaTitleCase = implode(' ', $palabrasCapitalizadas);

    return $cadenaTitleCase;
}
