<?php
    //recibe los datos de la imagen
    //$_FILES <- variable o array super global q va a almacenar en su interior varios datos o propiedades de la img q hemos seleccionado ejm:(name,type(tipo),size(tamaño),tmp_name(directorio_tempral)devuelve nombre d la carpeta temporal)
    $nombre_archivo=$_FILES['archivo']['name'];

    $tipo_archivo=$_FILES['archivo']['type'];
    
    $tamanio_archivo=$_FILES['archivo']['size'];



    //limitar el tamaño del archivo a subir
    if($tamanio_archivo<=1000000){//1 mega
        
        /*//limitar el formato del archivo a subir
        if($tipo_archivo=="image/jpeg" || $tipo_archivo=="image/jpg" || $tipo_archivo=="image/png" || $tipo_archivo=="image/gif"){
*/
        //directorio donde queremos guardar la imagen(ruta de la carpeta destino en servidor)
        //DOCUMENT_ROOT <- raiz del servido osea(www)
        //la ruta final seria 'www/intranet/carga_imagenes
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/carga_imagenes/';

        //mueva la img d la carpeta temporal a la carpta carga_imagenes
        //move_uploaded_file <- admite los sgte sparametros: ($_FILES['nombreimgindex]['nameCarpetaTemporal],$nameCarpDestino.$NombreImagen) ;
        move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
        /*}
        else{
            echo "Solo se pueden subir imagenes: jpg, jpeg, png y gif";
        }*/
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


    //fopen <- apunta al archivo q queremos abrir fopen(nombreRutaArchivo, Permisos("r"<-read))
    //fread <- leer el archivo
    $archivo_objetivo=fopen($carpeta_destino.$nombre_archivo, "r");

    //leer los bytes q forman parte de ese archivo 
    //fread(NombreArchivoALeer, tamaño)
    //$contenido tiene en su interior una sucesion de byts q son los byts q forman el archivo escogido en el index
    $contenido=fread($archivo_objetivo, $tamanio_archivo);

    $contenido=addslashes($contenido);//addslaches<-escapa caracteres extraños para q PHP reconosca la ruta del archivo
    
    //cerrar el fopen
    fclose($archivo_objetivo);
    
    $sql="INSERT INTO ARCHIVOS (ID,NOMBRE,TIPO,CONTENIDO) VALUES(0,'$nombre_archivo','$tipo_archivo','$contenido')";
    echo " <br><br>";
    
    $resultado=mysqli_query($conexion,$sql);

    //si la instruccion ha insertado algo
    if(mysqli_affected_rows($conexion)>0){
        echo "Se ha insertado el registro con exito";
    }
    else{
        echo "No se ha podido insertar el registro";
    }
    

?>