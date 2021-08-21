<?php

    header("Content-Type: application/json");
    include_once("../clases/class-empresa.php");
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST';
            
        break;
        case 'GET';
            Empresa::generarEmpresa();
        break;
        case 'PUT';
            
        break;
        case 'DELETE';
            
        break;
    }

?>