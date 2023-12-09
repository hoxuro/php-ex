<?php


$conn = mysqli_connect('localhost', 'root', '', 'pruebas');

$update = "UPDATE users SET name = 'pedro22' WHERE id = 1";

$delete = "DELETE FROM users WHERE id = 1";

$return = mysqli_query($conn, $update);

$return = mysqli_query($conn, $delete);

echo '<pre>', var_dump($return), '</pre>';

mysqli_close($conn);
