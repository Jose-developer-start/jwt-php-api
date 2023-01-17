<?php

/* require_once ('./vendor/autoload.php');
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];
$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

print_r($decoded);

$decoded_array = (array) $decoded;
JWT::$leeway = 60; // $leeway in seconds
$decoded = JWT::decode($jwt, new Key($key, 'HS256')); 
*/

?>


<script>
    fetch('./v1/users/usuario',{
        method:'GET',
        headers:{
            'Content-type': 'application/json',
            'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Ikpvc2UiLCJleHAiOjE2NzM5NTA5NDl9.FLFsxWIsRKnseiv0-DRuGU4_NAg5eqnkf9G77swu3BE'
        }
    })
    .then(response => response.json())
    .then(data => console.log(data));


    fetch('https://api.avplustuoptica.com/v1/pacientes/veteranos/03653012-2',{
        method:'GET',
        mode: 'no-cors',
        headers:{
            'Content-type': 'application/json',
            'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Im9zY2FyIiwiZXhwIjoxNzA1NTQ5MTQzfQ.GrqW1MIckxF97pj3fnmFVc9suOQo1_kiE6w-SXcI_sQ'
        }
    })
    .then(response => response.json())
    .then(data => console.log(data));
</script>