<?php 
    $altura = trim($_POST["altura"]);

    if($altura>=0){
        $tiempo = round(sqrt(2*$altura/9.81), 2);
        echo "El tiempo que tardará en tocar el suelo son $tiempo minutos";
    }else{
        echo "altura introducida no valida";
    }
?>