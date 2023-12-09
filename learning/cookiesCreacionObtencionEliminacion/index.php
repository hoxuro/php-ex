<?php

// crear cookies propias
setcookie("noexpira", 1);

setcookie("micookie", 2, time() + 30);

echo '<pre>', var_dump($_COOKIE), '</pre>';

if (isset($_COOKIE["noexpira"])) {
    echo "se ha establecido una cookie que no expira";
}


//eliminar una cookie
setcookie("noexpira", "", time() - 1);

echo '<pre>', var_dump($_COOKIE), '</pre>';
