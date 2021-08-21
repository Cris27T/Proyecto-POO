<?php

    header("Content-Type: application/json");
    include_once("../clases/class-driver.php");
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST';
            
        break;
        case 'GET';
            Driver::generarDriver();
        break;
        case 'PUT';
            
        break;
        case 'DELETE';
            
        break;
    }

?>