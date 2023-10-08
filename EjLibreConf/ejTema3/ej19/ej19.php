<?php
    $num = trim($_POST["num"]);
    $toArray= str_split($num);
    $toArrayReverse= array_reverse($toArray);

    if(implode("", $toArray)==implode("", $toArrayReverse)){
        echo "El numero $num es capicua";
    }else{
        echo "El numero $num NO es capicua";
    }
?>