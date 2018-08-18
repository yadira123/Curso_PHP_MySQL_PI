<style>

    .resultado{
        color: orangered;
        font-size: 1.5rem;
    }

</style>
   

<?php
                        
        function calcular($calculo){
            //si el usuario 
            //devuelve 0 si son iguales x eso usamos ! 
            if(!strcmp("Suma",$calculo) ){
                global $num1;
                global $num2;
                $resultado=$num1+$num2;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            if(!strcmp("Resta",$calculo) ){
                global $num1;
                global $num2;
                $resultado=$num1-$num2;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            if(!strcmp("Multiplicacion",$calculo) ){
                global $num1;
                global $num2;
                $resultado=$num1*$num2;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            if(!strcmp("Division",$calculo) ){
                global $num1;
                global $num2;
                $resultado=$num1/$num2;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            if(!strcmp("Modulo",$calculo) ){
                global $num1;
                global $num2;
                $resultado=$num1%$num2;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            if(!strcmp("Incremento",$calculo) ){
                global $num1;
                $num1++;
                $resultado=$num1;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            if(!strcmp("Decremento",$calculo) ){
                global $num1;
                $num1--;
                $resultado=$num1;
                echo "<p class='resultado'>El resultado es : $resultado</p>";
            }
            
        }
    
    
    
    ?>