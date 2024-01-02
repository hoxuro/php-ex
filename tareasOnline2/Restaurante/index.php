<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <?php

    // si ha intentado iniciar sesion
    if (isset($_POST['iniciar'])) {

        // si ha iniciado sesion correctamente
        if (strtolower(trim($_POST['nombre'])) == 'juan' && strtolower(trim($_POST['password'])) == 'juan123') {

    ?>

            <h2>Menú del día</h2>
            <form class="pedidosForm" action="./restaurante.php" method="post">
                <div class="group">
                    <label for="numMesa">Número de mesa:</label>
                    <select name="numMesa" id="numMesa" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div class="group">
                    <label for="nombre">Nombre del camarero:</label>
                    <input type="text" name="nombre" required />
                </div>

                <div class="group">
                    <label for="apellidos">Apellidos del camarero:</label>
                    <input type="text" name="apellidos" required />
                </div>

                <div class="group">
                    <label for="primerPlato">Selecciona primer plato:</label>
                    <select name="primerPlato" id="primerPlato" required>
                        <option value=""></option>
                        <option value="Ensalada de Quinoa y Verduras Asadas">
                            Ensalada de Quinoa y Verduras Asadas
                        </option>
                        <option value="Sopa de Tomate y Albahaca">
                            Sopa de Tomate y Albahaca
                        </option>
                        <option value="Risotto de Champiñones y Espárragos">
                            Risotto de Champiñones y Espárragos
                        </option>
                    </select>
                </div>

                <div class="group">
                    <label for="segundoPlato">Selecciona primer plato:</label>
                    <select name="segundoPlato" id="segundoPlato" required>
                        <option value=""></option>
                        <option value="Filete de Salmón con Salsa de Eneldo">
                            Filete de Salmón con Salsa de Eneldo
                        </option>
                        <option value="Lomo de Cerdo a la Mostaza y Miel">
                            Lomo de Cerdo a la Mostaza y Miel
                        </option>
                        <option value="Risotto de Champiñones y Trufa">
                            Risotto de Champiñones y Trufa
                        </option>
                    </select>
                </div>

                <div class="group">
                    <label for="bebida">Selecciona bebida:</label>
                    <select name="bebida" id="bebida" required>
                        <option value=""></option>
                        <option value="Vino y casera">Vino y casera</option>
                        <option value="Blue Label de Johnnie Walker">
                            Blue Label de Johnnie Walker
                        </option>
                        <option value="Coca-Cola">Coca-Cola</option>
                    </select>
                </div>

                <div class="group">
                    <p>Extras:</p>
                    <label for="pan">Pan</label>
                    <input type="checkbox" id="pan" name="pan" />
                    <label for="mantequilla">Mantequilla</label>
                    <input type="checkbox" id="mantequilla" name="mantequilla" />
                    <label for="puro">Puro</label>
                    <input type="checkbox" id="puro" name="puro" />
                </div>

                <input type="submit" value="Realizar Pedido" />
            </form>

        <?php

        }
        // si no ha iniciado sesion correctamente
        else {
        ?>

            <h2>Bienvenido inicie sesion</h2>
            <form class="pedidosForm" action="./index.php" method="post">
                <p style="color: red;">Usuario o contraseña incorrectos</p>
                <div class="group">
                    <label for="nombre">Introduzca su nombre (juan):</label>
                    <input type="text" name="nombre" />
                </div>
                <div class="group">
                    <label for="password">Introduzca su contraseña (juan123):</label>
                    <input type="text" name="password" />
                </div>

                <input type="submit" name="iniciar" value="Iniciar Sesion" />
            </form>

        <?php


        }
    }
    // si aun no ha intentado iniciar sesion
    else {
        ?>

        <h2>Bienvenido inicie sesion</h2>
        <form class="pedidosForm" action="./index.php" method="post">
            <div class="group">
                <label for="nombre">Introduzca su nombre (juan):</label>
                <input type="text" name="nombre" />
            </div>
            <div class="group">
                <label for="password">Introduzca su contraseña (juan123):</label>
                <input type="text" name="password" />
            </div>

            <input type="submit" name="iniciar" value="Iniciar Sesion" />
        </form>

    <?php

    }

    ?>

</body>

</html>