<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POO III</title>
</head>
<body>
<?php
    
    include("Persona.php");
    
    $persona1=new Persona("Juanita","sanchez","1998/01/21","soltera");
    
    
    
    echo $persona1->obtener_edad();
    
?>
</body>
</html>