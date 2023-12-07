<?php

$nums = [];

$i = 1;
while (isset($_POST["num$i"])) {
    array_push($nums, $_POST["num$i"]);
    $i++;
}

$max = $nums[0];
$min = $nums[0];
$container = 0;
for ($i = 0; $i < count($nums); $i++) {

    if ($nums[$i] > $max) {
        $max = $nums[$i];
    }
    if ($nums[$i] < $min) {
        $min = $nums[$i];
    }
}

echo "Mayor de los numeros introducidos: $max<br/>";
echo "Menor de los numeros introducidos: $min";
