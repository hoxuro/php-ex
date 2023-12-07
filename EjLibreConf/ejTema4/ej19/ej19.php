<?php

// la piramide de bolitas la va a hacer quien yo me se
// pues si, yo la he hecho

/**
 * Funcion que permite construir una piramide de imagenes 50x50
 * que el usuario podra elegir cuales introduciendo por parametro
 * su src.
 */
function construirPiramide($altura, $src)
{
    // he hecho un dibujo previo de las piramides
    // y me he dado cuenta que el area de un rectangulo
    // tiene que ver con la solucion

    // a la cual tras razona he llegado a la conclusion de qye
    // dada la anchura de un rectangulo de las caracteristicas
    // para mi piramide, achura = altura * 2 - 1; por lo que 
    // podre calcular el area o lo que es lo mismo el numero
    // de iteraciones

    $anchura = $altura * 2 - 1;

    $dondePoner = $altura;
    $cantidadPoner = 1;

    for ($fila = 1; $fila <= $altura; $fila++) {
        for ($col = 1; $col <= $anchura; $col++) {

            //si la columna coincide con la casilla
            //donde empezar a poner un ladrillo
            if ($col == $dondePoner) {
                $cont = $cantidadPoner;
                //mientras que la cantidad de ladrillos a
                //poner no se agote inserta imagen
                do {
                    ?>

                    <img src="<?php echo $src ?>" width="32px" height="32px" />


                    <?php
                    $cont--;
                    $col++;
                } while ($cont != 0);
                $cantidadPoner += 2;
                $dondePoner--;
            }

            //si en esa columna no quiero poner imagen inserta
            //un espacio en blanco en forma de div
            if ($col != $dondePoner) {


                ?>

                <div style="width: 32px; height: 32px; display: inline-block; ">
                    <div style="width: 100%;"></div>
                </div>

                <?php


            }

        }
        echo "<br/>";
    }
}

$altura = (int) $_POST["altura"];
$material = $_POST["opciones"];

//dependiendo del material escogido por el usuario
switch ($material) {
    case "ladrillos":
        construirPiramide($altura, "./img/pared.png");
        break;
    case "pizza":
        construirPiramide($altura, "./img/pizza.png");
        break;
    case "pelotas":
        construirPiramide($altura, "./img/pelota.png");
        break;
    case "smurf":
        construirPiramide($altura, "./img/smurf.jpg");
        break;
    case "ryan":
        construirPiramide($altura, "./img/ryan-gosling.jpg");
        break;
    default:
        echo "No ha seleccionado una opcion valida";
}

?>