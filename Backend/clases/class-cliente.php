<?php

    include_once('class-persona.php');
    class Cliente extends Persona{
        private $perfil;
        private $numeroTelefono;
        private $ordenes;

        public function __construct($nombre,$apellido,$correo,$contraseña,$perfil,$numeroTelefono,$ordenes){
            parent:: __construct($nombre,$apellido,$correo,$contraseña);
            $this->perfil = $perfil;
            $this->numeroTelefono = $numeroTelefono;
            $this->ordenes = $ordenes;
        }

        public function getperfil(){
            return $this->perfil = $perfil;
        }

        public function setperfil(){
            $this->perfil = $perfil;

            return $this;
        }
        
        public function getnumeroTelefono(){
            return $this->numeroTelefono = $numeroTelefono;
        }

        public function setnumeroTelefono(){
            $this->numeroTelefono = $numeroTelefono;

            return $this;
        }
        
        public function getordenes(){
            return $this->ordenes = $ordenes;
        }

        public function setordenes(){
            $this->ordenes = $ordenes;

            return $this;
        }
        
    }

?>