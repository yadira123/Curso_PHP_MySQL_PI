<?php
    
    //referencia a los datos d configuracion
    require("config.php");



    /*//------------UTILIZANDO POO Y LA LIBRERIA mysqli--------
    //clase Conexion(va a permitir conectar con la Bd)
    class Conexion{
        
        protected $conexion_db;
        
        
        //constructor de la clase(conectará con la BD)
        public function Conexion(){
            //estableciendo la conexion 
            $this->conexion_db=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            
            //q hacer en caso la conexion no tenga exito
            if($this->conexion_db->connect_errno){
                echo "Fallo al conectar con MySQL: ".$this->conexion_db->connect_error ;//imprima el error
                return;
            }
            //establecer el juego d caracteres a usar
            $this->conexion_db->set_charset(DB_CHARSET);
        }  
    }*/


    
    //------------ UTILIZANDO PDO ---------------
    class Conexion{
        
        protected $conexion_db;
        
        
        //constructor de la clase(conectará con la BD)
        public function __construct(){
        
            try{
                //especificando la conexion
                $this->conexion_db=new PDO('mysql:host=localhost:3308; dbname=pruebas','root','root');
                //estableciendo los atributos de conexion
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //UTILIZAR CODIFICACION UTF8
                $this->conexion_db->exec("SET CHARACTER SET utf8");
                                
                return $this->conexion_db;//devuelve la conexion
                
            }
            catch(Exception $e){
                echo "la linea de error es: ".$e->getLine();//muetsra linea del error
            }
        
        }
        
        
    }



?>