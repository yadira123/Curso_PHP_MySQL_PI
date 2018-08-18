<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        h1,h2{
            text-align: center;
        }
        table{
            width: 25%;
            background: #FFC;
            border: 2px dotted #f00;
            margin: auto;
        }
        .izq{text-align: right;}
        .der{text-align: left;}
        td{
            text-align: center;
            padding: 10px;
        }
        
    </style>
</head>
<body>
<?php
    
    //si el usuario ha pulsado el boton enviar
    if(isset($_POST["enviar"])){
        
    
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
        $user=htmlentities(addslashes($_POST["txtusuario"]));
        $pass=htmlentities(addslashes($_POST["txtpassword"]));
        
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
            $_SESSION["usuario"]=$_POST["txtusuario"];
            
            //redirigir a la pag de usuario registrado
            //header("location:usuarios_registrados.php");
        }
        else{
           //redirigir a la pagina de login.php 
            //header("location:login.php");
            echo "Usuario o contraseña incorrectos";
        }
        
        
        
    }catch(Exception $e){
        die("Error: ".$e->getMessage());//mate el error y lo muestre
    }
}
    
?>
   

    <?php
        //SI NO se ha iniciado session
        if(!isset($_SESSION["usuario"])){
        
            include("Formulario.html");//incluyes el formulario
        }
        else{
            echo "usuario: ".$_SESSION["usuario"];//quitas el formulario y muestras este mensaje
        }
    
    ?>
    
    <!--COntenido d la pag-->
    <h2>Contenido de la Web</h2>
    <table>
        <tr>
            <td><img src="images/gato1.jpg" width="300" height="166"></td>
            <td><img src="images/gato2.jpg" width="300" height="166"></td>
        </tr>
        <tr>
            <td><img src="images/gatito3.jpg" width="300" height="166"></td>
            <td><img src="images/gato4.jpg" width="300" height="166"></td>
        </tr>
    </table>
    
    
</body>
</html>