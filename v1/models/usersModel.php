<?php 
    class UsersModel extends DB{
        public function login($user = "",$pass = ""){
          $connect = parent::connect();
            $sql = "select * from user";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            //Return data
            return $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function get_users(){
            $connect = parent::connect();
              $sql = "select * from user";
              $stmt = $connect->prepare($sql);
              $stmt->execute();
              //Return data
              return $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
          }
    }