<?php
class Seppulsa
{
function qris($nama,$email,$reff,$nominal){
$api = ""; //isi api payment yang ada di menu api
$url = "https://seppulsa.com/payment"; 

$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
curl_close($ch); 
return $output;
}
}
