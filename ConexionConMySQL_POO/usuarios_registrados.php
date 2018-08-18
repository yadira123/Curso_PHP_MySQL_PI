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
    <h1>Bienvenidos Usuarios!</h1>
    
    <?php
    //mostrar un mensaje con el usuario q se ha logueado
        echo "Hola. ".$_SESSION["login_usuario"]."<br>"; 
            
    ?>
    
    <p><a href="CerrarSesion.php">Cierra Sesion</a></p>
    
    <p>Esto es informacion solo para usuarios registrados</p>
    
    <table border=1>
        <tr>
            <td colspan="2">Zona Usuarios Registrados</td>
        </tr>
        <tr>
            <td><a href="usuarios_registrados2.php">Pagina1</a></td>
            <td><a href="usuarios_registrados3.php">Pagina2</a></td>
        </tr>
    </table>

</body>
</html>