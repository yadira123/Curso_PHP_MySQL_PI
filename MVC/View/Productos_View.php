<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Producto</title>
    <style>
        td{
            border: 1px dotted red;
        }
        
    </style>
</head>
<body>

    <table>
        <tr>
            <td>Nombre del Articulo</td>
        </tr>
    

    <?php
        //recorrer matrizProductos
        foreach($matrizProductos as $registro){
            echo "<tr><td>".$registro["NOMBREARTÍCULO"]."</td></tr>";
        }

    ?>
</table>
</body>
</html>