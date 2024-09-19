<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$jum = $_REQUEST['txt_agama'];
if($jum=="AKTIF"){
$sqlpasaif = mysql_query("update cbt_agama set XAgama = '0' where Urut = '$_REQUEST[Urut]'");
}
}
?>