<?php
include("../../config/server.php"); 
$soal = $_POST['soal'];
		$gsoal = $_POST['gambarsoal'];
		$ausoal = $_POST['audio'];
		$vsoal = $_POST['videosoal'];
		$j1 = $_POST['a'];
		$j2 = $_POST['b'];
		$j3 = $_POST['c'];
		$j4 = $_POST['d'];
		$j5 = $_POST['e'];
		$gj1 = $_POST['ga'];
		$gj2 = $_POST['gb'];
		$gj3 = $_POST['gc'];
		$gj4 = $_POST['gd'];
		$gj5 = $_POST['ge'];
		$kj = $_POST['kunci'];
		$urut = $_POST['urut'];
		$kose = $_POST['kose'];

$query = "UPDATE cbt_soal SET XTanya='$soal', XAudioTanya='$ausoal', XVideoTanya='$vsoal', XGambarTanya='$gsoal', XJawab1='$j1', XJawab2='$j2', XJawab3='$j3', XJawab4='$j4', XJawab5='$j5', XGambarJawab1='$gj1', XGambarJawab2='$gj2', XGambarJawab3='$gj3', XGambarJawab4='$gj4', XGambarJawab5='$gj5', XKunciJawaban='$kj' where Urut = '$urut'";
$result = mysql_query($query);

if ($result) {
	header("location:index.php?modul=list_soal&id=list_soal&id=$kose");
}
else {
	echo "proses simpan gagal !.";
}
?>
