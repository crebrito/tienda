<?php

    class home_model extends mysql{

        public function __construct()
        {
            parent::__construct();
        }

        public function setUser(string $nombre, int $edad){

            $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
            $arrData = array($nombre,$edad);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }

        public function getUser(int $id){

            $query = "SELECT * FROM usuario WHERE id = $id";
            $request = $this->select($query);
            return $request;
        }

        public function updateUser(int $id, string $nombre, int $edad){

            $query_update = "UPDATE usuario SET nombre=?,edad=? WHERE id = $id";
            $arrData = array($nombre,$edad);
            $request_update = $this->update($query_update,$arrData);
            return $request_update;
        } 
        
        public function getUsers(){

            $query = "SELECT * FROM usuario";
            $request = $this->select_all($query);
            return $request;
        }

        public function delUser(int $id){

            $query = "DELETE FROM usuario WHERE id = $id";
            $request = $this->delete($query);
            return $request;
        }

    }
?>