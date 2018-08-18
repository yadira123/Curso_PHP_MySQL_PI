<?php
    
    /*
    //funcion con paso de parametro por referencia 
    //no solo se incrementara el valor de valor1 sino tmb el valor de la variable q fue pasado como parametro al llamar la funcion 
    function incrementa(&$valor1){
        
        $valor1++;
        return $valor1;
    }

    
    $numero=5;


    echo(incrementa($numero)."<br>");

    echo $numero;
    */
    
    //funciones q modifican strings
    function cambia_mayus(&$param){
        
        $param=strtolower($param);
        $param=ucwords($param);
        
        return $param;        
    }
        
    $cadena="hOlA mUnDo";
    
    echo (cambia_mayus($cadena)."<br>");
    echo $cadena;

    
?>