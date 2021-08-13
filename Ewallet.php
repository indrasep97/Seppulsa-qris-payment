<?php 
class Seppulsa 
{ 
function ewallet($nama,$email,$reff,$nominal,$return,$callback)
{ $api = ""; //isi api payment yang ada di menu api 
$url = "https://seppulsa.com/payment"; 
$contents = 
[ 
"merchant"=>$api, 
"nominal"=>$nominal, 
"nama"=>$nama, 
"email"=>$email, 
"reff"=>$reff, 
"return"=>$return, 
"callback"=>$callback, 
"format"=>"json",
"pay" => "ovo", // shopeepay , ovo , dana , linkaja
"no" => "+6283840183337" //digunakan untuk ovo dan linkaja
]; 
$data = http_build_query($contents); 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
$output = curl_exec($ch); 
curl_close($ch); 
return $output; }
 }
