<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../style.css" />
</head>

<body>

    <?php

    //inicio sesion
    session_start();

    // si acabo de iniciar sesion almaceno me conecto a la base de datos
    // y almaceno los datos de usuario mediante sesiones
    if (isset($_POST['nombreApellidos'])) {

        include "../common/functions.php";

        $nombreApellidos = toTitleCase(trim(strtolower($_POST['nombreApellidos'])));

        $_SESSION['nombreApellidos'] = $nombreApellidos;
    }

    //importo el nav
    include "./includes/menu.inc.php";

    ?>


    <div class="container books">

        <?php
        $page =   isset($_GET['page']) ? $_GET['page'] : 'disponibles';

        if ($page !== 'donar' && $page !== 'alquilados') {

        ?>

            <div class="row row-donar">
                <div class="col-lg-6 col-donar d-flex justify-content-between">
                    <p class="text-donar">¿Ya no usas un libro?</p>
                    <form action="./home.php?page=donar" method="post">
                        <button class="btn btn-primary btn-sign submit">Donar</button>
                    </form>
                </div>
            </div>

        <?php

        }

        ?>
        <?php

        // si acaba de entrar quiero que se salude al usuario
        if (isset($_POST['nombreApellidos'])) {
        ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2>Bienvenido/a <?php echo $_SESSION['nombreApellidos']; ?> </h2>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="row">
            <div class="col-lg-12">

                <?php

                switch ($page) {
                    case 'disponibles':
                        echo '<h3>Libros Disponibles</h3>';
                        break;
                    case 'alquilados':
                        echo '<h3>Tus Alquileres</h3>';
                        break;
                    case 'donar':
                        echo '<h3>Dona los libros que no usas!</h3>';
                        break;
                }
                ?>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <?php
                // en ambos casos me quiero conectar a la abse de datos para obtener el usuario

                switch ($page) {
                    case 'rent':
                        include "./includes/alquilar.inc.php";
                        break;
                    case 'disponibles':
                        include "./actions/disponibles.act.php";
                        include "./includes/disponibles.inc.php";
                        break;
                    case 'alquilados':
                        include "./actions/alquilados.act.php";
                        include "./includes/alquilados.inc.php";
                        break;
                    case 'donar':
                        include "./includes/donar.inc.php";
                        break;
                    case 'error':
                        include "./includes/error.inc.php";
                        break;
                }


                ?>

            </div>

        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>