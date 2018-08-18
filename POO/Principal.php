<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POO</title>
</head>
<body>
   
<?php
    
    include("Vehiculos.php");
    
    $mazda=new Coche();
    $pegazo=new Camion();
    
    
    
    //¿como acceder a propiedades privadas?
    echo "El mazda tiene ".$mazda->get_Ruedas()." ruedas<br>";
    
    echo "El pegazo tiene ".$pegazo->get_Ruedas()." ruedas<br>";
    
    echo "El mazda tiene un motor de ".$mazda->get_Motor()." cc<br>";
    
    //$mazda->ruedas=5;//modificando el valor de la prop privada ruedas 
    
    //echo "El mazda tiene ".$mazda->ruedas." ruedas <br>";
    //echo "El pegazo tiene ".$pegazo->ruedas." ruedas<br>";
    
    
    
    /*
    $pegazo->frenar();
    
    $pegazo->establece_color("Pink","pegazo");
    $mazda->establece_color("Blue","mazda");
    
    $pegazo->arrancar();*/
    /*
    echo "El pegazo tiene un color ".$pegazo->color.", un motor de ".$pegazo->motor." y ".$pegazo->ruedas." ruedas<br>";
    
    echo "El mazda tiene un motor de ".$mazda->motor;*/
    
    /*
    //creando 3 ejemplares o instancias de la clase coche
    $renault=new Coche();//llamano al metodo contructor
    
    $mazda=new Coche();
    
    $seat=new Coche();
    
    //llamando al metodo establece_color
    $renault->establece_color("rojo","renault");
    $seat->establece_color("Azul","seat");
    
    
    //$mazda->girar();//estoy llamando a un metodo para q mi bjeto mazda haga la tarea de girar
    
    //echo $mazda->ruedas;//accediendo a una propiedad de mi clase coche*/
    
?>
    
</body>
</html>