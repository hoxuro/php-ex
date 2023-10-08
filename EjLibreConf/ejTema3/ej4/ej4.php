<?php 
    $horas = trim($_POST["horas"]);
    $salario=0;
    
    if($horas<=40){
        $salario+= $horas*12;
    }else{
        $salario+= 40*12;
        $salario+= ($horas-40)*16;
    }

    echo "Tu salario semanal por $horas horas trabajadas es de $salario euros"
?>