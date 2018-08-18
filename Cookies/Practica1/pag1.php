<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    //verificar si la cookie ha sido creada o no
    if(isset($_COOKIE["idioma_seleccionado"])){
        
        if($_COOKIE["idioma_seleccionado"]=="es"){
        header("Location:spanish.php");//redirige a spanish.php
        }
        //si tiene como valor en
        else if($_COOKIE["idioma_seleccionado"]=="en"){
            header("Location:english.php");
        }
        
    }
    
?>
   

    <table width="25%" align="center">
        <tr>
            <td colspan=2 align="center"><h1>Elige idioma</h1></td>
        </tr>
        <tr>
            <!--a rediriga a la pag crearCookie.php y le pase como parametro "es" o "en"-->
            <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/banderaSP.png" alt="" width="100"></a></td>
            <td align="center"><a href="creaCookie.php?idioma=en"><img src="img/ingles.png" alt="" width="100"></a></td>
        </tr>
    </table>
</body>
</html>