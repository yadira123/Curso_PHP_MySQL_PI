<?php
   //creando clase Coche
    class Coche{
        //atributos 
        protected $ruedas;
        var $color;
        protected $motor;
        
        //contructor de la clase(inicializa la clase)
        function Coche(){
            $this->ruedas=4;//nuestro coche en su estado inciial va a tener 4 ruedas
            $this->color="";
            $this->motor=1600;
        }
        
        //-----------GETTERS Y SETTERS----------
        function get_Motor(){
            return $this->motor;
        }
        
        function get_Ruedas(){
            return $this->ruedas;
        }
        
        
        
        
        //metodos en php son funciones
        function arrancar(){
            echo "Estoy arrancando<br>";
        }
        
        function girar(){
            echo "Estoy girando<br>";
        }
        
        function frenar(){
            
            echo "Estoy frenado<br>";
        }    
        
        /*//esta funcion asignará a la prop nombre y color los valores q se le pase como parametros
        function establece_color($color_coche,$nombre_coche){
            
            $this->color=$color_coche;
            
            echo "El color de ".$nombre_coche." es ".$this->color."<br>";
        }*/
        
        function set_establece_color($color_coche,$nombre_coche){
            
            $this->color=$color_coche;
            
            echo "El color de ".$nombre_coche." es ".$this->color."<br>";
        }
        
    }//fin de la clase Coche





    //--------------------------------------------------------
    //creando clase Camion q heredara todos los objetos de la clase Coche
    class Camion extends Coche{
        
        
        //contructor sin parametros de la clase(inicializa la clase)
        function Camion(){
            $this->ruedas=8;
            $this->color="gris";
            $this->motor=2600;
        }
        
        //sobreescritura de metodo(machacar el metodo q ya heredamos de coche)      
        function establece_color($color_camion,$nombre_camion){
            
            $this->color=$color_camion;
            
            echo "El color de ".$nombre_camion." es ".$this->color."<br>";
        }
        
        function arrancar(){
            parent::arrancar();
            
            echo "Camion arrancado<br>";
            echo "yeeee!!";
        }
        
        
    }

?>