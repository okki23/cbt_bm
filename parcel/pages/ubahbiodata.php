<?php
include "../../config/server.php";


if ($pass=''){

$sql = mysql_query("update cbt_user set 
Nama = '$_REQUEST[txt_nama]',
NIP = '$_REQUEST[txt_nip]',
Alamat = '$_REQUEST[txt_alamat]',
HP = '$_REQUEST[txt_telp]',

Email = '$_REQUEST[txt_email]'
WHERE Username='$_COOKIE[beeuser]'");
} else {
	$sql = mysql_query("update cbt_user set 
Nama = '$_REQUEST[txt_nama]',
NIP = '$_REQUEST[txt_nip]',
Alamat = '$_REQUEST[txt_alamat]',
HP = '$_REQUEST[txt_telp]',

Email = '$_REQUEST[txt_email]'
WHERE Username='$_COOKIE[beeuser]'");}

echo "Ubah data berhasil !"; 
?>