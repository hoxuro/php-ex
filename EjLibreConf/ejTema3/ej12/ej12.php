<?php
 $pregunta1= $_POST["pregunta1"];
 $pregunta2= $_POST["pregunta2"];
 $pregunta3= $_POST["pregunta3"];
 $pregunta4= $_POST["pregunta4"];
 $pregunta5= $_POST["pregunta5"];
 $pregunta6= $_POST["pregunta6"];
 $pregunta7= $_POST["pregunta7"];
 $pregunta8= $_POST["pregunta8"];
 $pregunta9= $_POST["pregunta9"];
 $pregunta10= $_POST["pregunta10"];

 $puntuacion=0;
 $puntuacion+= ($pregunta1=="si") ? 1 : 0;
 $puntuacion+= ($pregunta2=="no") ? 1 : 0;
 $puntuacion+= ($pregunta3=="si") ? 1 : 0;
 $puntuacion+= ($pregunta4=="si") ? 1 : 0;
 $puntuacion+= ($pregunta5=="si") ? 1 : 0;
 $puntuacion+= ($pregunta6=="si") ? 1 : 0;
 $puntuacion+= ($pregunta7=="si") ? 1 : 0;
 $puntuacion+= ($pregunta8=="si") ? 1 : 0;
 $puntuacion+= ($pregunta9=="si") ? 1 : 0;
 $puntuacion+= ($pregunta10=="no") ? 1 : 0;

 echo "Gracias por realizar el cuestionario su puntuación es de ".$puntuacion;
?>