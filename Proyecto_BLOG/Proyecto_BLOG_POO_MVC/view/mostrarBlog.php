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
    
    include_once("../model/manejo_objetos.php");
    
    //establecer la conexion
    try{
        
        $miconexion=new PDO('mysql:host=localhost;dbname=bdblog','root','root');
        
        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $manejo_objetos=new manejo_objetos($miconexion);
        
        $tabla_blog=$manejo_objetos->getContenidoPorFecha();//contiene un array con todas las entradas de blog
        
        if(empty($tabla_blog)){//si este objeto esta vacio
            echo "No hay entradas de blog aún";
        }
        else{
            foreach($tabla_blog as $valor){//recorrer posicion a posic el array
                echo "<h3>".$valor->getTitulo()."</h3>";
                echo "<h4>".$valor->getFecha()."</h4>";
                echo "<div style='width:400px'>";
                echo $valor->getComentario()."</div>";
                
                if($valor->getImagen()!=""){
                    echo "<img src='../imagenes/";
                    echo $valor->getImagen()."' width='300px' height='200px'/>";
                }
                echo "<hr/>";
            }
        }
        
        
        
        
    }catch(Exception $e){
        die("Error: ".$e->getMessage());
    }
        
      
?>
<br>
<a href="Formulario.php">Volver a la pagina de Inserción</a>

</body>
</html>