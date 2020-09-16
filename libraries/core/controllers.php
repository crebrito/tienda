<?php

    class controllers{

        public function __construct()
        {
            $this->views = new views();
            $this->loadModel();
        }

        public function loadModel(){

            $model = get_class($this)."_model";
            $routModel = "models/".$model.".php";
            if(file_exists($routModel)){
                require_once($routModel);
                $this->model = new $model();
            }

        }
    }

?>