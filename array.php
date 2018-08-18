<?php
    //creando array indexado
    /*$semana[]="Lunes";
    
    $semana[]="Martes";
    
    $semana[]="Miercoles";*/
    
    $semana=["Lunes","Martes","Miercoles"];
    

    //$semana=array("Lunes","Martes","Miercoles");

    echo $semana[0];

	echo "<br><br>";



    //array asociativo

    $datos=array("Nombre"=>"Juan",
                "Apellido"=>"Gomez",
                 "Edad"=>12
                );
    //$datos=10;
    //echo $datos["Apellido"];
    
    //comprobando si es un arrayy o  no
    if(is_array($datos)){
        echo "Es un array";
    }
    else{
        echo "No es un array";
    }


	echo "<br><br>";



    //recorrer arrays asociativos
    $datos=array("Nombre"=>"Juan",
                "Apellido"=>"Gomez",
                 "Edad"=>12
                );
    //Agregar un elemento mas al array asociativo
    $datos["Pais"]="Peru";

    foreach($datos as $clave=>$valor){
        echo "a $clave le corresponde $valor <br>";//
        
    }


	echo "<br><br>";


    //recorrer un array indexado
    $semana2[]="Lunes";    
    $semana2[]="Martes";
    $semana2[]="Miercoles";
    $semana2[]="Jueves";
    //Agregar un elemento mas al array indexado
    $semana2[]="Viernes";

    for($i=0;$i<count($semana2);$i++){
        echo $semana2[$i]."<br>";
    }
    

	echo "<br><br>";


    //Ordenar los elementos de un Array
   /* $semana=array("Lunes","Martes","Miercoles","Jueves","Viernes");
    
    //ordenar los elementos alfabeticamente
    sort($semana);

    for($i=0;$i<count($semana);$i++){
        echo $semana[$i]."<br>";
    }*/


    
?>