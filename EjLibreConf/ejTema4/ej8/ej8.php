<?php
$num = $_POST["numero"];

?>

<!-- create table -->
<table>

    <?php
    //Create 1 row per iteration
    for ($i = 1; $i < 11; $i++) {

        ?>
        <tr>
            <td>
                <?php
                $res = $num * $i;
                echo "$num x $i = $res";
                ?>
            </td>

        </tr>
        <?php

    }

    ?>
</table>

<?php

?>