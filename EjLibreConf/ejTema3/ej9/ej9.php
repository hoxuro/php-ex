<?php 
 $a= $_POST["a"];
 $b= $_POST["b"];
 $c= $_POST["c"];

 
 $x1=0;
 $x2=0;
 if($a==0){
     echo "El coeficiente a no puede ser 0";

    }else{
    $discriminante= pow($b, 2)-4*$a*$c;

    if($discriminante<0){
        echo "La ecuacion no tiene solucion real";
    }
    if($discriminante==0){
        $x1= round(-$b/2*$a, 2);
        $x2= round(-$b/2*$a, 2);
        echo "La solución es doble x1= $x1 y x2= $x2";
    }
    if($discriminante>0){
         $x1= round((-$b+sqrt($discriminante)/(2*$a)), 2);
         $x2= round((-$b-sqrt($discriminante)/(2*$a)), 2);
         echo "La solución es x1= $x1 y x2= $x2";
    }
 }

?>