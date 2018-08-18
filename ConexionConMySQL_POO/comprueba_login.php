<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    try{
        //1. conexion con la bd
        $base=new PDO("mysql:host=localhost:3308;dbname=pruebas","root","root");
        //2.
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //3.
        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIO=:login AND PASSWORD=:password";
        
        //4. preparar una consulta preparada con marcadores
        $resultado=$base->prepare($sql);
        
        //5. rescatar el login y pass q el user introdujo en el formulario d la otra pag
        $user=htmlentities(addslashes($_POST["usuario"]));
        $pass=htmlentities(addslashes($_POST["password"]));
        
        //6. identificar cada marcador con su valor
        $resultado->bindValue(":login",$user);
        $resultado->bindValue(":password",$pass);
        
        //7. ejecutar la instruccion sql
        $resultado->execute();
        
        $numero_registro=$resultado->rowCount();//almacena el num de filas afectadas 0 o 1
        
        
        if($numero_registro!=0){//si el usuario si existe
            
            //creas una sesion(para el usuario q se acaba de loguear)
            session_start();
            
            //almacenar dentro de la variable super global $_session el login del usuario["usuario"]
            //al almacenarlo en una variable s global vamos a poder llamarlo desde cualquier otra pag
            $_SESSION["login_usuario"]=$_POST["usuario"];
            
            //redirigir a la pag de usuario registrado
            header("location:usuarios_registrados.php");
        }
        else{
           //redirigir a la pagina de login.php 
            header("location:login.php");
        }
        
        
        
    }catch(Exception $e){
        die("Error: ".$e->getMessage());//mate el error y lo muestre
    }
      
    
?>
</body>
</html>