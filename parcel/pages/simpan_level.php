<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$jum = $_REQUEST['txt_level'];
if($jum=="AKTIF"){
$sqlpasaif = mysql_query("update cbt_level set XLevel = '0' where Urut = '$_REQUEST[Urut]'");
}
}
?>