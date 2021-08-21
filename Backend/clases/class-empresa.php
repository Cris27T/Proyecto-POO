<?php

    class Empresa{
        private $nombre;
        private $descripcion;
        private $ubicacion;
        private $imagen;
        private $rubro;

        public function __construct($nombre,$descripcion,$ubicacion,$imagen,$rubro){
            $this->descripcion = $descripcion;
            $this->nombre = $nombre;
            $this->ubicacion = $ubicacion;
            $this->imagen = $imagen;
            $this->rubro = $rubro;    
        }

        public function getNombre(){
            return $this->nombre = $nombre;
        }

        public function setNombre(){
            $this->nombre = $nombre;

            return $this;
        }

        public function getDescripcion(){
            return $this->descripcion = $descripcion;
        }

        public function setDescripcion(){
            $this->descripcion = $descripcion;

            return $this;
        }

        public function getUbicacion(){
            return $this->ubicacion = $ubicacion;
        }

        public function setUbicacion(){
            $this->ubicacion = $ubicacion;

            return $this;
        }

        public function getImagen(){
            return $this->imagen = $imagen;
        }

        public function setImagen(){
            $this->imagen = $imagen;

            return $this;
        }

        public function getRubro(){
            return $this->rubro = $rubro;
        }

        public function setRubro(){
            $this->rubro = $rubro;

            return $this;
        }

        public static function generarEmpresa(){
            $contenidoArchivo = file_get_contents('../data/empresa.json');
            echo $contenidoArchivo;
        }

    }
    

?>