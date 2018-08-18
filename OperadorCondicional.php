<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trabajo con Operadores</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}
</style>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

    <form action="" method="post" name="datos_usuario" id="datos_usuario">
      <table width="15%" align="center">
        <tr>
          <td>Nombre:</td>
          <td><label for="nombre_usuario"></label>
          <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
        </tr>
        <tr>
          <td>Contraseña:</td>
          <td><label for="contra_usuario"></label>
          <input type="text" name="contra_usuario" id="contra_usuario"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
        </tr>
      </table>
    </form>
    
<?php
    
    if(isset($_POST["enviando"])){
        $contra=$_POST["contra_usuario"];
        $nombre=$_POST["nombre_usuario"];
        
        switch (true){
                
            case $nombre=="Juan" && $contra=="1234":
                echo "Usuario autorizado. Hola Juan";
                break;
            case $nombre=="Maria" && $contra=="123":
                echo "Usuario autorizado. Hola María";
                break;
            case $nombre=="Pedro" && $contra=="1234":
                echo "Usuario autorizado. Hola Pedro";
                break;
            default:
                echo "Usuario no autorizado";
        }
    }
    
    
    
    /*
    if(isset($_POST["enviando"])){
        $contra=$_POST["contra_usuario"];
        $nombre=$_POST["nombre_usuario"];
        
        $res= $nombre=="Juan" && $contra=="1234" ? "Puedes ingresar" : "No puedes Ingresar";
        
        echo $res;
    }
    */
    
?>
    
    
</body>
</html>