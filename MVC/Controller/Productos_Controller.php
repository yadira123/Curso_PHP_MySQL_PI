<?php

    require_once("Model/ListarProductos_Model.php");

    //instanciando para poder ejecutar el metodo get_Productos
    $producto=new ListarProductos_Model();

    //almacenara el array q va a devolver
    $matrizProductos=$producto->get_Productos();

    
    

    require_once("View/Productos_View.php");//

    
    

?>