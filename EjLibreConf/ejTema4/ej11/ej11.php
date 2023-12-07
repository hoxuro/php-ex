<?php

$num = $_POST["numero"];

?>

<table>
    <tr>
        <td>Numero</td>
        <td>Cuadrado</td>
        <td>Cubo</td>
    </tr>

    <?php

    for ($i = 0; $i < 5; $i++) {
        ?>
        <tr>
            <td>
                <?php echo $num ?>
            </td>
            <td>
                <?php
                $cuadrado = pow($num, 2);
                echo $cuadrado;
                ?>
            </td>
            <td>
                <?php
                $cubo = pow($num, 3);
                echo $cubo;
                ?>
            </td>
        </tr>

        <?php

        ++$num;
    }
    ?>


</table>