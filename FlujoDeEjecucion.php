<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flujo de ejecucion en PHP</title>
</head>
<body>
   
<?php
  
    include ("proporcionaDatos.php");
    
    dameDatos();
	
    echo "<p>Este es el primer mensaje</p>";
    
    echo "<p>Este es el segundo  mensaje</p>";
	
    dameDatos();
?>
</body>
</html>