<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json');

$contentType = $_SERVER["CONTENT_TYPE"] ?? "";

if (strpos($contentType, "application/json") !== false) {
    $data = json_decode(file_get_contents('php/input'),true);
}else{
    $data = $_POST;
}