<?php

//session_start();

foreach ($_SESSION['usuario'] as $variable => $valor){
    if($variable == "nombre"){
        $nombre = $valor;//Con esto retorno el nombre del usuario loguedo
    }
}

?>