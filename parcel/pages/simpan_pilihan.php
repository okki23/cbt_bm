<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$jum = $_REQUEST['txt_pilih'];
if($jum=="AKTIF"){
$sqlpasaif = mysql_query("update cbt_pilihan set XPilihan = '0' where Urut = '$_REQUEST[Urut]'");
}
}
?>