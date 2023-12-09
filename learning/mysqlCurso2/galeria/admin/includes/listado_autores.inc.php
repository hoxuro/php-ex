<?php

// include dirname(dirname(dirname(__FILE__))) . "/common/utils.php";
include dirname(dirname(dirname(__FILE__))) . "/common/config.php";
include dirname(dirname(dirname(__FILE__))) . "/common/mysql.php";

# conectamos con la base de datos
$connection = Connect($config['database']);

# Buscamos todas las imagenes ordenadas por orden de inserccion
$sql  = "SELECT * FROM authors ORDER BY name ASC";

$rows = ExecuteQuery($sql, $connection);

// debug($rows);
Close($connection);

?>

<script type="text/javascript">
    function delete_post(id) {
        var ok = confirm("¿ Seguro de borrar este autor ? ");
        if (!ok) {
            return false;
        } else {
            location.href = "delete.php?page=autores&id=" + id;
        }
    }
</script>

<!-- Page Content -->
<div class="container">
    <div class="row">

        <div class="col-lg-12 text-lett">
            <h2 class="mt-5">Listado de autores</h2>
        </div>

    </div>

    <div class="row cuadro_listado_fotos">
        <div class="col-lg-12">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($rows as $row) {

                        if ($row['enabled'] == "1") {
                            $enabled = "<svg width='20px' height='20px' viewBox='0 0 12 12' xmlns='http://www.w3.org/2000/svg'>
                            <circle cx='6' cy='6' r='6' fill='#008000'/>
                          </svg>";
                        } else {
                            $enabled = "<svg width='20px' height='20px' viewBox='0 0 12 12' xmlns='http://www.w3.org/2000/svg'>
                                <circle cx='6' cy='6' r='6' fill='#777777'/>
                              </svg>";
                        }


                        echo '
                  <td>' . $row['id'] . '</td>
                  <td>' . $row['name'] . '</td>
                  <td>' . $row['email'] . '</td>
                  <td>' . date("d/m/Y H:s:i", strtotime($row['created'])) . '</td>
                  <td>' . $enabled . '</td>
                  
                  <td><a href="#" OnClick="delete_post(' . $row['id'] . ')"><a href="#" OnClick="delete_post(' . $row['id'] . ')"><svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M750.1 879.2l16.6-16.7v-77.1l-93.8 93.8zM751.7 384.8H272.3c-8.3 0-15 6.7-15 15v464.4c0 8.3 6.7 15 15 15h238.6l255.8-255.8V399.8c0-8.3-6.7-15-15-15zM333.1 501.2c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM630.5 879.2l136.2-136.3v-77.1L553.3 879.2z" fill="#FFBC00" /><path d="M751.7 354.8H272.3c-24.8 0-45 20.2-45 45v464.4c0 24.8 20.2 45 45 45h479.5c24.8 0 45-20.2 45-45V399.8c-0.1-24.8-20.3-45-45.1-45z m15 507.7l-16.6 16.6h-77.2l93.8-93.8v77.2z m0-119.6L630.5 879.2h-77.2l213.4-213.4v77.1z m0-119.6L510.9 879.2H272.3c-8.3 0-15-6.7-15-15V399.8c0-8.3 6.7-15 15-15h479.5c8.3 0 15 6.7 15 15v223.5z" fill="#46287C" /><path d="M287.7 287.2h446.6c11.3 0 20.6-9.2 20.6-20.6v-32.4c0-11.3-9.2-20.6-20.6-20.6H287.7c-11.3 0-20.6 9.2-20.6 20.6v32.4c0 11.4 9.3 20.6 20.6 20.6z" fill="#FFBC00" /><path d="M287.7 317.2h446.6c27.9 0 50.6-22.7 50.6-50.6v-32.4c0-27.9-22.7-50.6-50.6-50.6H585.4v-24.4c0-14.9-12.1-27-27-27h-92.7c-14.9 0-27 12.1-27 27v24.4h-151c-27.9 0-50.6 22.7-50.6 50.6v32.4c0 27.9 22.7 50.6 50.6 50.6z m-20.6-83c0-11.3 9.2-20.6 20.6-20.6h446.5c11.3 0 20.6 9.2 20.6 20.6v32.4c0 11.3-9.2 20.6-20.6 20.6H287.7c-11.3 0-20.6-9.2-20.6-20.6v-32.4z m288.3-71.9v21.4h-86.7v-21.4h86.7z" fill="#46287C" /><path d="M468.6 162.3h86.7v21.4h-86.7z" fill="#FFBC00" /><path d="M333.1 459.2m-42 0a42 42 0 1 0 84 0 42 42 0 1 0-84 0Z" fill="#FFFFFF" /></svg></a></td>
                  </tr>
                ';
                    }
                    ?>


                </tbody>
            </table>

        </div>
    </div>

</div>