<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST");
header("Allow: GET, POST");
require_once "./config/db.php"; //Conexion
require_once "./jwt/jwt.php"; //Conexion
    /**
     * 
     * CONTROLLER MAIN REQUEST URL
     */
    //URL
    if(isset($_REQUEST['url'])){
        $paramsURL = $_REQUEST['url'];
        //Explode
        $params = explode('/',$paramsURL);
        $controller = $params[0];
        //File controller
        $controleFile = require_once "./controller/".$controller."Controller.php";
        //Instance controller
        $mainController = new $params[0]();
        if(isset($params[1])){
            //Method call
            $action = $params[1];
            $mainController->{$action}();
        }else{
            echo "Not found";
        }
    }else{
        echo "Not found controller";
    }