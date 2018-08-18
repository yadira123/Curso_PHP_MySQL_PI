<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trabajando con Operadores</title>
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
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
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
    //si el usuario a presionado el boton enviando
    if(isset($_POST["enviando"])){
        $edad=$_POST["edad_usuario"];//almacena en la variable  edad lo q el usuario haiga escrito en la caja de texto edad_usuario
        
        $nombre=$_POST["nombre_usuario"];
        
        /*
        switch ($nombre){
                
            case "Juan":
                echo "Usuario autorizado. Hola Juan";
                break;
            case "Maria":
                echo "Usuario autorizado. Hola María";
                break;
            case "Pedro":
                echo "Usuario autorizado. Hola Pedro";
                break;
            default:
                echo "Usuario no autorizado";  
        }
        */
        
        switch (true){
                
            case $edad<=17 && $edad>=1:
                echo "eres menor de edad";
                break;
            case $edad<=40 && $edad>=18:
                echo "Eres joven";
                break;
            case $edad<=150 && $edad>=41:
                echo "Eres maduro";
                break;
            default:
                echo "edad no valida";
                
        }
        
        
        
        
        
        
        /*
        if($edad<=17 && $edad>=1){
            echo "eres menor de edad";
        }
        else if($edad<=40 && $edad>=18){
            echo "Eres joven";
        }
        else if($edad<=150 && $edad>=41){
            echo "Eres maduro";
        }
        else{
            echo "edad no valida";
        }
        */
        
        /*
        //----------- operador TERNIARIO ------------
        $resultado = $edad<18 ? "Eres menor de edad. No puedes acceder" : "Puedes acceder";
        echo $resultado;
        */
        
        
    }
?>
</body>
</html>