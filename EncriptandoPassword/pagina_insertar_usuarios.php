<?php

	$usuario= $_POST["txtusu"];
	$contrasenia= $_POST["txtcontra"];
	
	//encriptamos contraseña del user con password_hash(infoaCifrar, mododeEncriptacion)
    //PASSWORD_DEFAULT<- la sal q va a generar lo haga de manera automatica
    //coste <- array("coste"=>numCoste)
    //12 numero de dureza
    $pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT,array("cost"=>12));
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'root');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO USUARIOS_PASS (USUARIO, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>