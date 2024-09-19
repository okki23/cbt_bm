<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$jum = $_REQUEST['txt_jur'];
if($jum=="AKTIF"){
$sqlpasaif = mysql_query("update cbt_jurusan set XJurusan = '0' where Urut = '$_REQUEST[Urut]'");
}
}
?>