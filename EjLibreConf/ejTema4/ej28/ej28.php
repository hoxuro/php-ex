<?php

$num = (int) $_POST["numero"];

$factorial = 1;
for ($i = 2; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "el factorial de $num es $factorial";
