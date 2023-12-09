<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //abrir un archivo
    $miarchivo = fopen("miarchivo.txt", "r+");

    if ($miarchivo === "false") {
        echo "Error al abrir el archivo";
    } //else {
    //     $contenido = fread($miarchivo, filesize("miarchivo.txt"));
    //     echo $contenido;
    // }

    // while (!feof($miarchivo)) {
    //     echo fgetc($miarchivo);
    // }

    // echo fgets($miarchivo);

    // $todo = file_get_contents("miarchivo.txt");
    // echo $todo;

    $todoArray = file("miarchivo.txt");
    echo '<pre>', var_dump($todoArray), '</pre>';


    // mucho cuidado al abrir ficheros en modo w que nos puede borrar todo el contenido
    // $miarchivo3 = fopen("miarchivo3.txt", "w");

    // $miarchivo2 = fopen("miarchivo2.txt", "w");

    ?>
</body>

</html>