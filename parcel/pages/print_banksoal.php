<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBT HSA</title>
</head>
<style>
@media print {
    footer {page-break-after: always; }
	@page {
	  size: A4;
	  margin-bottom:60px;
	  margin-top:40px;
	  margin-left: 40px;
	  margin-right: 40px;	  
	}

}
</style>
<style type="text/css" media="screen">
	.pageNumber { content: counter(page) }
	#print-footer {
    display: none;
}
</style>

<style type="text/css" media="print">
#print-footer {
    display: block;
    position: fixed;
    bottom: 0;
    right:0;
	font:Arial, Helvetica, sans-serif; 
	font-size:12px;
	color:#ccc
}
</style>

<script type="text/javascript" src="jquery.gdocsviewer.min.js"></script> 

<script type="text/javascript"> 
/*<![CDATA[*/
$(document).ready(function() {
	$('a.embed').gdocsViewer({width: 600, height: 750});
	$('#embedURL').gdocsViewer();
});
/*]]>*/
</script> 
    <link href="css/nedna.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script type="text/javascript"
  src="../../MathJax/MathJax.js?config=AM_HTMLorMML-full"></script>

<!-- script untuk refresh/reload mathjax setiap content baru !-->
   <script>
  MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
</script>
<!-- script untuk refresh/reload mathjax setiap content baru !-->
<body style="width:90%; margin:0 auto;margin-top:10px; ">
<?php
include "../../config/server.php";
include "../../config/fungsi_tgl.php";
?>

<?php
$var_soal = "$_REQUEST[idsoal]";

