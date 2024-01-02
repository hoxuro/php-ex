<?php
// importo el codigo necesario para establecer conexion con la base de datos
include "../../common/functions.php";
include "../../common/utils.php";
include "../../common/pdo.php";

// establezco conexion con la base de datos
// mediante una funcion que he creado para 
// abstraer codigo usando PDO
$conn = Connect();

session_start();

$nombreApellidos = toTitleCase(trim(strtolower($_POST['nombreApellidos'])));
$passwordPost = $_POST['password'];

$_SESSION['nombreApellidos'] = $nombreApellidos;

try {

    // // creo otra consulta sql para seleccionar al usuario actual
    $query = "SELECT id_usuario, password FROM usuarios WHERE nombreusuario = '$nombreApellidos'";

    // // ejecuto la consulta
    $usuarios = ExecuteQuery($query, $conn);

    $id_usuario = $usuarios[0]['id_usuario'];
    $password = $usuarios[0]['password'];

    //cierro la consulta para no gastar recursos
    $conn = null;

    // cuando se produzca el alquiler quiero que me redirija al home
    if ($password == $passwordPost) {
        header("location: ../home.php?page=disponibles");

        // si la contraseña no coincide quiero que no inicie sesion
    } else {
        header("location: ../../index.php?page=error");
    }
} catch (Exception $e) {

    //cierro la consulta para no gastar recursos
    $conn = null;

    // si se ha producido una excepcion quiero que no me inicie sesion
    // y me lleve al login
    header("location: ../../index.php?page=error");
}
