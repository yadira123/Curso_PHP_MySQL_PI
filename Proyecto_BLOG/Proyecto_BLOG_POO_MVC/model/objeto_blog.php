<?php
    //crear una clase para crear un objeto de tipo blog
    class objeto_blog{
        
        private $id;
        private $titulo;
        private $fecha;
        private $comentario;
        private $imagen;
        
        
        //metodos setters y getters
        public function getId(){
            return $this->id;
        }
        
        
        public function setId($id){
            $this->id=$id;  
        }
        
        
        public function getTitulo(){
            return $this->titulo;
        }     
        
        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }
        
        
        public function getFecha(){
            return $this->fecha;
        }     
        
        public function setFecha($fecha){
            $this->fecha=$fecha;
        }
        
        
        public function getComentario(){
            return $this->comentario;
        }     
        
        public function setComentario($comentario){
            $this->comentario=$comentario;
        }
        
        
        public function getImagen(){
            return $this->imagen;
        }     
        
        public function setImagen($imagen){
            $this->imagen=$imagen;
        }
        
        
    }



?>