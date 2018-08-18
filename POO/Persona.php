<?php

    //clase Persona
    class Persona{
        
        //atributos
        var $nombre;
        var $apellidos;
        var $fecha_nac;
        var $est_civil;
        
        
        function Persona($nom,$ape,$fec,$est){
            $this->nombre=$nom;
            $this->apellidos=$ape;
            $this->fecha_nac=$fec;
            $this->est_civil=$est;
            
            echo "Mi nombre completo es ".$nom." ".$this->apellidos." naci el ".$this->fecha_nac." y soy ".$this->est_civil."<br>";
        }
        
        
        function obtener_edad(){
            $hoy=date("Y/m/d");
            $res=($hoy-$this->fecha_nac);
            echo "Usted tiene ".$res." años<br>";
        }
        
    }


?>
