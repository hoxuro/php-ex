        <?php

        if (!empty($rows)) {

        ?>
            <table class="rentTable">
                <thead>
                    <tr>
                        <th>Libro</th>
                        <th>Fecha del prestamo</th>
                        <th>Fecha de devolucion</th>
                    </tr>
                </thead>
                <tbody>
                    </tr>

                    <?php

                    foreach ($rows as $row) {
                        echo '
                                    <td>' . $row['titulo'] . '</td>
                                    <td>' . $row['fechprestamo'] . '</td>
                                    <td>' . $row['fechdevolucion'] . '</td>
                                </tr>
                              ';
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "<p>No tienes ningun libro alquilado</p>";
        }
        ?>