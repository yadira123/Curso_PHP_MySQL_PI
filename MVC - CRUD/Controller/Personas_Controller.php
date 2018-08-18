<?php

    require_once("Model/Personas_Model.php");

    //instanciando
    $persona=new Personas_Model();

    //almacenara el array q va a devolver
    $matrizPersonas=$persona->get_Personas();

    
    

    require_once("View/Personas_View.php");//

    
    

?>