<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>
<?php
include "../../config/server.php";
$uploaddir = '../../images/'; 
$nfoto="../../images/bsmart2.jpg";

$namafile2 = basename($_FILES['uploadfile2']['name']);
$file2 = $uploaddir . basename($_FILES['uploadfile2']['name']); 
 if (move_uploaded_file($_FILES['uploadfile2']['tmp_name'], $file2)) { 
 
	rename ($file2, $nfoto);
  echo "success"; 
} else {
	echo "error";
}

?>