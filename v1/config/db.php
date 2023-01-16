<?php

    class DB {
        protected $pdo; 
        protected function connect(){
            try{
                $pdo = $this->pdo = new PDO("mysql:host=localhost;dbname=restapi", 'root', '');      
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;

            }catch(PDOException $error){
                die('Error conect BD: '.$error);
            }
        }
    }