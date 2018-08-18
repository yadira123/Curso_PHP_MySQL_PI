<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Union de las dospaginas PHP</title>

<?php
    
    function ejecuta_consulta($labusqueda){

    //1.almacenar en la variable lo q pase en el cuadro d texto
    //$busqueda=$_GET["txtbuscar"];
    

    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    //9.si el nombre d la bd es incorrecta muestre este msj
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    //8.para el juego de caracteres de los (registros) evitar errores
    mysqli_set_charset($conexion,"utf-8");
    
    
    //3. almacenar en una variable la consulta q le queremos hacer a la bd 
    $consulta="select * from PRODUCTOS where NOMBREARTÍCULO like '%$labusqueda%'";
    
    //4. ejecutar la consulta
    $resultado=mysqli_query($conexion,$consulta);
    
    
    //5. otra forma de hacerlo
    while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
        echo "<table><tr><td>";
        //6. mostrar el 1 registro q hay en el array
        echo $fila['CÓDIGOARTÍCULO']." </td><td> ";
        echo $fila['SECCIÓN']." </td><td> ";
        echo $fila['NOMBREARTÍCULO']." </td><td> ";
        echo $fila['PRECIO']." </td><td> ";
        echo $fila['IMPORTADO']." </td><td> ";
        echo $fila['PAÍSDEORIGEN']." </td></tr></table> <br><br>";
    }
    
    
    //9. cerrar la conexion
    mysqli_close($conexion);
    
    }


?>


</head>
<body>
     
<?php
    //almacenara el texto q va a buscar
    $mibusqueda=$_GET["buscar"];
    
    //$_SERVER[] <-indicandole cual va a ser la pag del servidor a la cual debe d llamar
    //PHP_SELF <- la pag q tiene q llamar es ella misma
    $mipag=$_SERVER["PHP_SELF"];
    
    if($mibusqueda!=NULL){
        ejecuta_consulta($mibusqueda);
    }
    else{
        echo("<form action='".$mipag."' method='GET'> 
                <label>Buscar: <input type='text' name='buscar'></label>
                <input type='submit' name='enviando' value='Enviar'>
             </form>");
    }  
    
?>

</body>
</html>