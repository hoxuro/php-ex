<?php
$num= $_POST["num"];

if($num%2===0 && $num%5===0){
    echo "El numero $num es par y divisible entre 5";
}else if($num%2===0 && $num%5!==0){
    echo "El numero $num es par y no es divisible entre 5";
}else if($num%2!==0 && $num%5===0){
    echo "El numero $num es no es par pero si es divisible entre 5";
}else if($num%2!==0 && $num%5!==0){
    echo "El numero $num es no es par y tampoco es divisible entre 5";
}

?>