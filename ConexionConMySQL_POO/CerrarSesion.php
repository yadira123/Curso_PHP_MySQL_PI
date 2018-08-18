<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cerrando Sesion</title>
</head>
<body>
<?php
    
    //reanudar la sesion abierta
    session_start();
    
    //cerrar la sesion
    session_destroy();
    
    //redirigimos a la pag de Login.php
    header("Location:Login.php");
    
    
?>
</body>
</html>