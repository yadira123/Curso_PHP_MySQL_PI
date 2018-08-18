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
    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET["importado"];
    $por=$_GET["p_orig"];
    
    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    mysqli_set_charset($conexion,"utf-8");
    
    $query="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN) VALUES('$cod','$sec','$nom','$pre','$fec','$imp','$por')";
    
    $resultado=mysqli_query($conexion,$query);
    
    if($resultado==false){
        echo "Error en la consulta";
    }
    else{
        echo "Se insertó el registro<br><br>";
        
        echo "<table><tr><td>$cod</td></tr>";
        echo "<tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$pre</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$imp</td></tr>";
        echo "<tr><td>$por</td></tr>";
        
    }
    
    mysqli_close($conexion);
    
    
?>
</body>
</html>