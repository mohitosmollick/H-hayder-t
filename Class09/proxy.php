<?php 

$apiEndPoint = 'https://xkcd.com/info.0.json';
$data = file_get_contents($apiEndPoint);

echo $data;
