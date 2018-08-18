<?php
    
    require("Conexion.php");


    //----------------------------------
    //Clase ListarProductos heredara de la clase Conexion todos sus obj
    class ListarProductos extends Conexion{
        
        
        
        //Constructor de la clase
        public function __construct(){
            
            //llamar al constructor d la clase padre
            parent::__construct();//ejecutar implicitamente el constructor d la clase padre
        }
        
        //---------------------- CON POO Y LA LIBRERIA misqli---------
        //Metodo para Listar los productos
        public function get_productos(){
            //ejecuta el query 
            $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS');
            //almacenamos la consulta sql en un array asociativo
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            //devuelva ese array
            return $productos;
        }
        
        /*//Metodo para Listar los productos X PAIS
        public function get_productosParam($dato){
            //ejecuta el query 
            $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN = "'.$dato.'" ');
            //almacenamos la consulta sql en un array asociativo
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            //devuelva ese array
            return $productos;
        }
        //--------------------------------------------------------*/
        
        
        
        //------------------------ CON POO Y PDO  ------------------
        public function get_productosParam($dato){
            //almaceno en una variable la consulta
            $sql="SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN = '".$dato."' ";
            //preparamos el sql(devolvera un array) y lo almacenamos en sentencia
            $sentencia=$this->conexion_db->prepare($sql);
            //ejecutar la sentencia(q contiene un array)
            $sentencia->execute(array());
            //leer ese array y almacenarlo en una variable resultado
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
            $sentencia->closeCursor();//cierre la conexion
            
            return $resultado;//devuelve lo q hay en resultado
            
            $this->conexion_db=null;//cerramos conexiones y vaciamos la memoria 
            
        }
        
        
    }




?>

