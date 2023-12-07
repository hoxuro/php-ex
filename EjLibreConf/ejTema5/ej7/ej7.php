<?php

function mostrarResaltar($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $valor = $array[$i];

        if ($valor % 2 == 0) {
?>
            <p style="font-weigth: bold; color: red; margin:0; padding: 0; box-sizing: border-box; display:inline-block"><?php echo $valor ?></p>

        <?php
        } else {
        ?>
            <p style="font-weigth: bold; color: blue; margin:0; padding: 0; box-sizing: border-box; display:inline-block"><?php echo $valor ?></p>
<?php
        }
    }
}

function rellenarArrayRandom(&$array)
{
    for ($i = 0; $i < 20; $i++) {
        array_push($array, random_int(0, 100));
    }
}

$arrayRandom = [];
rellenarArrayRandom($arrayRandom);

$arrayPares = [];
$arrayImpares = [];

for ($elem = 0; $elem < count($arrayRandom); $elem++) {
    if ($arrayRandom[$elem] % 2 === 0 || $arrayRandom[$elem] === 0) {
        array_push($arrayPares, $arrayRandom[$elem]);
    } else {
        array_push($arrayImpares, $arrayRandom[$elem]);
    }
}

$arrayOrdenado = array_merge($arrayPares, $arrayImpares);

mostrarResaltar($arrayOrdenado);
