<?php

    class home extends controllers{

        public function __construct(){
            
            parent::__construct();

        }

        public function home(){

            $data["tag_page"]="Home";
            $data["page_title"]="Página Principal";
            $data["page_name"]="home";

            $this->views->getView($this,"home",$data);
        }

        public function insertar(){

            $data = $this->model->setUser("Carlos", 18);
            print_r($data);
        }

        public function verusuario($id){

            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar(){

            $data = $this->model->updateUser(1,"Roberto", 20);
            print_r($data);
        }

        public function verusuarios()
        {
            $data = $this->model->getUsers();
            echo "<pre>";
            print_r($data);
        }

        public function eliminarusuario($id){

            $data = $this->model->delUser($id);
            print_r($data);
        }

    }

?>