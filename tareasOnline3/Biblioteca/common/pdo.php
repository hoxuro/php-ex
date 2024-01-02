<?php

// permite conectarnos a una base de datos mediante PDO
function Connect()
{

    // abro la conexion usando PDO
    $conn = new PDO('mysql:host=localhost; dbname=biblioteca', 'root', '');

    // linea para acceder a bases de datos de forma mas consistente y segura
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // establezco que voy a trabajar con caracteres utf8
    $conn->exec('SET CHARACTER SET utf8');

    return ($conn);
}


function ExecuteQuery($sql, $conn)
{

    // primero preparo la ejecucion de la query
    $result = $conn->prepare($sql);

    // luego ejecuto la query
    $result->execute();


    if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        do {
            $data[] = $row;
        } while ($row = $result->fetch(PDO::FETCH_ASSOC));
    } else {
        $data = null;
    }

    // finalmente cierro el cursor para no malgastar recursos

    $result->closeCursor();

    return ($data);
}
