<?php
    
    //si NO se ha creado la cookie
    if(!$_COOKIE["idioma_seleccionado"]){
        header("Location:pag1.php");//redirige a pag1
    }
    //si la cookie tiene como valor es
    else if($_COOKIE["idioma_seleccionado"]=="es"){
        header("Location:spanish.php");//redirige a spanish.php
    }
    //si tiene como valor en
    else if($_COOKIE["idioma_seleccionado"]=="en"){
        header("Location:english.php");
    }



?>