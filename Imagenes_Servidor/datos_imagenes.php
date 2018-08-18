<?php
    //recibe los datos de la imagen
    //$_FILES <- variable o array super global q va a almacenar en su interior varios datos o propiedades de la img q hemos seleccionado ejm:(name,type(tipo),size(tamaño),tmp_name(directorio_tempral)devuelve nombre d la carpeta temporal)
    $nombre_imagen=$_FILES['imagen']['name'];

    $tipo_imagen=$_FILES['imagen']['type'];
    
    $tamanio_imagen=$_FILES['imagen']['size'];



    //limitar el tamaño del archivo a subir
    if($tamanio_imagen<=1000000){//1 mega
        
        //limitar el formato del archivo a subir
        if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){

        //directorio donde queremos guardar la imagen(ruta de la carpeta destino en servidor)
        //DOCUMENT_ROOT <- raiz del servido osea(www)
        //la ruta final seria 'www/intranet/carga_imagenes
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/carga_imagenes/';

        //mueva la img d la carpeta temporal a la carpta carga_imagenes
        //move_uploaded_file <- admite los sgte sparametros: ($_FILES['nombreimgindex]['nameCarpetaTemporal],$nameCarpDestino.$NombreImagen) ;
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
        }
        else{
            echo "Solo se pueden subir imagenes: jpg, jpeg, png y gif";
        }
    }else{
        echo "El tamaño es demasiado grande";
            
    }



        

    //---------------------------------- CONECTAR CON LA BD----------
    require("config.php");

    $conexion=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    //9.si el nombre d la bd es incorrecta muestre este msj
    mysqli_select_db($conexion,DB_NAME) or die ("No se encuentra la BD");
    
    //8.para el juego de caracteres de los (registros) evitar errores
    mysqli_set_charset($conexion,"utf8");
    
    
    $sql="UPDATE PRODUCTOS SET FOTO='$nombre_imagen' WHERE CÓDIGOARTÍCULO='AR01'";
    echo " <br><br>";
    
    $resultado=mysqli_query($conexion,$sql);
    

?>