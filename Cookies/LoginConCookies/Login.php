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
    
    $autenticado=false;//almacenara true si el usuario y pass son correctos
    
    //si el usuario ha pulsado el boton enviar
    if(isset($_POST["enviar"])){
        
    
    try{
        //1. conexion con la bd
        $base=new PDO("mysql:host=localhost;dbname=pruebas","root","root");
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
            
            $autenticado=true;
            
            //si ha activado la casilla recordar
            if(isset($_POST["chkrecordar"])){
                //crear la cookie donde almacenara el nombre dle usuario
                setcookie("nombre_usuario", $_POST["txtusuario"], time()+86400);
            }
            
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

        //si el login NO ha tenido exito(si el usuario NO se ha logeado)
        if($autenticado==false){
            //si NO se ha creado la cookie
            if(!isset($_COOKIE["nombre_usuario"]) ) {
                include("Formulario.html");//muestras el form de loguin
            }
        }
        //en caso d q autenticado sea = a true nunca entrara en el if y ocultará el Formulario.html
    
    
    
        //imprimir un saludo si se ha guardado la cookie
        if(isset($_COOKIE["nombre_usuario"])){
            echo "¡Hola ".$_COOKIE["nombre_usuario"]."!";
        }
        //si se ha autenticado correctamente
        else if($autenticado==true){
            echo "¡Hola ".$_POST["txtusuario"]."!";
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

    <!--Contenido exclusivo-->
    <?php
        //si el login ha tenido exito o el cookie=true ha sido creado
        if($autenticado==true || isset($_COOKIE["nombre_usuario"])){
            
            include("UsuarioRegistrados.html");//muestre esta pagina 
        }  
    ?>
    
</body>
</html>