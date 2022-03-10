<?php

$ch = curl_init("http://phpservice/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;

?>