<?php

    class home_model{

        public function __construct()
        {
            //echo "Mensaje desde el modelo Home";
        }

        public function getCarrito($params){

            return "Datos del carrito No. ".$params;
        
        }
    }
?>