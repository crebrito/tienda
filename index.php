<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1); 

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

    require_once("libraries/core/autoload.php");
    require_once("libraries/core/load.php");
?>