<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo '<pre>', var_dump($_FILES), '</pre>';

    $directorio = ini_get("upload_tmp_dir");
    echo $directorio;

    $directorioTemp = $_FILES['texto']['tmp_name'];
    move_uploaded_file($directorioTemp, $_FILES['texto']['name']);

    ?>


</body>

</html>