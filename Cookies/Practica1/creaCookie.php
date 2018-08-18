<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    //crear cookie
    //se le va a pasar como parametro a la variable super global $_GET["nombre"] q se le paso en la equiqueta a
    setcookie("idioma_seleccionado", $_GET["idioma"], time()+86400);
    
    header("Location:ver_cookie.php");

?>
</body>
</html>