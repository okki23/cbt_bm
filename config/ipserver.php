<?php
include "server.php";
$sql = mysql_query("select * from server_sekolah");
$xadm = mysql_fetch_array($sql);
$ipserver= $xadm['XIPSekolah'];
$kodesekolah= $xadm['XServerId'];
$db_userm= $xadm['XUsername'];
$db_pasw= $xadm['XPass'];
$db_nama= $xadm['XDbName'];

$user_name = "$db_userm"; // sesuaikan dengan akun privileges
$password = "$db_pasw"; // sesuaikan dengan password privileges
$database = "$db_nama";
$host_name = "$ipserver"; // Nama Komputer SERVER atau nama domain kalau hosting

?>