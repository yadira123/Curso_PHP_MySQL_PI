<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operadores Matematicos</title>
</head>
<body>
  <p>&nbsp;</p>
   <form name="form1" method="post" action="">
      <p>
          <label for="txtnum1"></label>
          <input type="text" name="txtnum1" id="txtnum1" value="4">
          <label for="txtnum2"></label>
          <input type="text" name="txtnum2" id="txtnum2" value="2">
          <label for="operacion"></label>
          <select name="operacion" id="operacion">
              <option>Suma</option>
              <option>Resta</option>
              <option>Multiplicacion</option>
              <option>Division</option>
              <option>Modulo</option>
              <option>Incremento</option>
              <option>Decremento</option>
          </select>
      </p>
      <p>
          <input type="submit" name="button" id="button" value="Enviar" >
      </p>
   </form>
   <p>&nbsp;</p>
   
<?php
       include("calculadoraOM.php");
       
       //q se ejecute cuando el usuario de click en el boton enviar
        if(isset($_POST["button"])){
            //variables para almacenar lo q ha escrito el usuario en cada caja de texto
            $num1=$_POST["txtnum1"];
            $num2=$_POST["txtnum2"];
            $operacion=$_POST["operacion"];
            
            calcular($operacion);
        }
?>
   
    
</body>
</html>