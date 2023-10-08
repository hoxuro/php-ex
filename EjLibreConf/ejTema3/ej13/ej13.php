<?php 
$num1= $_POST["num1"];
$num2= $_POST["num2"];
$num3= $_POST["num3"];

if($num1>$num2){
    $container = $num1;
    $num1 = $num2;
    $num2 = $container;
}

if($num2>$num3){
    $container = $num2;
    $num2 = $num3;
    $num3 = $container;
}

if($num1>$num2){
    $container = $num1;
    $num1 = $num2;
    $num2 = $container;
}

echo "$num1 < $num2 < $num3";
?>