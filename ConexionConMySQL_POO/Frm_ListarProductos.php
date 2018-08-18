<?php
    
    require("ListarProductos.php");

    $pais=$_GET["buscar"];

    //creando instancia para q se ejecute el constructor d la clase
    $prod=new ListarProductos();
    
    //llamando a la funcion get_productos
    //$array_prod=$prod->get_productos(); 

    //llamando para al metodo listar por pais
    $array_prod=$prod->get_productosParam($pais);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listando productos</title>
</head>
<body>

    <form action="" method="get">
        <table>
            <tr>
                <th>CÓDIGOARTÍCULO</th>
                <th>NOMBREARTÍCULO</th>
                <th>SECCIÓN</th>
                <th>PRECIO</th>
                <th>FECHA</th>
                <th>IMPORTADO</th>
                <th>PAÍSDEORIGEN</th>
            </tr>
            <?php
                //recorrer el array
                foreach($array_prod as $elemento){
                ?>
            <tr>
                <td><?php echo $elemento['CÓDIGOARTÍCULO'];?></td>
                <td><?php echo $elemento['NOMBREARTÍCULO'];?></td>
                <td><?php echo $elemento['SECCIÓN'];?></td>
                <td><?php echo $elemento['PRECIO'];?></td>
                <td><?php echo $elemento['FECHA'];?></td>
                <td><?php echo $elemento['IMPORTADO'];?></td>
                <td><?php echo $elemento['PAÍSDEORIGEN'];?></td>
            </tr>
            <?php
                 }
            ?>
        </table>
        
    </form>


</body>
</html>