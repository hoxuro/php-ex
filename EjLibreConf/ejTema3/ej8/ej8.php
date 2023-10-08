<?php 
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST["nota3"];

  if($nota1<0 || $nota2<0 || $nota3<0){
    echo "Alguna de las notas introducidas no es valida";
}else if($nota1>10 || $nota2>10 || $nota3>10){
      echo "Alguna de las notas introducidas no es valida";
  }else{
    $media = round(($nota1+$nota2+$nota3)/3, 2);
    echo "La media de las notas introducidas es: $media</br>";
    if($media<5){
      echo "Por lo tanto tiene usted un insuficiente";
    }
    if($media==5){
      echo "Por lo tanto tiene usted un suficiente";
    }
    if($media==6){
      echo "Por lo tanto tiene usted un bien";
    }
    if($media>=7 && $media<9){
      echo "Por lo tanto tiene usted un notable";
    }
    if($media>=9){
      echo "Por lo tanto tiene usted un sobresaliente";
    }
  }
?>