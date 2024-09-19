<?php
include "../../config/server.php";
$sql = mysql_query("update server_sekolah set 
XIPSekolah = '$_REQUEST[txt_ip]',
XDatabase = '$_REQUEST[txt_user]',
XPass = '$_REQUEST[txt_pas]'");

echo "Ubah data berhasil !"; 
?>