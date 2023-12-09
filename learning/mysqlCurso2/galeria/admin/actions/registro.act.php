<?php

include dirname(dirname(dirname(__FILE__))) . "\common\utils.php";
include  dirname(dirname(dirname(__FILE__))) . "\common\config.php";
include  dirname(dirname(dirname(__FILE__))) . "\common\mysql.php";

// debug($_POST);

//almaceno los parametros que me pasan por post
$display_name = $_POST['display_name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if (isset($_POST['enabled'])) {
    $enabled = 1;
} else {
    $enabled = 0;
}


// conectamos con la base de datos
$connection = Connect($config['database']);

$sql = "INSERT INTO authors(name, email, password, enabled) VALUES('$display_name', '$email', '$password', '$enabled')";

$return = Execute($sql, $connection);

Close($connection);

header('location: ../home.php');
