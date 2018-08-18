<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Contenido</title>
</head>
<body>
<?php

    $conexion=mysqli_connect("localhost:3308", "root", "root", "BDblog");

    //comprobar la conexion
    if(!$conexion){
        echo "La conexion ha fallado ".mysqli_error();
        exit();
    }

    //si ocurre uno d los sgtes errores con la imagen a subir
    //'error' es un atributo o un parametro d la funcion $_FILES
    if($_FILES['imagen']['error']){
        
        switch($_FILES['imagen']['error']){
                
            case 1: //Error exceso de tamaño en el archivo php.ini
                echo "El tamaño del archivo excede lo permitido por el servidor";
                break;
                
            case 2://si el archivo excede la directiva MAX_FILE_SIZE especificada en el input value="2097152"
                echo "El tamaño del archivo excede 2MB";
                break;
                
            case 3://error al subir el archivo a internet(corrupcion de archivo)
                echo "El envio de archivo se interrumpió";
                break;
                
            case 4://si el usuario no escogio ningun fichero a subir
                echo "No se ha seleccionado ningún archivo";
                break;
        }
        
        
    }else{
        echo "Entrada subida correctamente<br>";
        
        //si el error ha sido =0 o no ha habido error
        if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
            
            $destino_ruta="imagenes/";//definiendo el directorio de destino de las imagenes
            
            //mover este archivo del directoro temporal a el directorio imagenes
            move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_ruta.$_FILES['imagen']['name']);
            
            echo "El archivo ".$_FILES['imagen']['name']." se ha copiado en el directorio de imagenes<br>";
        }
        else{
            echo "El archivo no se ha podido copiar al directorio de imagenes<br>";
        }
    }


    $titulo=$_POST["campo_titulo"];
    $fecha=date('Y-m-d H:i:s');//date('2017-11-07 07:49 5s)
    $comentario=$_POST["area_comentarios"];
    $imagen=$_FILES['imagen']['name'];

    //insertar en la BD
    /*$consulta="INSERT INTO CONTENIDO (TITULO,FECHA,COMENTARIO,IMAGEN) VALUES('$titulo','$fecha','$comentario','$imagen')";
*/
    $consulta="INSERT INTO CONTENIDO (TITULO,FECHA,COMENTARIO,IMAGEN) VALUES('".$titulo."','".$fecha."','".$comentario."','".$imagen."')";

    $resultado=mysqli_query($conexion, $consulta);

    mysqli_close($conexion);
    
    echo "Se ha insertado el comentario con éxito<br><br>";


?>
    <a href="Formulario.php">Añadir Nueva entrada al Blog</a><br>
    <a href="mostrarBlog.php">Ir al Blog</a>
    
</body>
</html>