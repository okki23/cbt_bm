<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>
<?php 
require('fpdf/fpdf.php'); 
include "../../config/server.php";
// pendefinisian folder font pada FPDF
// seperti sebelunya, kita membuat class anakan dari class FPDF
 class PDF extends FPDF{

function Header(){

$sqlad = mysql_query("select * from cbt_admin");
$ad = mysql_fetch_array($sqlad);
$namsek = strtoupper($ad['XSekolah']);
$kepsek = $ad['XKepSek'];
$logsek = $ad['XLogo'];
$sqk = mysql_query("select * from cbt_tahunakademik group by Xtahunakadmik");$row=mysql_fetch_array($sqk,MYSQL_ASSOC);
$tahun = $row['Xtahunakadmik'];
$sqk = mysql_query("select * from cbt_mapel where XKodeMapel = '$_REQUEST[mapz]'");
$rs = mysql_fetch_array($sqk);
$rs1 = strtoupper("$rs[XNamaMapel]");
$NilaiKKMe = $rs['XKKM'];

   $this->Image('../../images/'.$logsek,1,1,2.0); // logo
   $this->SetTextColor(0,0,0); // warna tulisan
   $this->SetFont('Arial','B','12'); // font yang digunakan
   // membuat cell dg panjang 19 dan align center 'C'
   $this->Cell(3,1,''); // cell dengan panjang 1
   $this->Cell(13,1,'DAFTAR NILAI UAS '. $namsek. '',0,0,'L',0);
   $this->SetFont('Arial','','10');     
   $this->Cell(0,1,'Hal. : '. $this->PageNo(),0,0,'R');
   
   $this->Ln(0.6);
   $this->SetFont('Arial','','10');     
   $this->Cell(3,1,''); // cell dengan panjang 1   
   $this->Cell(4,1,"Mata Pelajaran ",0,0,'L');
   $this->Cell(3,1,": ".$rs1,0,0,'L');   
   $this->Ln(0.5);
   $this->Cell(3,1,''); // cell dengan panjang 1   
   $this->Cell(4,1,"Kelas | Jurusan ",0,0,'L');
   $this->Cell(3,1,": ".$_REQUEST['kelz']." | ".$_REQUEST['jurz'],0,0,'L'); 
   $this->Ln(0.5);
   $this->Cell(3,1,''); // cell dengan panjang 1   
   $this->Cell(4,1,"Tahun Akademik ",0,0,'L');
   $this->Cell(3,1,": ".$tahun." Semester : ".$_REQUEST['semz'],0,0,'L');    
   $this->Ln(0.5);
   $this->Ln(1);
   $this->SetFont('Arial','B','9');
   $this->SetFillColor(192,192,192); // warna isi
   
   $this->SetTextColor(0,0,0); // warna teks untuk th
   $this->Cell(0.8,1,'No','LT',0,'C',1); // cell dengan panjang 1
   $this->Cell(2.2,1,'NIS','LT',0,'C',1); // cell dengan panjang 1
   $this->Cell(5.9,1,'Nama Siswa','LT',0,'C',1); // cell dengan panjang 3
   $this->Cell(2.0,1,'Ujian','LTB',0,'C',1); // cell dengan panjang 2   
   $this->Cell(2.0,1,'KKM','LT',0,'C',1); // cell dengan panjang 1
   $this->Cell(5.0,1,'Keterangan','LTR',0,'C',1); // cell dengan panjang 1
   
   // panjang cell bisa disesuaikan
   $this->Ln();      
     
   $this->SetTextColor(0,0,0); // warna teks untuk th
   $this->Cell(0.8,1,'','LB',0,'C',1); // cell dengan panjang 1
   $this->Cell(2.2,1,'','LB',0,'C',1); // cell dengan panjang 1
   $this->Cell(5.9,1,' ','LB',0,'C',1); // cell dengan panjang 8
   $this->Cell(2.0,1,'UAS','LTB',0,'C',1); // cell dengan panjang 2   
          
   $this->Cell(2.0,1,'','LB',0,'C',1); // cell dengan panjang 1
   $this->Cell(5.0,1,'','LBR',0,'C',1); // cell dengan panjang 1

   // panjang cell bisa disesuaikan
   $this->Ln();
   
   
  }

  function Footer(){
$sqlad = mysql_query("select * from cbt_admin");
$ad = mysql_fetch_array($sqlad);
$namsek = strtoupper($ad['XSekolah']);
$kepsek = $ad['XKepSek'];
$this->SetY(26.5); 
   $this->Cell(2,1,''); 
   $this->Cell(0,1,'Kepala Sekolah : ',0,0,'L');
   $this->Cell(0,1,'Guru  :                            ',0,0,'R');

	$this->SetY(28);  
   	$this->Cell(2,1,'');
	$this->Cell(0,1, '('.$kepsek.')',0,0,'L');
	$this->Cell(0,1,'( ____________________ )              ',0,0,'R');
	
  
  } 
 }
 
 
 $i = 0;
