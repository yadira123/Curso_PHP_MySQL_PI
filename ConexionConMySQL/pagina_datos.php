<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inyectando SQL</title>
</head>
<body>
<?php
    

    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    //evitar inyeccion sql
    //1.almacenar en la variable lo q pase en el cuadro d texto
    $usu= mysqli_real_escape_string($conexion,$_GET["usuario"]);
    $con= mysqli_real_escape_string($conexion,$_GET["contrasena"]);
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    //9.si el nombre d la bd es incorrecta muestre este msj
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    //8.para el juego de caracteres de los (registros) evitar errores
    mysqli_set_charset($conexion,"utf8");
    
    
    /*//probando inyeccion sql 1
    $query="select * from usuarios where usuario='$usu' and contra='$con'";
    echo "$query <br><br>";
*/
    //probando inyeccion sql 2 mas peligroso
    $query="DELETE FROM USUARIOS where usuario='$usu' and contra='$con'";
    echo "$query <br><br>";

    
    /*//4. ejecutar la consulta
    $resultado=mysqli_query($conexion,$query);*/
    
    
    /*//5. otra forma de hacerlo
    while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
         //INYECCION sql 1
        echo "Bienvenido $usu <br> Estos son tus datos: <br>";
        echo "<table><tr><td>";
        //6. mostrar el 1 registro q hay en el array
        echo $fila['usuario']." </td><td> ";
        echo $fila['contra']." </td><td> ";
        echo $fila['tfno']." </td><td> ";
        echo $fila['direccion']." </td></tr></table> <br><br>";
        
    }*/
    
    /*//inyeccion SQL 2
    if(mysqli_query($conexion,$query)){
        echo "Baja procesada";
    }*/
    
    mysqli_query($conexion,$query);//ejecutando la consulta
    if(mysqli_affected_rows($conexion)>0){
        echo "Baja procesada";
    }
    else{
        echo "No se ha encontrado usuarios a borrar";
    }
    
    
    
    //9. cerrar la conexion
    mysqli_close($conexion);


?>
</body>
</html>