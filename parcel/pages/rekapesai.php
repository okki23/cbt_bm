<?php
if(!isset($_COOKIE['beeuser'])){
header("Location: login.php");}
$debug = 0;
require('fpdf/fpdf.php'); 
include "../../config/server.php";
// pendefinisian folder font pada FPDF
// seperti sebelunya, kita membuat class anakan dari class FPDF
 class PDF extends FPDF{

function Header(){

	$sqlmapel = mysql_query("select * from  cbt_mapel where XKodeMapel = '$_REQUEST[mapel]'"); 	
	$u = mysql_fetch_array($sqlmapel);
	$namamapel = $u['XNamaMapel'];

	
   // $this->Image('../../images/'.$logsek,1,1,2.0); // logo
    /*
   $this->SetTextColor(0,0,0); // warna tulisan
   $this->SetFont('Arial','B','12'); // font yang digunakan
   // membuat cell dg panjang 19 dan align center 'C'
   
   $this->Cell(3,1,''); // cell dengan panjang 1
   $this->Cell(3,1,"REKAP ESAI : $_REQUEST[soal]". $_asli,0,0,'L',0);
   */
   // $this->Line(20,1,1,1);
   $this->SetFont('Arial','','10');
   $this->Cell(0,1,"Mata Pelajaran : $namamapel",0,0,'L');
   $this->Cell(0,1,'Rekap Esai Hal. '. $this->PageNo(),0,0,'R');
  
   $this->Ln();
   $this->SetFillColor(255,255,255); // warna isi
   $this->Cell(19,0,'','TB',0,'',1);
   $this->Ln();
   
    /*
   $this->SetFont('Arial','','10');     
   $this->Cell(3,1,''); // cell dengan panjang 1   
   $this->Cell(4,1,"Mata Pelajaran ",0,0,'L');
   $this->Cell(3,1,": ".$rs1,0,0,'L');   
   $this->Ln(0.5);
   $this->Cell(3,1,''); // cell dengan panjang 1   
   $this->Cell(4,1,"Kelas | Jurusan ",0,0,'L');
   $this->Cell(3,1,": ".$_REQUEST['kelas']." | ".$_REQUEST['jur'],0,0,'L'); 
   $this->Ln(0.5);
   $this->Cell(3,1,''); // cell dengan panjang 1   
   $this->Cell(4,1,"Tahun Akademik ",0,0,'L');
   $this->Cell(3,1,": ".$_COOKIE['beetahun'],0,0,'L');    
   */
   /*
   $this->SetFont('Arial','B','9');
   $this->SetFillColor(192,192,192); // warna isi
   
   $this->SetTextColor(0,0,0); // warna teks untuk th
   // panjang cell bisa disesuaikan

   $this->Ln();      
     */
   // panjang cell bisa disesuaikan
   //$this->Ln();
   
  }
	function Footer(){
		//$this->SetFillColor(255,255,255); // warna isi
		//$this->Cell(19,0,'','TB',0,'',1);
	} 
 }

$kodesoal = $_REQUEST['soal'];
$hasil = mysql_query("SELECT *,u.XStatusUjian as ujsta,u.XTokenUjian as tokek, u.XNomerUjian as NU, c.XKodeMapel as Kopel, u.XKodeSoal as Koso, c.XSesi as seksi, s.XKodeJurusan as SJur,s.XKodeKelas as SKel
FROM cbt_siswa s
LEFT JOIN `cbt_siswa_ujian` u ON u.XNomerUjian = s.XNomerUjian
LEFT JOIN cbt_ujian c ON (u.XKodeSoal = c.XKodeSoal and u.XTokenUjian = c.XTokenUjian)
LEFT JOIN cbt_nilai n ON (n.XKodeSoal = c.XKodeSoal and n.XTokenUjian = c.XTokenUjian and n.XNIK = s.XNIK)
WHERE c.XKodeSoal = '$kodesoal' order by u.XNomerUjian");	
 
 $totalsiswa = mysql_num_rows($hasil);
 // orientasi Potrait
 // ukuran cm
 // kertas A4
 $pdf = new PDF('P','cm','A4');
 $pdf->Open();
 $pdf->AliasNbPages();
 $pdf->AddPage();
 $pdf->SetAutoPageBreak('true',3);

 $pdf->SetFont('Arial','','10');
 //perulangan untuk membuat tabel
 $jawax = "";

while($d=mysql_fetch_array($hasil)){
	
	$pdf->Cell(3,1,"Nomer Ujian",0,0,'L');
	$pdf->SetX(3.5);
	$pdf->Cell(3,1,": $d[XNomerUjian]",0,0,'L');
	$pdf->SetX(8);
	$pdf->Cell(3,1,"Nama",0,0,'L');
	$pdf->SetX(9.5);
	$pdf->Cell(4,1,": $d[XNamaSiswa]",0,0,'L');
	$pdf->Ln(0.5);
	$pdf->Cell(3,1,"Kelas",0,0,'L');
	$pdf->SetX(3.5);
	$pdf->Cell(3,1,": $d[SKel]",0,0,'L');
	$pdf->SetX(8);
	$pdf->Cell(3,1,"Jurusan",0,0,'L');
	$pdf->SetX(9.5);
	$pdf->Cell(3,1,": $d[SJur]",0,0,'L');
	$pdf->Ln(1);
	$pdf->Cell(4,1,"Jawaban Esai : ",0,0,'L');
	$pdf->Ln();
	$sqljawab = "SELECT XNomerSoal,XJawabanEsai FROM cbt_jawaban WHERE XKodeSoal = '$kodesoal' and XUserJawab = '$d[XNomerUjian]' and XTokenUjian = '$d[tokek]' and XJenisSoal='2'";
	$listjawab = mysql_query($sqljawab." order by XNomerSoal");
	while($xp = mysql_fetch_array($listjawab)){
		
		$pdf->Cell(1,0.5,"$xp[XNomerSoal].",0,0,'L');
		$pdf->Ln();
		$pdf->Write(0.5,"$xp[XJawabanEsai] $jawax");
		$pdf->Ln(1);
	}
	if ($totalsiswa>1) $pdf->AddPage();
 }

 $sqlmapel = mysql_query("select * from  cbt_mapel where XKodeMapel = '$_REQUEST[mapel]'"); 	
 $u = mysql_fetch_array($sqlmapel);
 $namamapel = $u['XNamaMapel'];
 
 $_namadoc = "REKAP_ESAI_".str_replace(" ","_",$namamapel).".PDF";
 $pdf->Output($_namadoc,'D'); // ditampilkan
 $pdf->Close();
?>