<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$jum = $_REQUEST['txt_sesi'];
if($jum=="AKTIF"){
$sqlpasaif = mysql_query("update cbt_sesi set XSesi = '0' where Urut = '$_REQUEST[Urut]'");
}
}
?>