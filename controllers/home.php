<?php

    class home extends controllers{

        public function __construct(){
            
            parent::__construct();

        }

        public function home($params){

            //echo "Mensaje desde el controlador Home";
        }

        public function datos($params){

            echo "Datos recibidos : $params";
        }

        public function carrito($params){

            $carrito = $this->model->getCarrito($params);
            echo $carrito;
        }

    }

?>