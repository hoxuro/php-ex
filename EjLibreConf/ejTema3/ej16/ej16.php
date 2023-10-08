<?php
    $num = $_POST["num"];
    $numToArray= str_split($num);
    $ultimaCifra = end($numToArray);

    echo "La última cifra del número introducido es $ultimaCifra";
?>