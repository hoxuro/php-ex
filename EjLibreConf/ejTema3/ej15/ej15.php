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
    $puntuacion+= ($pregunta1=="si") ? 3 : 0;
    $puntuacion+= ($pregunta2=="si") ? 3 : 0;
    $puntuacion+= ($pregunta3=="si") ? 3 : 0;
    $puntuacion+= ($pregunta4=="si") ? 3 : 0;
    $puntuacion+= ($pregunta5=="si") ? 3 : 0;
    $puntuacion+= ($pregunta6=="si") ? 3 : 0;
    $puntuacion+= ($pregunta7=="si") ? 3 : 0;
    $puntuacion+= ($pregunta8=="si") ? 3 : 0;
    $puntuacion+= ($pregunta9=="si") ? 3 : 0;
    $puntuacion+= ($pregunta10=="si") ? 3 : 0;

    echo "Puntuación obtenida: $puntuacion </br>"; 
    if($puntuacion<=10){
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    }
    if($puntuacion>10 && $puntuacion<=22){
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
    }
    if($puntuacion>22 && $puntuacion<=30){
        echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
    }
?>