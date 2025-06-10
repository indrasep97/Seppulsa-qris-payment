<?php 
Class Getqris extends CI_Controller{

public function index(){
$this->load->library('seppulsa');
$nominal = 100000;
$callback = "https://webanda.com/callback";
$return = "https://webanda.com/return";
$tipe = "Qris";
$reff = "INV-1234";
$nomor = "085157331667";
$nama = "samsul";
$email = "samasul@email.com";
$req = $this->seppulsa->qris($nama,$email,$reff,$nomor,$nominal,$return,$tipe,$callback);
$respon = json_decode($req,true);

// redirect ke halaman payment qris 
redirect($respon['url']);

//Ambil qr dan nominal 
$qr = $respon['qr'];
$nom = $respon['nominal'];

  }
}
?>
