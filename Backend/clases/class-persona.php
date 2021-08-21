<?php

    abstract class Persona{
        protected $nombre;
        protected $apellido;
        protected $correo;
        protected $contraseña;

        public function __construct($nombre,$apellido,$correo,$contraseña){
            $this->nombre = $nombre;    
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->contraseña = $contraseña;    
        }

        public function getNombre(){
            return $this->nombre;
        }
        
        public function setNombre(){
            $this->nombre = $nombre;

            return $this;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido(){
            $this->apellido = $apellido;

            return $this;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo(){
            $this->correo = $correo;

            return $this;
        }

        public function getContraseña(){
            return $this->contraseña;
        }

        public function setContraseña(){
            $this->contraseña = $contraseña;

            return $this;
        }

    }
    
?>