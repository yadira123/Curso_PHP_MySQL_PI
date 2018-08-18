<?php

    $busqueda=$_GET["txtbuscar"];
    

    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BD";
        exit();//salir
    }
    
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    mysqli_set_charset($conexion,"utf-8");
    
    
    $query="select * from PRODUCTOS where NOMBREARTÍCULO like '%$busqueda%'";
    
    $resultado=mysqli_query($conexion,$query);
    
    
    while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
        //echo "<table><tr><td>";
        
        echo "<form action='Actualizar.php' method='GET'>";
        echo "<input type='text' name='c_art'  value='".$fila['CÓDIGOARTÍCULO']."'><br>";
        echo "<input type='text' name='seccion'  value='".$fila['SECCIÓN']."'><br>";
        echo "<input type='text' name='n_art'  value='".$fila['NOMBREARTÍCULO']."'><br>";
        echo "<input type='text' name='precio'  value='".$fila['PRECIO']."'><br>";
        echo "<input type='text' name='fecha'  value='".$fila['FECHA']."'><br>";
        echo "<input type='text' name='importado'  value='".$fila['IMPORTADO']."'><br>";
        echo "<input type='text' name='p_orig'  value='".$fila['PAÍSDEORIGEN']."'><br>";
        echo "<input type='submit' value='Actualizar'>";
        echo "</form>";

    }
    
    
    //9. cerrar la conexion
    mysqli_close($conexion);



?>