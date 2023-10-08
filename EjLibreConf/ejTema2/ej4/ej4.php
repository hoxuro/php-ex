<?php 
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];

    $suma= $num1+$num2;
    $res= $num1-$num2;
    $multi= $num1*$num2;
    $div= $num1/$num2;

    echo "<p>$num1 + $num2 = $suma</p>";
    echo "<p>$num1 - $num2 = $res</p>";
    echo "<p>$num1 x $num2 = $multi</p>";
    echo "<p>$num1 / $num2 = $div</p>";
?>