$nomz = 1;
if(isset($_REQUEST['kelz'])){ 
$cekQuery1 = mysql_query("SELECT * FROM cbt_siswa where XKodeKelas = '$_REQUEST[kelz]' and  XKodeJurusan = '$_REQUEST[jurz]'");
}else{
$cekQuery1 = mysql_query("SELECT * FROM cbt_siswa");
}
$jumlahNILAI = 0;
while($f= mysql_fetch_array($cekQuery1)){

$sto1 = mysql_query("
SELECT sum(XNilai) as totTO1, count(XNilai) as jujum2 FROM cbt_nilai where  (XKodeKelas = '$_REQUEST[kelz]' or XKodeKelas='ALL') and XNIK = '$f[XNIK]' and XKodeUjian = 'UAS' 
and	XKodeMapel = '$_REQUEST[mapz]' and XSemester = '$_REQUEST[semz]' ");
$to1 = mysql_fetch_array($sto1);
$tot1 = $to1['totTO1'];
if($tot1==""){ 
$TOP1 = "";
} else {
$TOP1 = number_format($tot1, 2, ',', '.');
}


$sqk = mysql_query("select * from cbt_mapel where XKodeMapel = '$_REQUEST[mapz]'");
$rs = mysql_fetch_array($sqk);
$NilaiKKMe = $rs['XKKM'];

$jto = mysql_query("
SELECT * FROM cbt_nilai where XNomerUjian = '$f[XNomerUjian]' and XKodeUjian='UAS' 
and	XKodeMapel = '$_REQUEST[mapz]' and XSemester = '$_REQUEST[semz]' ");

$jumlahNILAI = mysql_num_rows($jto);
if($jumlahNILAI<$NilaiKKMe){$keterangan="Remedial";}else{$keterangan="Tuntas";}
$TAkhire = $tot1;
if($jumlahNILAI==0 ){$keterangan = "Belum Ujian";$NilaiKKM = "";} else { $NilaiKKM = $NilaiKKMe;}
	
  $cell[$i][0]=$f[0];
  $cell[$i][1]=$f[2];
  $cell[$i][2]=$f[4];
  $cell[$i][3] =$TOP1;  
  $cell[$i][4]= $NilaiKKM; 
  $cell[$i][5]= $keterangan;  
       
  $i++;
 }
 // orientasi Potrait
 // ukuran cm
 // kertas A4
 $pdf = new PDF('P','cm','A4');
 $pdf->Open();
 $pdf->AliasNbPages();
 $pdf->AddPage();
 $pdf->SetAutoPageBreak('true',3);

 $pdf->SetFont('Arial','','8');
 //perulangan untuk membuat tabel
 for($j=0;$j<$i;$j++){
  $pdf->Cell(0.8,1,$j+1,'LB',0,'C');
  $pdf->Cell(2.2,1,$cell[$j][1],'LB',0,'C');
  $pdf->Cell(5.9,1,$cell[$j][2],'LB',0,'L');
  $pdf->Cell(2.0,1,$cell[$j][3],'LB',0,'C');  
  $pdf->Cell(2.0,1,$cell[$j][4],'LB',0,'C');
  $pdf->Cell(5.0,1,$cell[$j][5],'LBR',0,'C');  
 
 
  $pdf->Ln();
 }

 $pdf->Output(); // ditampilkan

?>