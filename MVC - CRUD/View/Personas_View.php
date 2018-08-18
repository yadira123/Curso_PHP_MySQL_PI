<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Personas</title>
    <style>
        td{
            border: 1px dotted red;
        }
        
    </style>
</head>
<body>
    
    <?php
    
        include("Model/paginacion.php");
        
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table width="50%" border="0" align="center">
            <tr >
              <td class="primera_fila">Id</td>
              <td class="primera_fila">Nombre</td>
              <td class="primera_fila">Apellido</td>
              <td class="primera_fila">Dirección</td>
              <td class="sin">&nbsp;</td>
              <td class="sin">&nbsp;</td>
              <td class="sin">&nbsp;</td>
            </tr> 

           <?php
                foreach($matrizPersonas as $persona):
            ?>

            <tr>
              <td><?php echo $persona["ID"] ?></td>
              <td><?php echo $persona["NOMBRE"] ?></td>
              <td><?php echo $persona["APELLIDO"] ?></td>
              <td><?php echo $persona["DIRECCION"] ?></td>

              <td class="bot">
                 <a href="eliminar.php?Id=<?php echo $persona["ID"] ?>" > 

                    <input type='button' name='del' id='del' value='Borrar'>

                 </a>
              </td>
              <td class='bot'>
                 <a href="editar.php?Id=<?php echo $persona["ID"] ?> & nom=<?php echo $persona["NOMBRE"] ?> & ape=<?php echo $persona["APELLIDO"] ?> & dir=<?php echo $persona["DIRECCION"] ?>
                    ">

                    <input type='button' name='up' id='up' value='Actualizar'>

                 </a>
              </td>
            </tr>  

            <?php

                endforeach;

            ?>


            <tr>
              <td></td>
              <td><input type='text' name='txtNom' size='10' class='centrado'></td>
              <td><input type='text' name='txtApe' size='10' class='centrado'></td>
              <td><input type='text' name='txtDir' size='10' class='centrado'></td>
              <td class='bot'><input type='submit' name='btnInsertar' id='cr' value='Insertar'></td>
            </tr>  
            <tr>
                <td colspan="4">
                    <?php
                        //-------------------   paginacion  -------------------
                        //recorrer el num de paginaciones a mostrar
                        for($i=1;$i<=$total_pags;$i++){

                            echo "<a href='?pagina=".$i."'> " .$i. " </a>";//muestra el num d paginaciones y almacena en el parametro de pagina la paginacion en donde se encuentra
                        }
                    ?>
                </td>
            </tr>  
      </table>
  </form>

</body>
</html>