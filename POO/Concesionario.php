<?php

    class Compra_Vehiculo{
        //atributos
        private $precio_base;
        //variable estatica
        private static $descuento=0;
        
        
        
        //Constructor con parametro
        function Compra_Vehiculo($gama){
            
            if($gama=="urbano"){
                $this->precio_base=10000;
            }
            else if($gama=="compacto"){
                $this->precio_base=20000;
            }
            else if($gama=="berlina"){
                $this->precio_base=30000;
            }
        }//--fin del constructor
        
        
        
        function climatizador(){
            $this->precio_base+=2000;//incrementa el precio_base
        }
        
        function navegador_gps(){
            $this->precio_base+=2500;
        }
        
        function tapiceria_cuero($color){
            if($color=="blanco"){
                $this->precio_base+=3000;
            }
            else if($color=="beige"){
                $this->precio_base+=3500;
            }
            else{
                $this->precio_base+=5000;
            }
        }
        
        //creando metodo estatico
        static function descuento_gobierno(){
            
            if(date("m-d-y")>"10-01-17"){
                self::$descuento=4500;
            }
        }
        
        
        function precio_final(){
            $valor_final=$this->precio_base-self::$descuento;
            return $valor_final;
        }
        
    }


?>