<?php
    //array multidimensional
    $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                    "citrico"=>"mandarina",
                                    "otros"=>"manzana"),
                     
                     "leche"=>array("animal"=>"vaca",
                                    "vegetal"=>"coco"),
                     
                     "carne"=>array("vacuno"=>"lomo",
                                    "porcino"=>"pata")
                    );
    /*//recorrer un elemento especifico del array
    echo $alimentos["carne"]["porcino"];*/

    /*//recorrer todos los elementos de un array multi con list()
    //$clave_alim <- nombre q identifica el 1er elemento de mi array osea(fruta,leche y carne)
    //$val_alim <- nombre q identifica a la 2da dimension del array
    foreach($alimentos as $clave_alim=>$alim){
        //imprime (fruta,leche y carne)
        echo "$clave_alim: <br>";
        
        
        //$clave hace referencia al nombre del subarray dentro d cada array osea(tropical, animal, porcino, etc)
        //$valor hace referencia al valor d cada $clave osea(omo, wiwi, etc)
        //list(lista ($clave, $valor)=each(mientras haiga elementos en el array $alim)
        while(list($clave,$valor)=each($alim)){
            echo "$clave = $valor <br>";
        }
        
        echo "<br>";
    }*/
    

        //otra forma de hacerlo con 2 for each
    foreach ($alimentos as $clave_alimen => $alim) {
        echo "$clave_alimen <br>";
        
        foreach ($alim as $clave=>$valor) {
            echo "$clave  :  $valor <br>" ;
       }
       //salto después de cada impresión
       echo "<br><br>";
       
    }
    
    //recorrer con la funcion var_dump
    //echo var_dump($alimentos);



    
?>