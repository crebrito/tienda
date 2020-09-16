<?php

    class Home{

        public function __construct(){

        }

        public function home($params){

            echo "Mensaje desde el controlador Home";
        }

        public function datos($params){

            echo "Datos recibidos : $params";
        }
    }

?>