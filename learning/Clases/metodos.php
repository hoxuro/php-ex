<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    class Alumno
    {

        private $nombre = null;
        private $apellidos = null;

        function getNombre()
        {
            return $this->nombre;
        }
        function getApellidos()
        {
            return $this->apellidos;
        }

        function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        function setApellidos($apellidos)
        {
            $this->apellidos = $apellidos;
        }

        function calcularLetras($nombre)
        {

            return strlen($this->nombre);
        }
    }


    $alumno1 = new Alumno();

    $alumno1->setNombre("Heri");
    $alumno1->setApellidos("A H");

    $nombrealumno1 = $alumno1->getNombre();
    echo $nombrealumno1;
    echo "<br/>";

    $apellidosalumno1 = $alumno1->getApellidos();
    echo $apellidosalumno1;
    echo "<br/>";

    $letras = $alumno1->calcularLetras($nombrealumno1);
    echo $letras;

    if (class_exists("Alumno")) {
        echo "Clase " . get_class($alumno1) . " definida";
    }

    $metodosalumno = get_class_methods("alumno");
    echo '<pre>', var_dump($metodosalumno), '</pre>';

    $propiedadesalumno = get_class_vars("alumno"); // saldra vacio porque todas sus propiedades son privadas
    echo '<pre>', var_dump($propiedadesalumno), '</pre>';



    ?>


</body>

</html>