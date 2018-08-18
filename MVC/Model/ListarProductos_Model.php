<?php

    class ListarProductos_Model{
        
        private $db;//conexion
        private $productos;//
        
        
        
        //constructor de la clase
        public function __construct(){
            
            require_once("Model/Conexion.php");
            //db igual a la claseConexion y llamo a su metodo conectar
            //db almacenará la conexion
            $this->db=Conexion::Conectar();
            
            //la variable productos va a ser un array el cual la usare para almacenar la lista de productos q me devuelva mi BD
            $this->productos=array();
            
        }
        
        
        //devolver productos
        public function get_Productos(){
            //almacenando un array de registros en $consulta 
            $consulta=$this->db->query("SELECT * FROM PRODUCTOS");
            
            //recorrer cada vuelta del array(registro)
            //cada registro q devuelva $consulta se almacenará en $filas
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->productos[]=$filas;//pasando el contenido del array filas al array productos
                
                
            }
            
            return $this->productos;//devolverá el array con todos los registros q hay en su interior
        }
        
         
    }



?>