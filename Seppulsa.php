<?php
class Seppulsa
{
function qris($nama,$email,$reff,$nomor,$nominal,$return,$tipe,$callback){
$api = ""; //isi api payment yang ada di menu api
$url = "https://seppulsa.com/payment"; 
$contents = [
"merchant"=>$api,
"nominal"=>$nominal,
"nama"=>$nama,
"email"=>$email,
"reff"=>$reff,
"nomor"=>$nomor,
"return"=>$return,
"tipe"=>$tipe,
"callback"=>$callback,
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
return $output;
}
}
