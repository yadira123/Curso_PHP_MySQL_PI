<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<?php
    
    try{
        
        $base=new PDO("mysql:host=localhost:3308;dbname=pruebas","root","root");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");
        
        //-------------
        $registros_x_pags=3;//numero de registros q se mostrara x paginacion
        
        //si ha hecho click en el link de la paginacion ejm:(1,2,3,...)
        if(isset($_GET["pagina"])){
            
            if($_GET["pagina"]==1){//si la pag es =1
                
                header("Location:index.php");//recarga esta pag
            }else{
                $pagina=$_GET["pagina"];//guardame lo q aiga ahi ejm: 1,2,3 o 4
            }
        }else{//si no ha hecho click
            $pagina=1;
        }
        
        
        $empezar_desde=($pagina-1)*$registros_x_pags;//almacena en num d paginacion en donde nos encontramos
        //---------
        
        $sql_total="SELECT NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES'";
        
        $resultado=$base->prepare($sql_total);
        
        $resultado->execute(array());
        
        //-------
        $num_filas=$resultado->rowCount();//almacena num de filas q tenemos dentro del array resultado
        
        $total_pags=ceil($num_filas/$registros_x_pags);//almacena el num de paginacion q tendra nuestra pag ejm: ceil(10/3)=4
        
        //------------------
        echo "Num de registros de la consulta: ".$num_filas."<br>";
        
        echo "Mostramos ".$registros_x_pags." registros x pagina"."<br>";
        
        echo "Mostrando la página ".$pagina." de ".$total_pags."<br>";
        //------------------
       
        
        $resultado->closeCursor();
        
        
        $sql_limite="SELECT NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES' LIMIT $empezar_desde,$registros_x_pags";
        
        $resultado=$base->prepare($sql_limite);
        
        $resultado->execute(array());
        
        //recorrer el array
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        
            echo "Nombre Articulo: ".$registro["NOMBREARTÍCULO"].
                 " Seccion: ".$registro["SECCIÓN"].
                 " Precio: ".$registro["PRECIO"].
                 " Pais de Origen: ".$registro["PAÍSDEORIGEN"]."<br>";         
        }
    }catch(Exception $e){
        echo "Linea de error: ".$e->getLine();
    }
    
    
    
    //-------------------   paginacion  -------------------
    //recorrer el num de paginaciones a mostrar
    for($i=1;$i<=$total_pags;$i++){
        
        echo "<a href='?pagina=".$i."'> " .$i. " </a>";//muestra el num d paginaciones y almacena en el parametro de pagina la paginacion en donde se encuentra
    }

?>
</body>
</html>