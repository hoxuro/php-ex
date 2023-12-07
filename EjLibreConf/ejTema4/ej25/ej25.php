<?php

$num = $_POST["numero"];

$numArr = str_split($num);

$revesArr = array();

for ($i = count($numArr) - 1; $i >= 0; $i--) {
    array_push($revesArr, $numArr[$i]);
}

$reves = join($revesArr);

echo $reves;


?>