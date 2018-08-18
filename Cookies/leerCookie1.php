<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leyendo la cookie 1</title>
</head>
<body>
<?php
    //si la cookie prueba existe
    if(isset($_COOKIE["prueba"])){
        //leer la cookie 1
        //leer la variable super global: $_COOKIE(mombredelacookie a leer)
        echo $_COOKIE["prueba"];
    }
    else{
        echo "la cookie no se ha creado o cargado";
    }
?>
    
</body>
</html>