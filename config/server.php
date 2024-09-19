<?php
// 1. Connect ke database
$sqlconn=@mysql_connect("localhost","root","b1m4ntara");
// 2. Pilih database
date_default_timezone_set("Asia/Jakarta");
mysql_select_db("dbpusat2", $sqlconn);
$mode = "lokal"; // pilih 'lokal' atau 'pusat'
?>
