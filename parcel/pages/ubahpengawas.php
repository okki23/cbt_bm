<?php
include "../../config/server.php";
$sql = mysql_query("update cbt_ujian set 
XProktor = '$_REQUEST[txt_proktorx]',
XNIPProktor = '$_REQUEST[txt_nipproktorx]',
XPengawas = '$_REQUEST[txt_pengawasx]',
XNIPPengawas = '$_REQUEST[txt_nippengawasx]',
Xcatatan = '$_REQUEST[txt_catatanx]'
where XTokenUjian = '$_REQUEST[txt_tokenx]'");


echo "Ubah data berhasil !"; 
?>