<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bucle While</title>
</head>
<body>
<?php
    $var1=6;
    /*
    while($var1<=6){
        echo "Estamos ejecutando el codigo<br>";
        $var1++;
    }
    */
    do{
        echo "Estamos ejecutando el codigo<br>";
        $var1++;
    }
    while($var1<6);
    
    echo "Hemos salido del bucle";


?>    
</body>
</html>