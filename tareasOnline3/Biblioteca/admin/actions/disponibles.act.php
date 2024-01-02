<?php
// importo el codigo necesario para establecer conexion con la base de datos
include "../common/utils.php";
include "../common/pdo.php";

// establezco conexion con la base de datos
// mediante una funcion que he creado para 
// abstraer codigo usando PDO
$conn = Connect();

$query = "SELECT libros.id_libro, libros.titulo, libros.categoria, libros.descripcion, autores.nombre, autores.apellidos
            FROM libros
            INNER JOIN autores ON libros.autor_id = autores.id_autor
            WHERE NOT EXISTS (
            SELECT 1
            FROM alquileres
            WHERE alquileres.libro_id = libros.id_libro
        );";

// ejecuto la consulta
$libros = ExecuteQuery($query, $conn);


$nombreApellidos = $_SESSION['nombreApellidos'];

// creo otra consulta sql para seleccionar al usuario actual
$query = "SELECT id_usuario FROM usuarios WHERE nombreusuario = '$nombreApellidos'";

// ejecuto la consulta
$usuarios = ExecuteQuery($query, $conn);

//cierro la consulta para no gastar recursos
$conn = null;
