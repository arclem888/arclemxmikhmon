<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("HTTP/1.1 404 Not Found");
    exit();
}
$inputJSON = file_get_contents('php://input');
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:5888/zerotier',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $inputJSON,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
  ),
));
$response = curl_exec($curl);
curl_close($curl);
header('Content-Type: application/json; charset=utf-8');
echo $response;
?>
