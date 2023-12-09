<?php


include dirname(dirname(dirname(__FILE__))) . "\common\utils.php";
include  dirname(dirname(dirname(__FILE__))) . "\common\config.php";
include  dirname(dirname(dirname(__FILE__))) . "\common\mysql.php";


//almaceno los parametros que me pasan por post
$loginEmail = $_POST['loginEmail'];
$loginPassword = md5($_POST['loginPassword']);

// conectamos con la base de datos
$connection = Connect($config['database']);

$sql = "SELECT * FROM authors WHERE email = '$loginEmail' AND password = '$loginPassword'";

$rows = ExecuteQuery($sql, $connection);

Close($connection);

if (empty($rows)) {
    header("location: ../error.php?error=1");
} else {
    session_start();
    $_SESSION['id'] = $rows[0]['id'];
    $_SESSION['email'] = $rows[0]['email'];
    $_SESSION['session_id'] = session_id();

    header("location: ../home.php?page=listado");
}
