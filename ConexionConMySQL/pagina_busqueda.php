<?php


    //1.almacenar en la variable lo q pase en el cuadro d texto
    $busqueda=$_GET["txtbuscar"];

    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    //9.si el nombre d la bd es incorrecta muestre este msj
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    //8.para el juego de caracteres de los (registros) evitar errores
    mysqli_set_charset($conexion,"utf8");
    
    
    //probando inyeccion sql
    $query="select * from PRODUCTOS where NOMBREARTÍCULO like '$busqueda'";
    echo "$query <br><br>";

    //3. almacenar en una variable la consulta q le queremos hacer a la bd 
    //$query="select * from PRODUCTOS where NOMBREARTÍCULO like '%$busqueda%'";
    
    //4. ejecutar la consulta
    $resultado=mysqli_query($conexion,$query);
    
    
    /*//5. mysqli_fetch_row<- va  mirando fila x fila lo q hay almacenado en esta tabla y lo almacena en un array
    while($fila=mysqli_fetch_row($resultado)){
        
        echo "<table><tr><td>";
        //6. mostrar el 1 registro q hay en el array
        echo $fila[0]." </td><td> ";
        echo $fila[1]." </td><td> ";
        echo $fila[2]." </td><td> ";
        echo $fila[3]." </td><td> ";
        echo $fila[4]." </td><td> ";
        echo $fila[5]." </td><td> ";
        echo $fila[6]." </td></tr></table> <br><br>";
    }*/
    
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



?>