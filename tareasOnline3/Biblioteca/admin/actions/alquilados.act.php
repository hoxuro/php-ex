<?php
// importo el codigo necesario para establecer conexion con la base de datos
include "../common/utils.php";
include "../common/pdo.php";

// establezco conexion con la base de datos
// mediante una funcion que he creado para 
// abstraer codigo usando PDO
$conn = Connect();

$nombreApellidos = $_SESSION['nombreApellidos'];

// creo otra consulta sql para seleccionar al usuario actual
$query = "SELECT id_usuario FROM usuarios WHERE nombreusuario = '$nombreApellidos'";

// ejecuto la consulta
$usuarios = ExecuteQuery($query, $conn);

$id_usuario = $usuarios[0]['id_usuario'];

// creo la consulta sql para seleccionar los libros alquilados por ese usuario
$query = "SELECT * FROM alquileres
          INNER JOIN libros ON alquileres.libro_id= libros.id_libro
          WHERE alquileres.usuario_id='$id_usuario'";

// ejecuto la consulta
$rows = ExecuteQuery($query, $conn);

//cierro la consulta para no gastar recursos
$conn = null;
