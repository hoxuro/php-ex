<?php
    $num = trim($_POST["num"]);
    $longitud= str_contains($num, "-") ?  strlen($num)-1 : strlen($num);

    echo "El número $num tiene $longitud cifras";
?>