<?php

    class Personas_Model{
        
        private $db;//conexion
        private $personas;//
        
        
        
        //constructor de la clase
        public function __construct(){
            
            require_once("Model/Conexion.php");
            //db = claseConexion y llamo a su metodo conectar
            //db almacenará la conexion
            $this->db=Conexion::Conectar();
            
            //la variable productos va a ser un array el cual la usare para almacenar la lista de productos q me devuelva mi BD
            $this->personas=array();
            
        }
        
        
        //devolver productos
        public function get_Personas(){
            
            //incluir la pagina en donde esta las variables para establecer la paginacion
            require_once("paginacion.php");
            
            
            //almacenando un array de registros en $consulta 
            $consulta=$this->db->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde,$registros_x_pags");
            
            //recorrer cada vuelta del array(registro)
            //cada registro q devuelva $consulta se almacenará en $filas
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->personas[]=$filas;//pasando el contenido del array filas al array productos
                
            }
            
            return $this->personas;//devolverá el array con todos los registros q hay en su interior
        }
        
         
    }



?>