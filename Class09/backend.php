<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json');

$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

// $submittedData = [
//     'email' => $data['email'],
//     'pass' => $data['pass']

// ];

$result = [];
if($data['email'] == "dip@gmail.com" && $data['pass']=="12345"){
    $result["success"] = true;
    $result['message'] = "Hello bro";
}else{
    $result["success"] = false;
    $result['message'] = "sorry bro";
}

echo json_encode($result);

