<?php
    
    $var1=true;
    $var2=false;
    
    
    //&& tiene prioridad respecto al = 
    //$res=$var1 && $var2;//para q se cumpla ambas tienen q ser true
    $res=$var1 and $var2;//

    if($res==true){
        echo "correcto";
    }
    else{
        echo "incorrecto";
    }
    

?>