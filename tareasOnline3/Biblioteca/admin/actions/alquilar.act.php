<?php
// importo el codigo necesario para establecer conexion con la base de datos
include "../../common/utils.php";
include "../../common/pdo.php";

// establezco conexion con la base de datos
// mediante una funcion que he creado para 
// abstraer codigo usando PDO
$conn = Connect();

//inicio sesion para acceder a las variables
session_start();

$nombreApellidos = $_SESSION['nombreApellidos'];

// // creo otra consulta sql para seleccionar al usuario actual
$query = "SELECT id_usuario FROM usuarios WHERE nombreusuario = '$nombreApellidos'";

// // ejecuto la consulta
$usuarios = ExecuteQuery($query, $conn);

$id_libro = $_GET['id'];

// //creo otra consulta para poder seleccionar los atributos del libro que quiero alquilar
$query = "SELECT * FROM libros WHERE id_libro= '$id_libro'";

$libro = ExecuteQuery($query, $conn);

$id_libro = $libro[0]['id_libro'];
$id_usuario = $usuarios[0]['id_usuario'];

// creo otra consulta para añadir el libro a la tabla de alquilados
$query = "INSERT INTO alquileres (libro_id, usuario_id, fechprestamo, fechdevolucion)
          VALUES ($id_libro, $id_usuario,  CURRENT_DATE, DATE_ADD(CURRENT_DATE, INTERVAL 1 MONTH))";

// ejecuto la consulta
$libros = ExecuteQuery($query, $conn);

//cierro la consulta para no gastar recursos
$conn = null;

// cuando se produzca el alquiler quiero que me redirija al home
header("location: ../home.php?page=disponibles");
