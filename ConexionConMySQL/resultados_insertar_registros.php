
<?php
    
    $c_art=$_GET["c_art"];
    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET["importado"];
    $p_orig=$_GET["p_orig"];
    
    require("Conexion.php");
    
    $conexion=mysqli_connect($db_host,$db_user,$db_password);
    
    if(mysqli_connect_errno()){
        echo "fallo al conectar con la BD";
        exit();
    }
    
    mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la BD");
    
    mysqli_set_charset($conexion,"utf8");
    
    //1 PASO
    $sql="INSERT INTO PRODUCTOS(CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍDEORIGEN) VALUES(?,?,?,?,?,?,?)";
    
    //2 PASO
    $resultado=mysqli_prepare($conexion,$sql);
    
    //3 PASO s <- string 7s<= 7 campos
    //si el 4 campo fuese int deberiamos sustituirlo x una i y si el 5 fuese double x una (d) ejm: "sssidss"
    $ok=mysqli_stmt_bind_param($resultado,"sssssss",$c_art,$sec,$nom,$pre,$fec,$imp,$p_orig);
    
    //4 PASO
    $ok=mysqli_stmt_execute($resultado);
    
    //5
    if($ok==false){
        echo "error al ejecutar la consulta";
    }
    else{
       //6
        //$ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
        
        echo "Se ha agregado un nuevo Articulo";
        
        /*while(mysqli_stmt_fetch($resultado)){
            echo $codigo." | ".$seccion." | ".$precio." | ".$pais."<br>";
        }*/
        
        mysqli_stmt_close($resultado);
    }
    
?>
