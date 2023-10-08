<?php 
    $hora = trim($_POST["hora"]);

    if($hora>=6 && $hora<=12){
        echo "Buenos dias";
    }
    if($hora>=13 && $hora<=20){
        echo "Buenas tardes";
    }
    if($hora>=21 || $hora<=5){
        echo "Buenas noches";
    }
?>