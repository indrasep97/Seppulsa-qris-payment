<?php 
Class Callback extends CI_Controller{

Public function index(){
$id = $_POST['id'];
$status = $_POST['status'];
$reff = $_POST['reff'];
$verif = $_POST['verif'];

$key = ""; //isi dengan key verif yang di input di menu api

if(isset($_POST['id'])){
 if($verif != $key ){
   die('KEY TIDAK VALID');
     }else{
      if($status == "sukses"){
        //proses sistem anda jika pembayaran sukses
        }else if($status == "gagal"){ 
         //proses sistem  anda jika pembayaran gagal
        }
      }
   }
 }

}
