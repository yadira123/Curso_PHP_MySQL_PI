<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    //variables para leer los datos de la imagen
    $id="";
    $contenido="";
    $tipo="";    
    
    
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


    $consulta="SELECT * FROM ARCHIVOS WHERE ID='4'";

    $resultado=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_array($resultado)){

        $id=$fila["ID"];
        $contenido=$fila["CONTENIDO"];
        $tipo=$fila["TIPO"];
    
    }
    
    echo "Id: ".$id."<br>";
    echo "Tipo: ".$tipo."<br>";
    //leer imagen almacenadaen un blob
    echo "<img src='data:image/jpeg; base64,".base64_encode($contenido)."'>";

?>
<!--
    <div>
        <img src="\intranet\carga_imagenes\<?php echo $ruta_img;?>" alt="imagen1" width="25%">
    </div>-->

</body>
</html>