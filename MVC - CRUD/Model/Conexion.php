<?php
    
    //clase
    class Conexion{
        
        
        //metodo estatico
        public static function Conectar(){
            
            try{
                
                $conexion=new PDO("mysql:host=localhost:3308;dbname=pruebas","root","root");
                
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $conexion->exec("SET CHARACTER SET utf8");
                
            }catch(Exception $e){
                die("Error: ".$e->getMessage());
                echo "Linea del error: ".$e->getLine();
            }
            
            return $conexion;
        }
        
    }


?>