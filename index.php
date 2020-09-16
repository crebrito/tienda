<?php

    require_once("config/config.php");

    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';

    $arrUrl = explode('/',$url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = '';

    if(!empty($arrUrl[1])){

        if($arrUrl[1] != ''){

            $method = $arrUrl[1];

        }
    }

    if(!empty($arrUrl[2])){

        if($arrUrl[2] != ''){

            for ($i=2; $i < count($arrUrl); $i++) { 
                $params .= $arrUrl[$i].',';
            }
            $params = trim($params,',');
        }
    }

    spl_autoload_register(function($class){

        if(file_exists(LIBS."core/".$class.".php")){
            require_once(LIBS."core/".$class."php");
        }

    });

    //Load

    $controllerFile = "controllers/".$controller.".php";

    if(file_exists($controllerFile)){
        require_once($controllerFile);
        $controller = new $controller;
        if(method_exists($controller,$method)){
            $controller->{$method}($params);
        }else{
            echo "No existe el método";
        }
    }else{
        echo "No existe el controlador";
    }
    
    /*echo '<br>';
    echo "Controlador : $controller";
    echo '<br>';
    echo "Método : $method";
    echo '<br>';
    echo "Parámetros : $params";*/

?>