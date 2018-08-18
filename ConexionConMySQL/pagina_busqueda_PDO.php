<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="" method="get">
        <label for="buscar">Buscar:</label>
        <input type="text" name="buscar">        
        <input type="submit" value="Dale!">
    </form>


<?php
    
    $busqueda=$_GET["buscar"];
    
  
    try{
        //1.establecer la conexion
        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','root');
        
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //trabaje con utf8
        $base->exec("SET CHARACTER SET utf8");
        
        //generar la consulta
        $sql="SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO=?";
        //el ob $base llama a su metodo prepare(recibe el sql)<- y este retorna un obj tipo PDOpreparedStatement y es almacenado en mi variable pdostatement. 
        $pdostatement=$base->prepare($sql);
        
        $pdostatement->execute(array($busqueda));
        
        
        while($registro=$pdostatement->fetch(PDO::FETCH_ASSOC)){
            echo "Nombre: ".$registro['NOMBREARTÍCULO'].
                 " Seccion: ".$registro['SECCIÓN'].
                 " Precio: ".$registro['PRECIO'].
                 " Pais de Origen: ".$registro['PAÍSDEORIGEN']."<br>";
        }
        
        $pdostatement->closeCursor();//cerrar elobj pdo..
        
        
    }catch(Exception $e) {
        
        die('Error: '.$e->GetMessage());//matar y mostrar el error
    }finally{
        $base=null;
    }
    
?>
</body>
</html>