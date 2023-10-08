<?php 
    $dia = trim(strtolower($_POST["dia"]));

    switch($dia){
        case 1:
            echo "Es lunes";
            break;
        case 2:
            echo "Es martes";
            break;
        case 3:
            echo "Es miercoles";
            break;
        case 4:
            echo "Es jueves";
            break;
        case 5:
            echo "Es viernes";
            break;
        case 6:
            echo "Es sabado";
            break;
        case 7:
            echo "Es domingo";
            break;
        default:
            echo "No ha introducido un dia valido";
            break;
    }
?>