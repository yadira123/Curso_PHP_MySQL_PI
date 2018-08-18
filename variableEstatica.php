<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables estaticas</title>
</head>
<body>
    
<?php
    
    //funcion para incrementar una variable 
    function incrementaVAriable(){
        static $contador=0;
        $contador++;
        echo $contador." <br>";
    }
    
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();    

?>
</body>
</html>