<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    /*//-----------------funciones PREDEFINIDAS DEL LENGUAJE PHP
    $num1=rand(10,15);
    
    $num2=pow(5,2);
    
    $num3=2.456312;
    
    echo "el numero es: ".$num1 ."<br>";
    echo "el resulado es: $num2 <br>";
    echo "el num redondeado con 3 decimales es: ".round($num3,2);
    */
    
    //----------------------------CASTING   --------------------
    //esto es casting implicito(lo hace PHP)
    $num="5";//hasta aqui PHP toma el tipo d esta variable como String
    $num+=2;//PHP lo toma ahora como un tipo entero
    $num+=5.75;//PHP ahora lo toma como un tipo float
    
    //esto es un casting explitio
    $res=(int) $num;
    
    echo "El numero es: ".$num."<br>";
    echo $res;
        
    ?>
    
</body>
</html>