<?php

const combinacion = "1234";

$respuesta = $_POST["respuesta"];
$intentos = $_POST["intentos"];

if ($respuesta == combinacion) {
    echo "La caja fuerte se ha abierto satisfactoriamente";
}
if ($respuesta != combinacion) {
    echo "Lo siento, esa no es la combinacion. Vuelve a intentarlo:<br/><br/>";
    $intentos--;

    if ($intentos == 0) {
        echo "Desafortunadamente ha agotado sus intentos, voy a llamar a la policia";
    }
    if ($intentos != 0) {
        ?>

        <form action="ej7.php" method="post">
            <label for="respuesta">Introduce la combinación de la caja fuerte</label>
            <input type="text" name="respuesta" />
            <input type="hidden" name="intentos" value="<?php echo $intentos ?>" />
            <input type="submit" name="enviar" />
        </form>

        <?php

    }
}

?>