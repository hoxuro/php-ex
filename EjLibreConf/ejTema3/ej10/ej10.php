<?php 
    $dia = trim($_POST["dia"]);
    $mes = trim($_POST["mes"]);

    switch($mes){
        case "enero":
            if($dia<=20){
                echo "Su horóscopo es Capricornio";
            }else{
                echo "Su horóscopo es Acurario";
            }
            break;
            case "febrero":
                if($dia<=19){
                    echo "Su horóscopo es Acuario";
                }else{
                    echo "Su horóscopo es Piscis";
                }
            break;
        case "marzo":
            if($dia<=20){
                echo "Su horóscopo es Piscis";
            }else{
                echo "Su horóscopo es Aries";
            }
            break;
        case "abril":
            if($dia<=20){
                echo "Su horóscopo es Aries";
            }else{
                echo "Su horóscopo es Tauro";
            }
            break;
        case "mayo":
            if($dia<=21){
                echo "Su horóscopo es Tauro";
            }else{
                echo "Su horóscopo es Geminis";
            }
            break;
        case "junio":
            if($dia<=21){
                echo "Su horóscopo es Géminis";
            }else{
                echo "Su horóscopo es Cáncer";
            }
            break;
        case "julio":
            if($dia<=23){
                echo "Su horóscopo es Cáncer";
            }else{
                echo "Su horóscopo es Leo";
            }
            break;
        case "agosto":
            if($dia<=23){
                echo "Su horóscopo es Leo";
            }else{
                echo "Su horóscopo es Virgo";
            }
            break;
        case "septiembre":
            if($dia<=23){
                echo "Su horóscopo es Virgo";
            }else{
                echo "Su horóscopo es Libra";
            }
            break;
        case "octubre":
            if($dia<=23){
                echo "Su horóscopo es Libra";
            }else{
                echo "Su horóscopo es Escorpio";
            }
            break;
        case "noviembre":
            if($dia<=22){
                echo "Su horóscopo es Escorpio";
            }else{
                echo "Su horóscopo es Sagitario";
            }
            break;
        case "diciembre":
            if($dia<=21){
                echo "Su horóscopo es Sagitario";
            }else{
                echo "Su horóscopo es Capricornio";
            }
            break;
        default:
            echo "No ha introducido bien los datos";
            break;
    }
?>