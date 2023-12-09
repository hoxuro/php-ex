<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    class PrimeraClase
    {
        public $nombre = 'Heri';

        public function mostrarNombre()
        {
            echo $this->nombre;
        }
    }


    $instancia = new PrimeraClase();

    echo $instancia->nombre;
    echo "<br/>";
    $instancia->mostrarNombre();

    ?>

</body>

</html>