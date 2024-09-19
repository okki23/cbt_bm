<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>
<html>
<head>
<title>CBT <?php echo "$skull"; ?>| Cetak Kartu</title>
<script type="text/javascript" src="jquery.gdocsviewer.min.js"></script> 

<script type="text/javascript"> 
/*<![CDATA[*/
$(document).ready(function() {
	$('a.embed').gdocsViewer({width: 600, height: 750});
	$('#embedURL').gdocsViewer();
});
/*]]>*/
</script> 
</head>
<body>
<iframe src="<?php echo "cetaknilaiUTS.php?kelz=$_REQUEST[iki3]&jurz=$_REQUEST[jur3]&mapz=$_REQUEST[map3]&semz=$_REQUEST[sem3]"; ?>" style="display:none;" name="frame"></iframe>
<button type="button" class="btn btn-default btn-sm" onClick="frames['frame'].print()" style="margin-top:10px; margin-bottom:5px"><i class="glyphicon glyphicon-print"></i> Cetak 
</button> 
<?php echo "Cetak Hasil Ujian Kelas : '$_REQUEST[iki3]', Jurusan : '$_REQUEST[jur3]'"; ?>

<?php

//koneksi database
include "../../config/server.php";


$sqlad = mysql_query("select * from cbt_admin");
$ad = mysql_fetch_array($sqlad);
$namsek = strtoupper($ad['XSekolah']);
$kepsek = $ad['XKepSek'];
$logsek = $ad['XLogo'];
$BatasAwal = 50;
 if(isset($_REQUEST['iki3'])){ 
$cekQuery = mysql_query("SELECT * FROM cbt_siswa where XKodeKelas = '$_REQUEST[iki3]' and  XKodeJurusan = '$_REQUEST[jur3]' ");
}else{
$cekQuery = mysql_query("SELECT * FROM cbt_siswa ");
}
$jumlahData = mysql_num_rows($cekQuery);
$jumlahn = 20;
$n = ceil($jumlahData/$jumlahn);
$nomz = 1;
for($i=1;$i<=$n;$i++){ ?>
	<div style="background:#999; width:100%; height:1275px;" ><br>
	<div style="background:#fff; width:90%; margin:0 auto; padding:30px; height:90%;">
    <table border="0" width="100%">
    <tr>
    							<?php 
								$sqk = mysql_query("select * from cbt_tes where XKodeUjian = '$_REQUEST[tes3]'");
								$rs = mysql_fetch_array($sqk);
                             	$rs1 = strtoupper("$rs[XNamaUjian]");
								
								if($_REQUEST['tes3']=='A'){$namaujian = "HASIL SEMUA UJIAN ";} else {$namaujian = "HASIL UJIAN TENGAH SEMESTER ";}
								?>                                

    <td rowspan="4" width="150"><img src="../../images/<?php echo "$logsek"; ?>" width="100"></td>
    <td colspan="2"><font size="+2"><b><?php echo "$namaujian"; ?></b></font></td>
    </tr>
    <tr>
   								 <?php 
								$sqk = mysql_query("select * from cbt_mapel where XKodeMapel = '$_REQUEST[map3]'");
								$rs = mysql_fetch_array($sqk);
                             	$rs1 = strtoupper("$rs[XNamaMapel]");
								?>   
    <td width="20%">Mata Pelajaran</td><td>: <b><?php echo $rs1; ?></b></td>
    </tr>
    <tr>
    <td>Kelas | Jurusan</td><td>: <b><?php echo $_REQUEST['iki3']; ?> | <?php echo $_REQUEST['jur3']; ?></b></td>
    </tr>

  <tr>
    <td>Tahun Akademik </td><td>: <?php $sqk = mysql_query("select * from cbt_tahunakademik group by Xtahunakadmik");$row=mysql_fetch_array($sqk,MYSQL_ASSOC);
								 echo $row['Xtahunakadmik']; ?></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  </table><br>
  
  <table border="1" width="100%" style="text-align:center">
  <tr bgcolor="#CCCCCC" height="30"><th width="5%" style="text-align:center" rowspan="2">No.</th><th width="10%" style="text-align:center" rowspan="2">NIS</th>
  <th width="30%" 
  rowspan="2" style="text-align:center">Nama Siswa</th>
  <th align="center"   width="10%" style="text-align:center" >UJIAN</th>
  <th align="center"   width="10%" style="text-align:center" rowspan="2">KKM</th>
  <th align="center"   width="25%" style="text-align:center" rowspan="2">KET</th>
</tr>
  <tr bgcolor="#CCCCCC">
  <td height="30" width="5%" style="text-align:center">UTS</td>
</tr>
<?php

$mulai = $i-1;
$batas = ($mulai*$jumlahn);
$startawal = $batas;
$batasakhir = $batas+$jumlahn;

$s = $i-1;

$per = mysql_query("SELECT * from cbt_mapel where XKodeMapel = '$_REQUEST[map3]'");
$p = mysql_fetch_array($per);

$perUH = $p['XPersenUH'];
$perUTS = $p['XPersenUTS'];
$perUTS = $p['XPersenUTS'];
$NilaiKKM = $p['XKKM'];
?>
<?php
if(isset($_REQUEST['iki3'])){ 
$cekQuery1 = mysql_query("SELECT * FROM cbt_siswa where XKodeKelas = '$_REQUEST[iki3]' and  XKodeJurusan = '$_REQUEST[jur3]' limit $batas,$jumlahn");
}else{
$cekQuery1 = mysql_query("SELECT * FROM cbt_siswa limit $batas,$jumlahn");
}
$jumlaNILAI = 0;
while($f= mysql_fetch_array($cekQuery1)){

$sUTS = mysql_query("
SELECT sum(XNilai) as totUTS, count(XNilai) as jujum2 FROM cbt_nilai where  (XKodeKelas = '$_REQUEST[iki3]' or XKodeKelas='ALL') and XNIK = '$f[XNIK]' and XKodeUjian = 'UTS' 
and	XKodeMapel = '$_REQUEST[map3]' and XSemester = '$_REQUEST[sem3]' ");
$to1 = mysql_fetch_array($sUTS);
$jumlaNILAI1 = mysql_num_rows($sUTS);

$nUTS = $to1['totUTS'];
if($nUTS==""){ 
$TOP1 = "";
} else {
$TOP1 = number_format($nUTS, 2, ',', '.');
}


$jto = mysql_query("
SELECT * FROM cbt_nilai where XNomerUjian = '$f[XNomerUjian]' and XKodeUjian = 'UTS' 
and	XKodeMapel = '$_REQUEST[map3]' and XSemester = '$_REQUEST[sem3]' ");

$jumlaNILAI = mysql_num_rows($jto);

$TAkhire = $nUTS;
if($jumlaNILAI<$NilaiKKM){$keterangan="Remedial";}else{$keterangan="Tuntas";}
	
if($jumlaNILAI==0){$keterangan = "Belum Ujian";$NilaiKKMe = "";}else{$NilaiKKMe=$NilaiKKM;}
	  echo "<tr height=30px><td>&nbsp;$nomz </td><td>&nbsp;$f[XNIK]</td><td align=left>&nbsp;$f[XNamaSiswa]</td>
	  <td>&nbsp;$TOP1</td>
	  <td>$NilaiKKMe</td>
	  <td>$keterangan </td>
  	  	  
	  </tr>";

  $nomz++;
?>
<?php } ?>        
        </table>
    </div>
    </div>
<?php } ?>            
</body>
</html>