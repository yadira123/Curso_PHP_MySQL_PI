<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Usuarios Registrados</title>
</head>
<body>
<?php
     session_start();//reanudamos la sesion del usuario logueado
     //si no hay nada almacenado en esa variable
    if(!isset($_SESSION["login_usuario"])){
        header("Location:Login.php");        
    }
    
    
?> 
   <p><a href="CerrarSesion.php">Cierra Sesion</a></p>
    <h1>Bienvenidos Usuarios!</h1>
    
    <?php
    //mostrar un mensaje con el usuario q se ha logueado
        echo "Usuario: ".$_SESSION["login_usuario"]."<br>"; 
            
    ?>
    
    <p>Esto es informacion solo para usuarios registrados</p>

</body>
</html>