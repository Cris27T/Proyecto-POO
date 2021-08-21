<?php

    header("Content-Type: application/json");
    include_once("../clases/class-orden.php");
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST';
            
        break;
        case 'GET';
            Orden::generarOrdenes();
        break;
        case 'PUT';
            
        break;
        case 'DELETE';
            
        break;
    }

?>