<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo number_format("1000000");
    echo "<br/>";

    echo number_format("1000000", 2);
    echo "<br/>";

    echo number_format("1000000", 2, ",", ".");
    echo "<br/>";

    ?>
</body>

</html>