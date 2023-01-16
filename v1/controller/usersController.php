<?php
    require_once "./models/usersModel.php";
    // get posted data
	//$data = json_decode(file_get_contents("php://input", true));
    //$_SERVER['REQUEST_METHOD'] === 'POST'
    class users{
        public function login($user = "", $passwd = "")
        {
            $jwt = new JWT();

            echo "Login";
            $users = new UsersModel();
            $data = $users->login();
            $username = 'Jose';
		
            $headers = array('alg'=>'HS256','typ'=>'JWT');
            $payload = array('username'=>$username, 'exp'=>(time() + 60));

            $token = $jwt->generate_jwt($headers, $payload);
            
            echo json_encode(array('token' => $token));
        }
        public function users()
        {
            $jwt = new JWT();

            $bearer_token = $jwt->get_bearer_token();

            #echo $bearer_token;

            $is_jwt_valid = $jwt->is_jwt_valid($bearer_token);

            if($is_jwt_valid) {
                $users = new UsersModel();
                $data = $users->get_users();
                echo json_encode($data);
            } else {
                echo json_encode(array('error' => 'Access denied'));
            }
        }
    }