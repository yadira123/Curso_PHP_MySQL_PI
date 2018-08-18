<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertando</title>
</head>
<body>
<?php
    
    
    //almacenando lo q el usuario introduzca en las cajas de texto en variables
    $cod=$_GET["c_art"];
    /*$sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET["importado"];
    $por=$_GET["p_orig"];*/
    
    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    mysqli_set_charset($conexion,"utf-8");
    
    $query="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='$cod'";
    
    $resultado=mysqli_query($conexion,$query);
    
    if(mysqli_affected_row($conexion)==0){
        echo "Error en la consulta";
    }
    else{
        
        if(mysqli_affected_row($conexion)==0){
            echo "No hay registros a eliminar";
        }
        else{
            echo "Se han eliminado ".mysqli_affected_row($conexion)." registros";    
        }
    }
    
    mysqli_close($conexion);
    
    
?>
</body>
</html>