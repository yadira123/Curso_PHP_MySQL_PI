<?php

    include_once("../model/objeto_blog.php");

    include("../model/manejo_objetos.php");

    //establecer la conexion
    try{
        
        $conexion=new PDO('mysql:host=localhost;dbname=BDblog','root','root');
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
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

                $destino_ruta="../imagenes/";//definiendo el directorio de destino de las imagenes

                //mover este archivo del directoro temporal a el directorio imagenes
                move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_ruta.$_FILES['imagen']['name']);

                echo "El archivo ".$_FILES['imagen']['name']." se ha copiado en el directorio de imagenes<br>";
            }
            else{
                echo "El archivo no se ha podido copiar al directorio de imagenes<br>";
            }
        }
        
        $manejo_objetos=new manejo_objetos($conexion);
        
        $blog=new objeto_blog();
        
        $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]),ENT_QUOTES));
                         
        $blog->setfecha(Date("Y-m-d H:i:s"));
                         
        $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
        
        $blog->setImagen($_FILES["imagen"]["name"]);

        $manejo_objetos->insertaContenido($blog);
        
        echo "<br>Entrada de blog agregado con exito<br>";
        
                         
    }catch(Exception $e){
        die("Error: ".$e->getMessage());
    }

    

    


?>