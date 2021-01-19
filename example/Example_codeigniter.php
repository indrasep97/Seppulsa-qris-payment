<?php 
Class Getqris extends CI_Controller{

public function index(){
$this->load->library('seppulsa');
$nominal = 100000;
$callback = "https://webanda.com/callback";
$return = "https://webanda.com/return";
$reff = "INV-1234";
$nama = "samsul";
$email = "samasul@email.com";
$req = $this->seppulsa->qris($nama,$email,$reff,$nominal,$return,$callback);
$respon = json_decode($req,true);

// redirect ke halaman payment qris 
redirect($respon['url']);

//Ambil image qr dan nominal 
$qr = $respon['imagebase64'];
$nom = $respon['nominal'];

  }
}
?>

//html or views fille
<img width="240px" src="data:image/png;base64,<?=$qr?>">
<p style="padding-top:25px;"><?=$nom?></p>
