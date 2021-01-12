<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: ".DIR."views/login");
}else{
    
    foreach ($_SESSION['usuario'] as $variable => $valor){
        if($variable == "nombre"){
            $nombre = $valor;//Con esto retorno el nombre del usuario loguedo
        }
        if($variable == "user"){
            $user = $valor;//Con esto retorno el user del usuario loguedo
        }
        if($variable == "idusuario"){
            $idusuario = $valor;//Con esto retorno el nombre del usuario loguedo
        }
        
    }
}
?>


