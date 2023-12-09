<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/example/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/example/css/styles.css" rel="stylesheet" />
    <link href="../assets/example/css/estilos.css" rel="stylesheet" />
</head>

<body>


    <?php

    // navigation
    include "../admin/includes/menu.inc.php";

    $page = $_GET['page'];

    switch ($page) {
        case 'listado':
            include "./actions/listado.act.php";
            include "./includes/listado.inc.php";
            break;
        case 'autores':
            include "./includes/listado_autores.inc.php";
            break;
        case 'new':
            include "./includes/new_foto.inc.php";
            break;
        case 'edit':
            include "./includes/edit_foto.inc.php";
            break;
    }

    ?>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="../assets/example/js/scripts.js"></script>
</body>

</html>