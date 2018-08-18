<?php
    
    try{
        //1
        $login=htmlentities(addslashes($_POST["usuario"]));
        $password=htmlentities(addslashes($_POST["password"]));
        
        //contador para saber si el user q sea introducido esta o no en la bd
        $contador=0;
        
        //2. conexion con la bd
        $base=new PDO("mysql:host=localhost:3308;dbname=pruebas","root","root");
        //3.establesco los atributos d conexion de turno
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //4.
        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIO= :login";
        
        //5. preparar una consulta preparada con marcadores
        $resultado=$base->prepare($sql);
        
        //6. en el marcador tiene q introdcir lo q el user haya introducido en la casilla de user
        $resultado->execute(array(":login"=>$login));
        //7.recorrer el recorset(resultado)
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "Usuario: ".$registro['USUARIO']." Contraseña: ".$registro['PASSWORD']."<br>";
            
            //password_verify(loqhayenPass->($pass), HashcontraCifrada->($registro['PASSWORD'])))
            //password_verify devuelve true si ambas son = y false si no son =
            if(password_verify($password,$registro['PASSWORD'])){
                $contador++;
            }
        }
        
        if($contador>0){
            echo "Usuario Registrado";
        }
        else{
            echo "Usuario NO Registrado";
        }
        
        $resultado->closeCursor();
    
    }catch(Exception $e){
        die("Error: " . $e->getMessage() );
    }finally{
		
		$base=null;
		
		
	}
        
        
?>