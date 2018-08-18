<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ambito de las Variables en PHP</title>
</head>
<body>
<?php
    
    //declarando variables de tipo string
    $nombre="Juan";
    
    
    function dameNombre(){
        global $nombre;
        $nombre="María";
    }
    
    //lamamos la funcion
    dameNombre();
    
    
    //imprimir la variable
    echo $nombre;
      
?>
    
</body>
</html>