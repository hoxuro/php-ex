<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $miarchivo = fopen("miarchivo2.txt", "a+");

    // fwrite($miarchivo, "ESTO LO HE ESCRITO CON FWRITE JEJE");
    // fflush($miarchivo);
    echo filesize("miarchivo2.txt");
    $arrayInfo = stat("miarchivo2.txt");
    echo '<pre>', var_dump($arrayInfo), '</pre>';

    ?>
</body>

</html>