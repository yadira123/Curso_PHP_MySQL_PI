<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conexion con PDO</title>
</head>
<body>

<?php
    
    try{
    //establecer la conexion con la bd mediante el constructor de la clase PDO('host;nameBD', 'user', 'pass');
    $base=new PDO('mysql:host=localhost; dbname=pruebas','root','root');
        
    echo "Conexion OK";
    
    }catch(Exception $e) {
        
        die('Error: '.$e->GetMessage());//matar y mostrar el error
    }
    finally{
        $base=null;
    }
      
    

?>
</body>
</html>