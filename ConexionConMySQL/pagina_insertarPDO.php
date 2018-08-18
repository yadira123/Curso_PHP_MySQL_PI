<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    
    $codi=$_POST["c_art"];
    $secc=$_POST["seccion"];
    $nart=$_POST["n_art"];
    $prec=$_POST["precio"];
    $fech=$_POST["fecha"];
    $impo=$_POST["importado"];
    $pais=$_POST["p_orig"];
  
    try{
        //1.establecer la conexion
        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','root');
        
        
        //
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //trabaje con utf8
        $base->exec("SET CHARACTER SET utf8");
        
        //generar la consulta
        //:n_art<- nombre del marcador
        $sql="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN) VALUES(:c_art,:seccion,:n_art,:precio,:fecha,:importado,:p_orig)";
        //el ob $base llama a su metodo prepare(recibe el sql)<- y este retorna un obj tipo PDOpreparedStatement y es almacenado en mi variable pdostatement. 
        $pdostatement=$base->prepare($sql);
        
        //":n_art"=>lo q hay en busqueda
        $pdostatement->execute(array(":c_art"=>$codi,":seccion"=>$secc,":n_art"=>$nart,":precio"=>$prec,":fecha"=>$fech,":importado"=>$impo,"p_orig"=>$pais));
        
        
        /*while($registro=$pdostatement->fetch(PDO::FETCH_ASSOC)){
            echo "Nombre: ".$registro['NOMBREARTÍCULO'].
                 " Seccion: ".$registro['SECCIÓN'].
                 " Precio: ".$registro['PRECIO'].
                 " Pais de Origen: ".$registro['PAÍSDEORIGEN']."<br>";
        }*/
        echo "Se insertó el registro";
        
        $pdostatement->closeCursor();//cerrar elobj pdo..
        
        
    }catch(Exception $e) {
        
        die('Error: '.$e->GetMessage());//matar y mostrar el error
    }finally{
        $base=null;
    }
    
?>
</body>
</html>