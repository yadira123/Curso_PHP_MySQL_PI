<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h2>Blog</h2>
    <hr>
    
<?php
    
     $conexion=mysqli_connect("localhost:3308", "root", "root", "BDblog");

    //comprobar la conexion
    if(!$conexion){
        echo "La conexion ha fallado ".mysqli_error();
        exit();
    }
    
    $consulta="SELECT * FROM CONTENIDO ORDER BY FECHA DESC";
    
    //extraer los registros de $consulta
    if($resultado=mysqli_query($conexion, $consulta)){
        
        //recorrer el array $resultado
        while($registro=mysqli_fetch_assoc($resultado)){
            echo "<h3>".$registro['TITULO']."</h3>";
            
            echo "<h4>".$registro['FECHA']."</h4>";
            
            echo "<div style='width:400px'>".$registro['COMENTARIO']."</div><br><br>";
            
            if($registro['IMAGEN']!=""){//si la imagen no está vacía
                echo "<img src='imagenes/".$registro['IMAGEN']."' width='300px'>";
            }
            
            echo "<br><br><hr/>";//divide las entradas del Blog
            
        }
    }
    
    
?>
</body>
</html>