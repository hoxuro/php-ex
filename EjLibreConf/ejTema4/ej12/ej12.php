<?php

$final = $_POST["numero"];

$primer = 0;
$segundo = 0;
$sumatoria = 0;

for ($i = 0; $i < $final; $i++) {
    if ($i === 0) {
        $primer = 0;
        echo $primer . "<br>";
    } elseif ($i === 1) {
        $segundo = 1;
        echo $segundo . "<br>";
    } else {
        $sumatoria = $primer + $segundo;
        echo $sumatoria . "<br>";

        $primer = $segundo;
        $segundo = $sumatoria;
    }
}
