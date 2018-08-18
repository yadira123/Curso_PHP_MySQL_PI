<?php

    //incluir el archivo conexion 
    require_once("Conexion.php");//error

    //llamar al metodo estatico para q conecte con la BD
    $base=Conexion::Conectar();
    //-----------------------------------PAGINACION----------
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
        
        $sql_total="SELECT * FROM DATOS_USUARIOS";
        
        $resultado=$base->prepare($sql_total);
        
        $resultado->execute(array());
        
        //-------
        $num_filas=$resultado->rowCount();//almacena num de filas q tenemos dentro del array resultado
        
        $total_pags=ceil($num_filas/$registros_x_pags);//total d pags q tendra la paginacion
    
    
        //----------------------------------------------------------


?>