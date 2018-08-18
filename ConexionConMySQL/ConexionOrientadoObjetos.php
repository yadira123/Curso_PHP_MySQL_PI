<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conexion con Mysqli Orientado a Objetos</title>
</head>
<body>
   
<?php
  
    //----------Programacion OO
    //1. creando una variable donde almacenara la conexion a la BD
    $conexion=new mysqli("localhost","root","root","pruebas");
    
    //2. determinar q va a suceder si no tenemos exito con la conexion
    //si la conexion falla(connect_errno) y q muestre el codigo de error
    if($conexion->connect_errno){
        echo "Falló la conexion ".$conexion->connect_errno;
    }
    
    //mysqli_set_charset($conexion,"utf8");
    
    //utilizando la forma OO
    //el obj $conexion llamar a su metodo(set_Charset("juego de caracteres))
    $conexion->set_charset("utf8");
    
    //almacenar la instruccion sql
    $sql="SELECT * FROM PRODUCTOS";
    
    //$resultado=mysqli_query($conexion,$sql);
    //forma OO
    //la variable $res va a ser = a mi obj $conexion-> con su metodo query($variableconsulta)
    $resultados=$conexion->query($sql);
    
    //si la consulta sql falla
    if($conexion->errno){
        die($conexion->errno);//mate el error
    }
    
    //recorrer el resultado
    /*while($fila=mysqli_fetch_array($sql,MYSQL_ASSOC)){   
    }*/
    /*//con la forma OO
    while($fila=$resultados->fetch_assoc()){
        echo "<table><tr><td>";
        //6. mostrar el 1 registro q hay en el array
        echo $fila['CÓDIGOARTÍCULO']." </td><td> ";
        echo $fila['SECCIÓN']." </td><td> ";
        echo $fila['NOMBREARTÍCULO']." </td><td> ";
        echo $fila['PRECIO']." </td><td> ";
        echo $fila['IMPORTADO']." </td><td> ";
        echo $fila['PAÍSDEORIGEN']." </td></tr></table> <br><br>";
    }*/
    
    //con la forma OO x indice
    while($fila=$resultados->fetch_array()){
        echo "<table><tr><td>";
        //6. mostrar el 1 registro q hay en el array
        echo $fila[0]." </td><td> ";
        echo $fila[1]." </td><td> ";
        echo $fila[2]." </td><td> ";
        echo $fila[3]." </td><td> ";
        echo $fila[4]." </td><td> ";
        echo $fila[5]." </td></tr></table> <br><br>";
    }
    
    //mysqli_close($conexion);
    //cerrar la conexion OO
    $conexion->close();//ejecutamos el metodo close del obj conexion
    
?>
    
</body>
</html>