<?php 
 $horas= trim($_POST["horas"]);
 $minutos= trim($_POST["minutos"]);

 $segundosDia= 24*60*60;
 $segRestantes= $segundosDia-($horas*60*60)-$minutos*60;

 echo "Faltan ".$segRestantes." segundos para las 00:00";

?>