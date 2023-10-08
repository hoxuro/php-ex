<?php 
    $a = trim($_POST["a"]);
    $b = trim($_POST["b"]);

    $solucion= 0;

    if($a==0){
        echo "El coeficiente a no puede ser 0";
    }
    if($a!=0){
        $solucion = round(-$b/$a, 2);
        echo "La solucion de la ecuacion $a"."x + $b = 0 es $solucion";
    }
?>