<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$jum = $_REQUEST['txt_ruang'];
if($jum=="AKTIF"){
$sqlpasaif = mysql_query("update cbt_ruang set XRuang = '0' where Urut = '$_REQUEST[Urut]'");
}
}
?>