$sql0 = mysql_query("select m.*, p.*,k.*, j.*, p.XKodeJurusan as XKodeJurusan, p.XKodeKelas as XKodeKelas, p.XTglBuat as TglBuat from cbt_paketsoal p 
		LEFT JOIN cbt_mapel m on m.XKodeMapel = p.XKodeMapel 
		LEFT JOIN cbt_kelas k ON k.XKodeKelas = p.XKodeKelas
		LEFT JOIN cbt_paketsoal j ON j.XKodeJurusan = p.XKodeJurusan
		where p.XKodeSoal = '$var_soal'"); 
$p = mysql_fetch_array($sql0);
$namamapel = $p['XNamaMapel'];
$kodesoal = $p['XKodeSoal'];
$namakelas=$p['XNamaKelas'];
$namajurusan =$p['XKodeJurusan'];
$namaguru=$p['XGuru'];
$tglbuat=indonesian_date($p['TglBuat']);
$kodekelas = $p['XKodeKelas'];
$kodejurusan = $p['XKodeJurusan'];

if($kodekelas=="ALL") {
	$kelas="ALL";
} else {
	$kelas=$namakelas;
};

if($kodejurusan=="ALL") {
	$jurusan="ALL";
} else {$jurusan=$namajurusan;};

$sql1 = mysql_query("SELECT Nama FROM cbt_user WHERE Username='$namaguru'");
$u=mysql_fetch_array($sql1);
$namapembuat = $u['Nama'];

$sqladmin = mysql_query("SELECT * FROM cbt_admin");
$s = mysql_fetch_array($sqladmin);
$logo = $s['XLogo'];
$namasekolah =$s['XSekolah'];
	
if(str_replace(" ","",$logo)==""){
$logo = "tut.jpg";} else { $foto = "$logo";}
?>

			<table   border="0">
				<tr>
					<td rowspan="5" width="150">
						<img src="../../images/<?php echo $logo; ?>" width="40%"/>
					</td>
					<td width=150>Mata Pelajaran </td>
					<td>: &nbsp;
					<?php echo "$namamapel I $kodesoal"; ?></td>                
				</tr>
				<tr>
					<td>Kelas | Jurusan </td>
					<td>: &nbsp;
						<?php echo "$kelas | $jurusan "; ?></td>
				</tr>
				<tr>
					<td>Pembuat Soal</td>
					<td>: &nbsp;<?php echo $namapembuat; ?></td>
				</tr>
				<tr>
					<td>Tanggal Pembuatan</td>
					<td>: &nbsp;<?php echo $tglbuat; ?></td>
				</tr>
				<tr>
					<td>Satuan Pendidikan</td>
					<td>: &nbsp;<?php echo $namasekolah; ?></td>
				</tr>
			</table>
		
<hr></hr>
<h3 class="panel-title">
	<b>Soal Pilihan Ganda</b>
</h3>
<br/>
<table>
			<?php
			$nomer = 1;
			$sql = mysql_query("SELECT s.*, p.*, s.XJenisSoal as XJenisSoal FROM cbt_soal s 
					LEFT JOIN cbt_paketsoal p ON p.XKodeSoal = s. XKodeSoal  
					WHERE p.XKodeSoal = '$var_soal' and s.XJenisSoal='1' order by XNomerSoal");			
			while($sp = mysql_fetch_array($sql))
			{
			$jumpil = $sp['XJumPilihan'];
				$js = $sp['XJenisSoal'];
				
				if(!$sp['XGambarTanya']=='')
				{
					$gambarsoalnye = "<img src='../../pictures/$sp[XGambarTanya]' align=center width=150px>";
				}
				else
				{
					$gambarsoalnye = "";
				}
				if(!$sp['XAudioTanya']=='')
				{
					$audiosoalnye = "$sp[XAudioTanya]<br>";} else {$audiosoalnye = "";
				}
				if(!$sp['XVideoTanya']=='')
				{
					$videosoalnye = "$sp[XVideoTanya]<br>";
				} 
				else 
				{
					$videosoalnye = "";
				}
				
				if(str_replace(" ","",$sp['XGambarJawab1'])=='')
				{
					$ambilfile1 = "";
				}
				else
				{
					if(file_exists("../../pictures/$sp[XGambarJawab1]"))
					{
						$ambilfile1 = "<img src=../../pictures/$sp[XGambarJawab1]><br/>";
					} 
					else
					{
						$ambilfile1 = "<img src=images/kross.png> $sp[XGambarJawab1] tidak belum diUpload";
					}
				}
				
				if(str_replace(" ","",$sp['XGambarJawab2'])=='')
				{
					$ambilfile2 = "";
				}
				else
				{
					if(file_exists("../../pictures/$sp[XGambarJawab2]"))
					{
						$ambilfile2 = "<img src=../../pictures/$sp[XGambarJawab2]>";
					} 
					else
					{
						$ambilfile2 = "<img src=images/kross.png> $sp[XGambarJawab2] tidak belum diUpload";
					}
				}
				if(str_replace(" ","",$sp['XGambarJawab3'])=='')
				{
					$ambilfile3 = "";
				}
				else
				{
					if(file_exists("../../pictures/$sp[XGambarJawab3]"))
					{
						$ambilfile3 = "<img src=../../pictures/$sp[XGambarJawab3]>";
					} 
					else
					{
						$ambilfile3 = "<img src=images/kross.png> File Gambar tidak ada [Upload File]";
					}
				}
				if(str_replace(" ","",$sp['XGambarJawab4'])=='')
				{
					$ambilfile4 = "";
				}
				else
				{
					if(file_exists("../../pictures/$sp[XGambarJawab4]"))
					{
						$ambilfile4 = "<img src=../../pictures/$sp[XGambarJawab4]>";
					} 
					else
					{
						$ambilfile4 = "<img src=images/kross.png> File Gambar tidak ada [Upload File]";
					}
				}
				
				if(str_replace(" ","",$sp['XGambarJawab5'])=='')
				{
					$ambilfile5 = "";
				}
				else
				{
					if(file_exists("../../pictures/$sp[XGambarJawab5]"))
					{
						$ambilfile5 = "<img src=../../pictures/$sp[XGambarJawab5]></br>";
					} 
					else
					{
						$ambilfile5 = "<img src=images/kross.png> File Gambar tidak ada [Upload File]";
					}
				}
				if($jumpil=='4' && $js=='1')
				{ 						
									//$katsoal = "Pilihan Ganda (4 Pilihan Jawaban)";<p>Pertanyaan : $katsoal dengan Opsi Jawaban $_REQUEST[jum]</p>
										if($sp['XKunciJawaban']=='1'){$kunci1 = "<img src='images/benar.png' width=20px>";} else {$kunci1="";}
										if($sp['XKunciJawaban']=='2'){$kunci2 = "<img src='images/benar.png' width=20px>";} else {$kunci2="";}
										if($sp['XKunciJawaban']=='3'){$kunci3 = "<img src='images/benar.png' width=20px>";} else {$kunci3="";}
										if($sp['XKunciJawaban']=='4'){$kunci4 = "<img src='images/benar.png' width=20px>";} else {$kunci4="";}
									
									$Jawab1 = str_replace("<p>","",$sp['XJawab1']);
									$Jawab1 = str_replace("</p>","",$Jawab1);		
									$Jawab1 = str_replace("<span class='fontstyle0'>","",$Jawab1);	
									$Jawab1 = str_replace("</span>","",$Jawab1);
									$Jawab1 = str_replace("<br /><br />","",$Jawab1);
									
									$Jawab2 = str_replace("<p>","",$sp['XJawab2']);
									$Jawab2 = str_replace("</p>","",$Jawab2);		
									$Jawab2 = str_replace("<span class='fontstyle0'>","",$Jawab2);	
									$Jawab2 = str_replace("</span>","",$Jawab2);
									$Jawab2 = str_replace("<br /><br />","",$Jawab2);
									
									$Jawab3 = str_replace("<p>","",$sp['XJawab3']);
									$Jawab3 = str_replace("</p>","",$Jawab3);		
									$Jawab3 = str_replace("<span class='fontstyle0'>","",$Jawab3);	
									$Jawab3 = str_replace("</span>","",$Jawab3);
									$Jawab3 = str_replace("<br /><br />","",$Jawab3);									
									
									$Jawab4 = str_replace("<p>","",$sp['XJawab4']);
									$Jawab4 = str_replace("</p>","",$Jawab4);		
									$Jawab4 = str_replace("<span class='fontstyle0'>","",$Jawab4);	
									$Jawab4 = str_replace("</span>","",$Jawab4);
									$Jawab4 = str_replace("<br /><br />","",$Jawab4);
									
									$soalnye=$sp['XTanya'];		
									$soalnye = str_replace("<span class='fontstyle0'>","",$soalnye);	
									$soalnye = str_replace("</span>","",$soalnye);
									$soalnye = str_replace("`","'",$soalnye);
									$soalnye = str_replace("<p>&nbsp;</p>","",$soalnye);
									echo "	
										<table width=100% border=0>
										<tr>
											<td width=30px valign=top><p>$nomer.</p></td>
											<td colspan=2 valign=top><p>$soalnye</p>$gambarsoalnye</td>
											
										</tr></table>
										<table width=100% border=0>
										<tr>											
											<td width=30px valign=top>&nbsp;</td>
											<td width=4px valign=top>A.</td>
											<td width=300px colspan=2 valign=top>$ambilfile1 $Jawab1</td>
										
										    <td width=30px valign=top>&nbsp;</td>
											<td width=4px valign=top>C.</td>
											<td width=300px colspan=2 valign=top>$Jawab3 $ambilfile3 </td>
											
											
													
										
										</tr>
										<tr><td width=30px>&nbsp;</td>
											<td width=4px valign=top>B.&nbsp;</td>
											<td width=300px colspan=2>$Jawab2 $ambilfile2</td>			
										    <td width=30px>&nbsp;</td>
											<td width=4px valign=top>D.</td>
											<td width=300px colspan=2>$Jawab4 $ambilfile4</td>	
										</tr><br/>
										</table>";
									} elseif($jumpil=='5' && $js=='1'){ 
										if($sp['XKunciJawaban']=='1'){$kunci1 = "<img src='images/benar.png' width=20px>";} else {$kunci1="";}
										if($sp['XKunciJawaban']=='2'){$kunci2 = "<img src='images/benar.png' width=20px>";} else {$kunci2="";}
										if($sp['XKunciJawaban']=='3'){$kunci3 = "<img src='images/benar.png' width=20px>";} else {$kunci3="";}
										if($sp['XKunciJawaban']=='4'){$kunci4 = "<img src='images/benar.png' width=20px>";} else {$kunci4="";}
										if($sp['XKunciJawaban']=='5'){$kunci5 = "<img src='images/benar.png' width=20px>";} else {$kunci5="";}
									
									$Jawab1 = str_replace("<p>","",$sp['XJawab1']);
									$Jawab1 = str_replace("</p>","",$Jawab1);		
									$Jawab1 = str_replace("<span class='fontstyle0'>","",$Jawab1);	
									$Jawab1 = str_replace("</span>","",$Jawab1);
									$Jawab1 = str_replace("<br /><br />","",$Jawab1);
									
									$Jawab2 = str_replace("<p>","",$sp['XJawab2']);
									$Jawab2 = str_replace("</p>","",$Jawab2);		
									$Jawab2 = str_replace("<span class='fontstyle0'>","",$Jawab2);	
									$Jawab2 = str_replace("</span>","",$Jawab2);
									$Jawab2 = str_replace("<br /><br />","",$Jawab2);
									
									$Jawab3 = str_replace("<p>","",$sp['XJawab3']);
									$Jawab3 = str_replace("</p>","",$Jawab3);		
									$Jawab3 = str_replace("<span class='fontstyle0'>","",$Jawab3);	
									$Jawab3 = str_replace("</span>","",$Jawab3);
									$Jawab3 = str_replace("<br /><br />","",$Jawab3);									
									
									$Jawab4 = str_replace("<p>","",$sp['XJawab4']);
									$Jawab4 = str_replace("</p>","",$Jawab4);		
									$Jawab4 = str_replace("<span class='fontstyle0'>","",$Jawab4);	
									$Jawab4 = str_replace("</span>","",$Jawab4);
									$Jawab4 = str_replace("<br /><br />","",$Jawab4);
									
									$Jawab5 = str_replace("<p>","",$sp['XJawab5']);
									$Jawab5 = str_replace("</p>","",$Jawab5);		
									$Jawab5 = str_replace("<span class='fontstyle0'>","",$Jawab5);	
									$Jawab5 = str_replace("</span>","",$Jawab5);
									$Jawab5 = str_replace("<br /><br />","",$Jawab5);
									
									$soalnye=$sp['XTanya'];	
									$soalnye = str_replace("<span class='fontstyle0'>","",$soalnye);	
									$soalnye = str_replace("</span>","",$soalnye);
									$soalnye = str_replace("`","'",$soalnye);
									$soalnye = str_replace("<p>&nbsp;</p>","",$soalnye);
									echo "	
										
											<table width=100% border=0>
										<tr>
											<td width=30px valign=top><p>$nomer.</p></td>
											<td colspan=2 valign=top><p>$soalnye</p>$gambarsoalnye</td>
											
										</tr></table>
										<table width=100% border=0>
										
										<tr>											
											<td width=30px valign=top>&nbsp;</td>
											<td width=4px valign=top>A.</td>
											<td width=300px colspan=2 valign=top>$ambilfile1 $Jawab1</td>
										
										    <td width=30px valign=top>&nbsp;</td>
											<td width=4px valign=top>C.</td>
											<td width=300px colspan=2 valign=top>$Jawab3 $ambilfile3 </td>
											
											<td width=30px valign=top>&nbsp;</td>
											<td width=4px valign=top>E.</td>
											<td width=300px colspan=2 valign=top>$Jawab5 $ambilfile5 </td>
										    
													
										
										</tr>
										<tr><td width=30px>&nbsp;</td>
											<td width=4px valign=top>B.&nbsp;</td>
											<td width=300px colspan=2>$Jawab2 $ambilfile2</td>			
										    <td width=30px>&nbsp;</td>
											<td width=4px valign=top>D.</td>
											<td width=300px colspan=2>$Jawab4 $ambilfile4</td>	
										</tr>
										</table></br>";
									}			
			$nomer++;
			}
			?>            
           
</table>
<h3 class="panel-title">
<b>II.Jawab pertanyaan berikut secara ringkas dan jelas!</b>
</h3>
<table >
			<?php
			$no = 1;
			$sql = mysql_query("SELECT s.*, p.*, s.XJenisSoal as XJenisSoal FROM cbt_soal s 
					LEFT JOIN cbt_paketsoal p ON p.XKodeSoal = s. XKodeSoal  
					WHERE p.XKodeSoal = '$var_soal' and s.XJenisSoal='2' order by XNomerSoal");				
			while($sp = mysql_fetch_array($sql))
			{	
				$jumpil = $sp['XJumPilihan'];
				
				if(!$sp['XGambarTanya']=='')
				{
					$gambarsoalnye = "<img src='../../pictures/$sp[XGambarTanya]'  align=center width=160px><br>";
				}
				else
				{
					$gambarsoalnye = "";
				}
				if(!$sp['XAudioTanya']=='')
				{
					$audiosoalnye = "$sp[XAudioTanya]<br>";} else {$audiosoalnye = "";
				}
				if(!$sp['XVideoTanya']=='')
				{
					$videosoalnye = "$sp[XVideoTanya]<br>";
				} 
				else 
				{
					$videosoalnye = "";
				}
				echo "	
					<table width=100% border=0><tr>
					<td width=30px valign=top><p>$no.</p></td>
					<td colspan=2 valign=top><p>$gambarsoalnye</p>$sp[XTanya]</td>
					</tr><br/>
					</table>";
				$no++;
			}			

			?>            
            <?php 
			$ta =mysql_query('select * FROM cbt_setid WHERE XStatus="1"');
			$ta2=mysql_fetch_array($ta);
			
			echo "<div id='print-footer'>					
					<div>Tahun Pelajaran : $ta2[XKodeAY]</div>
				</div>";
			?>
</table>     
</body>
</html>