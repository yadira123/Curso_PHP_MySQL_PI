<?php
    /*
    for($i=1;$i<=20;$i+=2){
        //codigo a ejecutar
        //echo "<p>Hemos entrado en el bucle</p>";
        echo $i."<br>";
    }*/
    /*
    for($i=0;$i<=10;$i++){
        echo "9 x $i = " .(9*$i). "<br>";
    }

    echo "hemos salido del bucle";
    */

    for($i=10;$i>=-10;$i--){
        
        if($i==0){
            echo "No se puede dividir por cero";
            continue;//n esta vuelta la instruccion de abajo no se realize y q continue con la otra vuelta de bucle y continue con el -1
        }
        echo "9 / $i = ".(9/$i)."<br>";
    }
    echo "Hemos salido del bucle";
?>