<?php
    
    include_once("objeto_blog.php");

    class manejo_objetos{
        
        //estableciendo conexion con la BD
        private $conexion;
        
        
        //constructor d la clase
        public function __construct($conexion){
            
            $this->setConexion($conexion);
            
            
        }
        
        
        public function setConexion(PDO $conexion){
            $this->conexion=$conexion;
        }
        
        
        //obtener las entradas dek blog
        public function getContenidoPorFecha(){
            
            $matriz=array();//
            
            //pasar de registro a registro la natriz 
            $contador=0;
            
            //instruccion q nos permite ver entradas d blog x fecha
            $resultado=$this->conexion->query("SELECT * FROM CONTENIDO ORDER BY FECHA DESC");
            
            //recorrer el recorset $resultado
            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                
                $blog=new objeto_blog();
                
                $blog->setId($registro["ID"]);
                $blog->setTitulo($registro["TITULO"]);
                $blog->setFecha($registro["FECHA"]);
                $blog->setComentario($registro["COMENTARIO"]);
                $blog->setImagen($registro["IMAGEN"]);
                
                //almacenar dentro de matriz los objetos creados
                $matriz[$contador]=$blog;
                
                $contador++;
                
            }
            
            return $matriz;
            
        }
        
        
        
        public function insertaContenido(objeto_blog $blog){
            $sql="INSERT INTO CONTENIDO (TITULO,FECHA,COMENTARIO,IMAGEN) values('".$blog->getTitulo()."','".$blog->getFecha()."','".$blog->getComentario()."','".$blog->getImagen()."')";
            
            $this->conexion->exec($sql);
        }
        
        
        
    }


?>