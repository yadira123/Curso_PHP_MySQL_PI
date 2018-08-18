<?php

    //creando una constante
    define("AUTOR","Juana",true);

    define("AUTOR","Maria",false);
    
    echo "El autor es " . autor . "<br>";
    echo "El autor es " . AUTOR . "<br>";

    echo "La linea de esta instruccion es: " . __LINE__."<br>";

    echo "Estamos trabajando con este fichero: " . __FILE__."<br>";
    

    //constantes predefinidas del nucleo php

    echo "La version de php utilizada es: ".PHP_VERSION."<br>";//version actual de PHP

    echo PHP_MAJOR_VERSION."<br>";//La versión "mayor" actual de PHP como valor integer (p.ej., int(5) en la versión "5.2.7-extra"). Disponible desde PHP 5.2.7.    
    echo PHP_MINOR_VERSION."<br>";//La versión "menor" actual de PHP como valor integer (p.ej, int(2) en la versión "5.2.7-extra"). Disponible desde PHP 5.2.7.
    echo PHP_RELEASE_VERSION ."<br>";//La versión de "publicación" (release) actual de PHP como valor integer (p.ej., int(7) en la versión "5.2.7-extra"). Disponible desde PHP 5.2.7.
    echo PHP_VERSION_ID."<br>";//La versión de PHP actual como valor integer, útil para comparar versiones (p.ej., int(50207) para la versión "5.2.7-extra").
    echo PHP_EXTRA_VERSION."<br>";//La versión "extra" actual de PHP, en forma de string (p.ej., '-extra' para la versión "5.2.7-extra"). Se usa a menudo por los distribuidores para indicar la versión de un paquete. 
    echo PHP_ZTS."<br>";


?>