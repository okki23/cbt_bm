<?php 
include "../../config/server.php";

if($_REQUEST['aksistatus']=="simpantahun"){
$sqlcek = mysql_query("select * from cbt_tahunakademik where urut = '$_REQUEST[urut]'");
$sta = mysql_fetch_array($sqlcek);
$status= $sta['Xstatus'];

if($status=="1"){
	$ubah = "0"; 
	} 
	elseif($status=="0")
	{ $ubah = "1"; } 
	
$sqlpasaif = mysql_query("update cbt_tahunakademik set Xstatus = '$ubah' where urut = '$_REQUEST[urut]'");
?>