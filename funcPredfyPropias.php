<?php
    /*
    $cadena="HOLA SOY DORA";

    $res=strtolower($cadena);
    
    echo $res."<br>";
    echo(strtolower($cadena));
    */
    /*
    function suma($num1,$num2){
        
        $res=$num1+$num2;
        
        return $res;
    }

    echo(suma(12,10));
    */

    //funcion q convierte la primera letra de todas las palabras a mayuscula
    function frase_mayus($frase,$conversion=true){
        $frase=strtolower($frase);//convertimos todo la frase a minusculas
        
        if($conversion==true){
            $res=ucwords($frase);//convierte la prim letra de cada palabra a mayus
        }
        else{
             $res=strtoupper($frase);//convierte la frase a mayuscula
        }
        return $res;//devuelve lo q hay almacenado en $res
    }


    echo(frase_mayus("hola soy dora la exploradora"));

?>