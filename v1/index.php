<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


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