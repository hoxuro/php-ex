<?php 
    $dia = trim(strtolower($_POST["dia"]));

    switch($dia){
        case "lunes":
            echo "Toca diseño web";
            break;
        case "martes":
            echo "Toca despliegue web";
            break;
        case "miercoles":
            echo "Toca desarrollo cliente";
            break;
        case "jueves":
            echo "toca libre conf";
            break;
        case "viernes":
            echo "toca empresa";
            break;
        default:
            echo "No ha introducido un dia valido";
            break;
    }
?>