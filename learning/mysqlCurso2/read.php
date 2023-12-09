<?php

$conn = mysqli_connect('localhost', 'root', '', 'pruebas');

$sql = 'SELECT id, name, email, created FROM users';

$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result, MYSQLI_NUM);

echo '<pre>', var_dump($rows), '</pre>';

do {
    $data[] = $rows;
} while ($rows =  mysqli_fetch_array($result, MYSQLI_NUM));

echo '<pre>', var_dump($data), '</pre>';


mysqli_close($conn);
