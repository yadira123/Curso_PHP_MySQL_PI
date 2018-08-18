<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Concesionario</title>
</head>
<body>
   
<?php
    include("Concesionario.php");
    
    //haciendo referenci al campo static de la clase Compra_Vehiculo
    //Compra_Vehiculo::$descuento=6700;
        
    //llamar al metodo estatico
    Compra_Vehiculo::descuento_gobierno();
    
    $compra_antonio=new Compra_Vehiculo("compacto");
    
    $compra_antonio->climatizador();
    $compra_antonio->tapiceria_cuero("blanco");
    
    echo $compra_antonio->precio_final()."<br>";
    
    
    $compra_ana=new Compra_Vehiculo("compacto");
    $compra_ana->climatizador();
    $compra_ana->tapiceria_cuero("rojo");
    echo $compra_ana->precio_final();
    
?>
    
</body>
</html>