<?php

include dirname(dirname(dirname(__FILE__))) . "/common/utils.php";
include dirname(dirname(dirname(__FILE__))) . "/common/config.php";
include dirname(dirname(dirname(__FILE__))) . "/common/mysql.php";

# conectamos con la base de datos
$connection = Connect($config['database']);

# Buscamos todas las imagenes ordenadas por orden de inserccion
$sql  = "SELECT a.*, b.name AS autor
        FROM images AS a
        INNER JOIN authors AS b ON a.author_id = b.id
        ORDER BY a.id DESC";

$rows = ExecuteQuery($sql, $connection);

// debug($rows);
Close($connection);
