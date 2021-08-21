<?php

    class Orden{
        private $usuario;
        private $driver;
        private $empresa;
        private $producto;
        private $cantidad;
        private $precio;
        private $total;

        public function __construct($usuario,$driver,$empresa,$producto,$cantidad,$precio,$total){
            $this->usuario = $usuario;
            $this->driver = $driver;
            $this->empresa = $empresa;
            $this->producto = $producto;
            $this->cantidad = $cantidad;
            $this->precio = $precio;
            $this->total = $total;
        }

        public function getusuario(){
            return $this->usuario = $usuario;
        }

        public function setusuario(){
            $this->usuario = $usuario;

            return $this;
        }

        public function getdriver(){
            return $this->driver = $driver;
        }

        public function setdriver(){
            $this->driver = $driver;

            return $this;
        }

        public function getempresa(){
            return $this->empresa = $empresa;
        }

        public function setempresa(){
            $this->empresa = $empresa;

            return $this;
        }

        public function getproducto(){
            return $this->producto = $producto;
        }

        public function setproducto(){
            $this->producto = $producto;

            return $this;
        }

        public function getcantidad(){
            return $this->cantidad = $cantidad;
        }

        public function setcantidad(){
            $this->cantidad = $cantidad;

            return $this;
        }

        public function getprecio(){
            return $this->precio = $precio;
        }

        public function setprecio(){
            $this->precio = $precio;

            return $this;
        }

        public function gettotal(){
            return $this->total = $total;
        }

        public function settotal(){
            $this->total = $total;

            return $this;
        }

        public static function generarOrdenes(){
            $contenidoArchivo = file_get_contents('../data/orden.json');
            echo $contenidoArchivo;
        }
    }
    

?>