<?php 
    $radio = $_POST["radio"];
    $altura = $_POST["altura"];
    $pi= pi();
    $area = round($pi*($radio*$radio)*$altura / 3, 2);

    echo "El area de un cono de radio: $radio, y de altura: $altura es $area u2";
?>