<?php
// 1. Connect ke database
//$sqlconn=mysql_connect("localhost","root","");
// 2. Pilih database
include "ipserver.php";
 
$link = @mysql_connect($host_name, $user_name, $password);

if(!$link){
$status_konek = "0";
}
else {
$status_konek = "1";
mysql_select_db('dbpusat', $link) or die('Koneksi1 CBT  belum di setting');
//echo "Koneksi Terbuka";

}
date_default_timezone_set("Asia/Jakarta");
//mysql_select_db("dbpusat", $sqlconn);
//tambahkan IPPublic ke Remote MySQL di CPanel hosting


?>
