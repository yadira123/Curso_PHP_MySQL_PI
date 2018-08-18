<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
</head>
<body>
<?php
    $var1="casa";
    $var2="CASA";
    
    //strcmp=compara teniendo en cuenta mayus y minus
    //strcasecmp=compara sin imporarle las mayus y minus
    $res=strcasecmp($var1,$var2);//devuelve 1(si no son iguales) y 0(si son iguales)
    
    if($res){
        echo "No coinciden";
    }else{
        echo "Coinciden";
    }
        
    
    
?>
</body>
</html>