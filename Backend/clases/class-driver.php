<?php

    include_once('class-persona.php');
    class Driver extends Persona{
        private $perfil;
        private $entregas;

        public function __construct($nombre,$apellido,$correo,$contraseña,$perfil,$entregas){
            parent:: __construct($nombre,$apellido,$correo,$contraseña);
            $this->perfil = $perfil;
            $this->entregas = $entregas;
        }

        public function getPerfil(){
            return $this->perfil = $perfil;
        }

        public function setPerfil(){
            $this->perfil = $perfil;

            return $this;
        }

        public function getEntregas(){
            return $this->entregas = $entregas;
        }

        public function setEntregas(){
            $this->entregas = $entregas;

            return $this;
        }

        public static function generarDriver(){
            $contenidoArchivo = file_get_contents('../data/driver.json');
            echo $contenidoArchivo;
        }

    }

?>