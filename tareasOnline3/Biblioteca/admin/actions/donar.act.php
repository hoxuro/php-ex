<?php
// importo el codigo necesario para establecer conexion con la base de datos
include "../../common/functions.php";
include "../../common/utils.php";
include "../../common/pdo.php";

// establezco conexion con la base de datos
// mediante una funcion que he creado para 
// abstraer codigo usando PDO
$conn = Connect();

try {

    $titulo = toTitleCase(trim(strtolower($_POST['titulo'])));
    $categoria = $_POST['categoria'];
    $nombreAutor = toTitleCase(trim(strtolower($_POST['nombreAutor'])));
    $apellidosAutor = toTitleCase(trim(strtolower($_POST['apellidosAutor'])));
    $nacionalidadAutor = toTitleCase(trim(strtolower($_POST['nacionalidadAutor'])));
    $descripcion = toTitleCase(trim(strtolower($_POST['descripcion'])));

    // INTRODUZCO AL AUTOR EN LA TABLA DE AUTORS
    $query = "INSERT INTO autores (apellidos, nombre, nacionalidad)
             VALUES ('$apellidosAutor', '$nombreAutor', '$nacionalidadAutor')";

    $rows = ExecuteQuery($query, $conn);

    // ahora creo otra consulta para obtener el id del nuevo autor
    $query = "SELECT id_autor FROM autores WHERE nombre = '$nombreAutor' AND apellidos = '$apellidosAutor'";

    $rows = ExecuteQuery($query, $conn);

    $autor_id = $rows[0]['id_autor'];

    // // creo otra consulta sql para seleccionar al usuario actual
    $query = "INSERT INTO libros (titulo, categoria, autor_id, descripcion) 
              VALUES ('$titulo', '$categoria', $autor_id, '$descripcion')";

    // // ejecuto la consulta
    $rows = ExecuteQuery($query, $conn);

    //cierro la consulta para no gastar recursos
    $conn = null;

    header("location: ../home.php?page=disponibles");
} catch (Exception $e) {
    //cierro la consulta para no gastar recursos
    $conn = null;

    echo $e;

    // si se ha producido una excepcion quiero que no me inicie sesion
    // y me lleve al login
    // header("location: ../home.php?page=error");
}
