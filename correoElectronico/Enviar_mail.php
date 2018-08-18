<?php
    
    if($_POST["nombre"]=="" || $_POST["apellido"]=="" || $_POST["email"]=="" || $_POST["comentarios"]=""){
        
        echo "No ha ingresado texto en los campos obligatorios";
        die();//hace q finalice la ejecucion del programa(el programa muere en esta linea)
            
    }
    
    //variable para guardar el texto del mensaje a enviar
    $texto_mail=$_POST["comentarios"];

    $destinatario=$_POST["email"];

    $asunto_mail=$_POST["asunto"];
    //parametro opcional:header
    //MIME.... <- esta dedicada a mejorar la transferencia de estos archivos entre difer paises con diferentes idiomas y alfabetos
    $headers="MIME-Version: 1.0\r\n";
    //.=  <- concatena lo q hay en su interior mas lo q pongamos a continuacion ekm: nombre.=apellido; = nombre.nombre.apellido; 
    $headers.="Content-type: text/html; charset=utf-8\r\n";

    //de quien viene el mensaje
    //especificando al destinatario de quien viene el mensaje
    $headers.="From Prueba yadira < yadira.tello.cainicela@gmail.com>\r\n";
    

    //lo q devuelva la funcion mail=trrue or false
    $exito=mail($destinatario, $asunto_mail, $texto_mail, $headers);

    if($exito){
        echo "Mensaje enviado";
    }
    else{
        echo "Ha habido un error";
    }


?>