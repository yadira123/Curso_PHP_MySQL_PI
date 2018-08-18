<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    $pais=$_GET["buscar"];
    
    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    if(mysqli_connect_errno()){
        echo "fallo al conectar con la BD";
        exit();
    }
    
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    mysqli_set_charset($conexion,"utf8");
    
    //1 PASO
    $sql="SELECT CÓDIGOARTÍCULO,SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN=?";
    
    //2 PASO
    $resultado=mysqli_prepare($conexion,$sql);
    
    //3 PASO s <- string
    $ok=mysqli_stmt_bind_param($resultado,"s",$pais);
    
    //4 PASO
    $ok=mysqli_stmt_execute($resultado);
    
    //5
    if($ok==false){
        echo "error al ejecutar la consulta";
    }
    else{
       //6
        $ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
        
        echo "Articulos encontrados: <br><br>";
        
        while(mysqli_stmt_fetch($resultado)){
            echo $codigo." | ".$seccion." | ".$precio." | ".$pais."<br>";
        }
        
        mysqli_stmt_close($resultado);
    }
    
?>
    
</body>
</html>