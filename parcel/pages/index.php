<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
include "../../config/server.php";
$sql = mysql_query("select * from cbt_admin");
$xadm = mysql_fetch_array($sql);
$skull= $xadm['XSekolah'];
$skul_pic= $xadm['XLogo'];
$admpic= $xadm['XPicAdmin']; 
$skul_ban= $xadm['XBanner']; 
$skul_tkt= $xadm['XTingkat']; 
$skul_warna= $xadm['XWarna']; 
$skul_web= $xadm['XWeb']; 
$skul_alamat= $xadm['XAlamat']; 
$skul_tlp= $xadm['XTelp']; 
$skul_email= $xadm['XEmail']; 
$skul_prop= $xadm['XProp']; 
$server= $xadm['XFax']; 
$skul_adm= strtoupper($xadm['XAdmin']); 
$status_server = 1;
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CBT <?php echo "$skull"; ?></title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
   
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="date/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="./src/jquery-1.4.js"></script>
	<link rel="stylesheet" href="../vendor/sweetalert2/assets/bootstrap4-buttons.css">
	<link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
	<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
	
	
	
	
		<script src="./src/jquery.datetimepicker.full.js"></script>
	
    
		<link rel="stylesheet" type="text/css" href="./src/jquery.datetimepicker.css"/>
		<style type="text/css">

		.custom-date-style {
			background-color: red !important;
		}

		.input{	
		}
		.input-wide{
			width: 500px;
		}
		header{
			background:<?php echo "$xadm[XWarna]"; ?>;
			padding:10px;	
			color:#fff;
			font-family:"open sans";
			overflow:hidden;
			margin: 0;
		}			
 
		.judul{
			float: left;
			margin: 0;
			font-family:Calibri;
			
		}
 
		.menu{
			position: fixed;
			background: #f6f6f6;
			color: #232323;			
			height: 100%;
			width: 230px;
			top: 0;
			left: -300px;
			-webkit-transition: left 0.2s;
			transition: left 0.2s;
			padding: 10px;
			border: 1px solid #ccc;	
			z-index:9999;
		}
 
		.menu ul{
			padding: 0px;
		}
 
		.menu li{
			list-style-type: none;
			padding: 2px;
		}
 
		.menu a{
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
 
		.tombol{
			float: right;
			background: transparent;
			padding: 10px;
			color: #fff;
			border: 1px solid #fff;
			cursor: pointer;
		}
 
		.slide-menu-tampil{
			left: 0 !important;
		}
		.footer{
		position:relative;
		margin-top:-150px;		
		height:150px;
		clear:both;
		padding-top:20px;
		}
		
		</style>
</head>

 <?php 
 $tgljam = date("d/m/Y H:i");  
 $tgl = date("d/m/Y"); 
 $Dd= date("D");
	if ($Dd=="Sun"){$hari="Minggu";}
	else if ($Dd=="Mon"){$hari="Senin, ";}
	else if ($Dd=="Tue"){$hari="Selasa, ";}
	else if ($Dd=="Wed"){$hari="Rabu, ";}
	else if ($Dd=="Thu"){$hari="Kamis, ";}
	else if ($Dd=="Fri"){$hari="Jum'at, ";}
	else if ($Dd=="Sat"){$hari="Sabtu, ";}
	else {$hari=$Dd;}
	
 ?>
 
  
		<script src="./src/jquery.datetimepicker.full.js"></script>
	
    
		<link rel="stylesheet" type="text/css" href="./src/jquery.datetimepicker.css"/>

 <script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/
$.noConflict();
jQuery( document ).ready(function( $ ) {
$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
	$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
	$.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
$('.some_class').datetimepicker();
$('#default_datetimepicker').datetimepicker({
	formatTime:'H:i',
	//formatDate:'d.m.Y',
	formatDate:'d.m.Y',
	//defaultDate:'8.12.1986', // it's my birthday
	defaultDate:'+03.01.1970', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});
$('#tanggal1').datetimepicker({
	timepicker:false,
	format:'m/d/Y',
	formatDate:'d/m/Y',
});
$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});
$('#mulai1').datetimepicker({
	datepicker:false,
	format:'H.i',
	step:5
});
$('#akhir1').datetimepicker({
	datepicker:false,
	format:'H.i',
	step:5
});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})
        }); 

</script>
<body style="background-color:#fff; font-family:'Open Sans', sans-serif; font-weight:600">

<header class="visible-xs">
	<h1 class="judul"><a  href="?"><img alt="Brand" src="../../images/<?php echo "$skul_ban"; ?>" height="35px"></a></h1>
	<button id="tombol" class="tombol"> <i class="fa fa-home fa-1x"></i> </button>
	<nav id="menu" class="menu" style="overflow-y:auto;">    
	
	<div class="panel panel-default">
        <ul class="metismenu nav " id="metis">
		<?php
								if($_COOKIE['beelogin']=="admin"){?>
                                
                               <li >
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=menu_setupsistem"><i class="fa fa-gears fa-fw fa-2x"></i> Pengaturan Sistem</a>
                                
								</li>
                                <!-- /.nav-second-level -->
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_siswa"><i class="fa fa-fw fa-group fa-2x"></i> Peserta Ujian</a>                               
							    </li> 
						        <li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_soal"><i class="fa fa-fax fa-fw fa-2x"></i> Bank Soal</a>
                                </li>                                                                           
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_tesbaru"><i class="fa fa-fw fa-clock-o fa-2x"></i> Setting Ujian</a> </li>
                                
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_peserta"><i class="fa  fa-fw fa-user fa-2x"></i> Status Peserta</a></li>
					            <li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=aktifkan_jadwaltes"><i class="fa fa-fw fa-refresh fa-2x"></i> Reset Login Peserta</a>  
                                </li>
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=menu_cetak"><i class="glyphicon glyphicon-print fa-fw fa-2x"></i> Cetak Kartu</a>
                               
                                </li>     
					            <li><a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=analisasoal"><i class="fa fa-edit fa-fw fa-2x"></i> Analisa Hasil</a>
                                
                                </li> 
								 <li>
                                   
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=backup"><i class="fa fa-fw fa-database fa-2x"></i> Backup & Restore</a>                               
							    </li>
								
								
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="#" data-toggle="modal" data-target="#KELUAR"><i class="fa  fa-fw fa-sign-out fa-2x"></i> Log Out</a>
                                </li>
						       
								<?php } 
								if($_COOKIE['beelogin']=="guru"){?>
                                
                                 <li>
								 <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_soal"><i class="fa fa-briefcase fa-fw fa-2x"></i> Bank Soal</a>                               
								 </li>
                                 <li>
                                 <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=upl_filesoal"><i class="fa fa-music fa-fw fa-2x"></i> File Pendukung Soal</a>                                
								 </li>
                                 <li>
                                    <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=upl_tugas"><i class="fa fa-cloud-upload fa-fw fa-2x"></i> Upload Nilai Tugas</a>                               
								 </li>                                
                                                              
                           
							    
						        
								
								<li>
                                    <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=analisasoal" ><i class="fa fa-check-square fa-fw fa-2x"></i> Analisa Hasil Tes</a>
                                </li>
                                <li>
                                    <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="#" data-toggle="modal" data-target="#myCetakHasil"><i class="fa fa-print fa-fw fa-2x"></i> Rekap Semua Nilai</a>
                                </li>
                                
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="#" data-toggle="modal" data-target="#KELUAR"><i class="fa  fa-sign-out fa-fw fa-2x"></i> Log Out</a>
                                </li>
						       
								<?php } ?>                      
		</ul>
		</div>
        </nav>
</header>

<?php $sql10 = mysql_query("select * from cbt_user WHERE Username='$_COOKIE[beeuser]'");
$re = mysql_fetch_array($sql10);
$poto  = $re['XPoto']; 
$login = $re['login'];
$nama  =$re['Nama'];
if($poto==''){
	  $gambar="avatar.gif";
  } else{
	  $gambar=$poto;
  } 
if($login=='1'){
	  $ucap="CBT Administrator";
  } else{
	  $ucap="CBT Guru";
  } ?> 

 
 
<nav class="navbar navbar-default navbar-static-top hidden-xs">
	<div class="container-fluid" style="background-color:<?php echo "$xadm[XWarna]"; ?>">
		<div class="navbar-header">
			
			<a class="navbar-brand" href="?"><img alt="Brand" src="../../images/<?php echo "$skul_ban"; ?>"></a>
		</div>
		
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="?modul=edit_biodata"><img src="photo/<?php echo "$gambar"; ?>" style="margin-top:0px; height:35px; overflow:hidden;"> </a></li>
				<li>
				<a  href="#" style="color:#fff;font#fff;font-size:35px;margin-top:7px">AKTIF</a>
				</li>
				
				
          </ul>
			
		
	</div>
</nav>
			
<?php
			if(!isset($_REQUEST['modul'])||$_REQUEST['modul']==''){
			$bread = "Beranda";
			}	
			elseif($_REQUEST['modul']=="info_skul"){
			$bread = "Update Data Sekolah";
			}	
			elseif($_REQUEST['modul']=="backup"){
			$bread = "Backup Data Ujian";
			}
			elseif($_REQUEST['modul']=="menu_setupsistem"){
			$bread = "Pengaturan Awal Sistem";
			}
			elseif($_REQUEST['modul']=="daftar_tesbaru"){
			$bread = "Setting Ujian";
			}	
			elseif($_REQUEST['modul']=="daftar_peserta"){
			$bread = "Status Peserta";
			}	
			elseif($_REQUEST['modul']=="aktifkan_jadwaltes"){
			$bread = "Reset Peserta";
			}	
			elseif($_REQUEST['modul']=="upl_kelas"||$_REQUEST['modul']=="uploadkelas"){
			$bread = "Upload Kelas";
			}		
			elseif($_REQUEST['modul']=="upl_mapel"||$_REQUEST['modul']=="uploadmapel"){
			$bread = "Upload Mapel";
			}	
			elseif($_REQUEST['modul']=="upl_siswa"||$_REQUEST['modul']=="uploadsiswa"){
			$bread = "Upload Siswa";
			}
			elseif($_REQUEST['modul']=="upl_siswa"||$_REQUEST['modul']=="uploadsiswa"){
			$bread = "Upload Siswa";
			}	
			elseif($_REQUEST['modul']=="daftar_siswa"){
			$bread = "Daftar Siswa";
			}	
			elseif($_REQUEST['modul']=="daftar_kelas"){
			$bread = "Daftar Kelas";
			}			
			elseif($_REQUEST['modul']=="daftar_mapel"){
			$bread = "Daftar Mata Pelajaran";
			}			
			elseif($_REQUEST['modul']=="buat_soal"){
			$bread = "Bank Soal";
			}			
			elseif($_REQUEST['modul']=="upl_foto"||$_REQUEST['modul']=="upload_foto"){
			$bread = "Upload Foto Peserta";
			}	
			elseif($_REQUEST['modul']=="status_tes"){
			$bread = "Status Tes";
			}		
            
			elseif($_REQUEST['modul']=="daftar_soal"){
			$bread = "Bank Soal";
			}	
			elseif($_REQUEST['modul']=="upl_soal"){
			$bread = "<a href=?modul=buat_soal&soal=$_REQUEST[soal]>Bank Soal</a> &#8226; Upload File Template";
			}			
			elseif($_REQUEST['modul']=="edit_soal"){
			$bread = "<a href=?modul=buat_soal&soal=$_REQUEST[soal]>Bank Soal</a> &#8226; Daftar Edit Soal";
			}
			elseif($_REQUEST['modul']=="edit_data_soal"){
			$bread = "<a href=?modul=buat_soal&soal=$_REQUEST[soal]>Bank Soal</a> &#8226; <a href=?modul=edit_soal&soal=$_REQUEST[soal]>Daftar Soal</a>  &#8226; Edit Soal";
			}																									
			?>

			<!-- Breadcrumb margin : atas-kiri-bawah-kanan !-->
			<div id="headtop" class="hidden-xs" style="width:98%; margin:1px 1px 1px 15px; height:60px;  border-bottom-color:#e4e4e2; font-size:20px; padding:10px; border-bottom:1px solid #e1dede">
			<a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?"><i class="fa fa-home fa-2x"></i> Dashboard </a>&#8226; <?php
			if(isset($bread)){
			 echo $bread;} ?>
			<div style="float:right; margin-top:5px">
			<label class="label label-danger"><?php echo $hari; echo date('d M Y'); echo "&nbsp;&nbsp;";?><span id="clockDisplay"></span></label>
			</div>
			 </div>
			 <script>
			function renderTime(){
				 var currentTime = new Date();
				 var h = currentTime.getHours();
				 var m = currentTime.getMinutes();
				 var s = currentTime.getSeconds();
				 if (h == 0){h = 24;}
				 if (h < 10){h = "0" + h;}
				 if (m < 10){m = "0" + m;}
				 if (s < 10){s = "0" + s;}
				 var myClock = document.getElementById('clockDisplay');
				 myClock.textContent = h + ":" + m + ":" + s + "";    
				 setTimeout ('renderTime()',1000);}
			renderTime();
			</script>
			<div style="width:100%; background-color:#fff; border-bottom-color:#e4e4e2;">
			<!-- /#headtop-->
			<div id="wrapper" style="width:98%; margin-left:10px;height:100%; ">
			<div class="navbar-default sidebar hidden-xs " role="navigation"  style="margin-top:15px; border:thin; border-top-color:#CCCCCC;">
			 <div class="sidebar-nav navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav nav-pills nav-stacked" id="side-menu">

	
								<?php
								if($_COOKIE['beelogin']=="admin"){?>
                                

                               <li >
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=menu_setupsistem"><i class="fa fa-gears fa-fw fa-2x"></i> Pengaturan Sistem</a>
                                
								</li>
                                <!-- /.nav-second-level -->
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_siswa"><i class="fa fa-fw fa-group fa-2x"></i> Peserta Ujian</a>                               
							    </li> 
						        <li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_soal"><i class="fa fa-fax fa-fw fa-2x"></i> Bank Soal</a>
                                </li>                                                                           
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_tesbaru"><i class="fa fa-fw fa-clock-o fa-2x"></i> Setting Ujian</a> </li>
                                
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_peserta"><i class="fa  fa-fw fa-user fa-2x"></i> Status Peserta</a></li>
					            <li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=aktifkan_jadwaltes"><i class="fa fa-fw fa-refresh fa-2x"></i> Reset Login Peserta</a>  
                                </li>
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=menu_cetak"><i class="glyphicon glyphicon-print fa-fw fa-2x"></i> Cetak Kartu</a>
                               
                                </li>     
					            <li><a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=analisasoal"><i class="fa fa-edit fa-fw fa-2x"></i> Analisa Hasil</a>
                                
                                </li> 
								 <li>
                                   
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=backup"><i class="fa fa-fw fa-database fa-2x"></i> Backup & Restore</a>                               
							    </li>
								
								
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="#" data-toggle="modal" data-target="#KELUAR"><i class="fa  fa-fw fa-sign-out fa-2x"></i> Log Out</a>
                                </li>
						       
								<?php } 
								if($_COOKIE['beelogin']=="guru"){?>
                                
                                 <li>
								 <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=daftar_soal"><i class="fa fa-briefcase fa-fw fa-2x"></i> Bank Soal</a>                               
								 </li>
                                 <li>
                                 <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=upl_filesoal"><i class="fa fa-music fa-fw fa-2x"></i> File Pendukung Soal</a>                                
								 </li>
                                 <li>
                                    <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=upl_tugas"><i class="fa fa-cloud-upload fa-fw fa-2x"></i> Upload Nilai Tugas</a>                               
								 </li>                                
                                                              
                           
							    
						        
								
								<li>
                                    <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="?modul=analisasoal" ><i class="fa fa-check-square fa-fw fa-2x"></i> Analisa Hasil Tes</a>
                                </li>
                                <li>
                                    <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="#" data-toggle="modal" data-target="#myCetakHasil"><i class="fa fa-print fa-fw fa-2x"></i> Rekap Semua Nilai</a>
                                </li>
                                
								<li>
                                <a style="color:<?php echo "$xadm[XWarna]"; ?>" href="#" data-toggle="modal" data-target="#KELUAR"><i class="fa  fa-sign-out fa-fw fa-2x"></i> Log Out</a>
                                </li>
						       
 
								<?php } ?>                                         
                                </ul>
								<!-- /.navbar-static-side -->
							</nav>
								</div>
								<!-- /.sidebar-collapse -->
								</div>


        	<div id="page-wrapper">
  			<?php
			if(isset($_REQUEST['modul'])==""){
			include "none.php";
			}
			elseif($_REQUEST['modul']=="menu_setupsistem"){
			include "menu_setupsistem.php";
			}
			elseif($_REQUEST['modul']=="menu_cetak"){
			include "menu_cetak.php";
			}
			elseif($_REQUEST['modul']=="menu_analisa"){
			include "menu_analisa.php";
			}	
			elseif($_REQUEST['modul']=="info_skul"){
			include "upl_skul.php";
			}	
			elseif($_REQUEST['modul']=="detilsiswa"){
			include "detil_siswa.php";
			}				
			elseif($_REQUEST['modul']=="status_tes"){
			include "status_tes.php";
			}
			elseif($_REQUEST['modul']=="edit_biodata"){
			include "edit_biodata.php";
			}
			elseif($_REQUEST['modul']=="pilih_banksoal"){
			//include "pilih_banksoal.php";
			include "buat_paketbaru.php";
			}	
			elseif($_REQUEST['modul']=="buat_paketsoal"){
			//include "pilih_banksoal.php";
			include "buat_paketbaru.php";
			}	
			elseif($_REQUEST['modul']=="daftar_waktu"){
			include "daftar_waktu.php";
			}			
			elseif($_REQUEST['modul']=="daftar_kelas"){
			include "daftar_kelas.php";
			}
			elseif($_REQUEST['modul']=="update_tugas"){
			include "update_tugas.php";
			}
			elseif($_REQUEST['modul']=="daftar_mapel"){
			include "daftar_mapel.php";
			}
			elseif($_REQUEST['modul']=="daftar_tahunakademik"){
			include "daftar_tahunakademik.php";
			}
			elseif($_REQUEST['modul']=="daftar_siswa"){
			include "daftar_siswa.php";
			}
			elseif($_REQUEST['modul']=="daftar_jurusan"){
			include "daftar_jurusan.php";
			}
			elseif($_REQUEST['modul']=="daftar_tingkat"){
			include "daftar_level.php";
			}
			elseif($_REQUEST['modul']=="daftar_sesi"){
			include "daftar_sesi.php";
			}
			elseif($_REQUEST['modul']=="daftar_pilihan"){
			include "daftar_pilihan.php";
			}
			elseif($_REQUEST['modul']=="daftar_ruang"){
			include "daftar_ruang.php";
			}
			elseif($_REQUEST['modul']=="daftar_agama"){
			include "daftar_agama.php";
			}
			elseif($_REQUEST['modul']=="daftar_soal"){
			include "daftar_soal.php";
			}		
			elseif($_REQUEST['modul']=="daftar_tesbaru"){
			include "daftar_tesbaru.php";
			}	
			elseif($_REQUEST['modul']=="daftar_peserta"){
			include "daftar_peserta.php";
			}
			elseif($_REQUEST['modul']=="reset_peserta"){
			include "resetpeserta.php";
			}		
           elseif($_REQUEST['modul']=="list_soal"){
			include "list_soal.php";
			}			
			elseif($_REQUEST['modul']=="buat_soal"){
			include "buat_banksoal.php";
			}
			elseif($_REQUEST['modul']=="data_skul"){
			include "daftar_sekolah.php";
			}		
			elseif($_REQUEST['modul']=="upl_soal"){
			include "upload_soal.php";
			}
			elseif($_REQUEST['modul']=="upl_filesoal"){
			//include "bee_upload.php";
			include "upload_file.php";
			}
			elseif($_REQUEST['modul']=="upl_foto"){
			include "upload_foto.php";
			}	
			elseif($_REQUEST['modul']=="upload_filesoal"){
			include "upload_filesoal.php";
			}	
			elseif($_REQUEST['modul']=="upl_kelas"||$_REQUEST['modul']=="uploadkelas"){
			include "upload_kelas.php";
			}		
			elseif($_REQUEST['modul']=="upl_mapel"||$_REQUEST['modul']=="uploadmapel"){
			include "upload_mapel.php";
			}	
			elseif($_REQUEST['modul']=="upl_siswa"||$_REQUEST['modul']=="uploadsiswa"){
			include "upload_siswa.php";
			}
			elseif($_REQUEST['modul']=="upl_soal"||$_REQUEST['modul']=="uploadsoal"){
			include "upload_soal.php";
			}	
			elseif($_REQUEST['modul']=="upl_tugas"||$_REQUEST['modul']=="uploadtugas"){
			include "upload_tugas.php";
			}				
			elseif($_REQUEST['modul']=="data_user"||$_REQUEST['modul']=="hapus_user"){
			include "daftar_user.php";
			}		
			elseif($_REQUEST['modul']=="tambah_soal"){
				if($_REQUEST['jum']==5){
				include "tambah_soalpg.php";}
				elseif($_REQUEST['jum']==4){
				include "tambah_soalpg.php";
				}
				elseif($_REQUEST['jum']==1){
				include "tambah_soal_esai.php";
				}			
			}
			elseif($_REQUEST['modul']=="edit_soal"){
				//include "database_soal_edit.php";
				include "edit_daftar_soal.php";
			}			
			elseif($_REQUEST['modul']=="edit_soal_esai"){
				//include "database_soal_edit.php";
				include "edit_bank_soal.php";
			}			
			elseif($_REQUEST['modul']=="edit_data_soal"){
				if($_REQUEST['jum']==5){
				include "edit_bank_soalPG.php";}
				elseif($_REQUEST['jum']==4){
				include "edit_bank_soalPG.php";
				}
				elseif($_REQUEST['jum']==1){
				include "edit_bank_soal.php";
				}									
			
			}
			elseif($_REQUEST['modul']=="hapus_nosoal"){
			include "hapus_nosoal.php";
			}	
			elseif($_REQUEST['modul']=="aktifkan_jadwaltes"){
			include "daftar_tes.php";
			}				
			elseif($_REQUEST['modul']=="cetak_kartu"){
			include "cetak_kartu.php";
			}		
            elseif($_REQUEST['modul']=="cetak_kartuuts"){
			include "cetak_kartuuts.php";
			}	
            elseif($_REQUEST['modul']=="cetak_kartuus"){
			include "cetak_kartuus.php";
			}				
			elseif($_REQUEST['modul']=="cetak_absensi"){
			include "cetak_absen.php";
			}	
			elseif($_REQUEST['modul']=="cetak_berita"){
			include "cetak_berita.php";
			}	
			elseif($_REQUEST['modul']=="psb_new"){
			include "psb_new.php";
			}
			elseif($_REQUEST['modul']=="lap_psb"){
			include "lap_psb.php";
			}
			elseif($_REQUEST['modul']=="ubah_soal3"){
			include "ubah_soal3.php";
			}
			elseif($_REQUEST['modul']=="cetak_hasil"){
			include "cetak_hasil_all.php";
			}
			elseif($_REQUEST['modul']=="cetak_UAS"){
			include "cetak_hasil_UAS.php";
			}
			elseif($_REQUEST['modul']=="cetak_UTS"){
			include "cetak_hasil_UTS.php";
			}	
			elseif($_REQUEST['modul']=="hasil_peserta"){
			include "cetak_hasil_analisa.php";
			}			
			elseif($_REQUEST['modul']=="jawabansiswa"){
			include "jawabansiswa.php";
			}	
			elseif($_REQUEST['modul']=="jawabanesai"){
			include "jawabanesai_siswa.php";
			}	

			elseif($_REQUEST['modul']=="analisasoal"){
			include "analisa_soal.php";
			}	
			elseif($_REQUEST['modul']=="analisajawaban"){
			include "analisa_jawaban.php";
			}																																																								
			elseif($_REQUEST['modul']=="analisabutir"){
			include "analisa_butirsoal.php";
			}	
			elseif($_REQUEST['modul']=="multi"){
			include "tambahsoal/multi.php";
			}
			elseif($_REQUEST['modul']=="sebaran_nilai"){
			include "sebaran_nilai.php";
			}	
			elseif($_REQUEST['modul']=="lks"){
			include "lks.php";
			}	
			elseif($_REQUEST['modul']=="backup"){
			include "backup.php";
			}
			elseif($_REQUEST['modul']=="restore"){
			include "./database/restore.php";
			}
			elseif($_REQUEST['modul']=="backup_db"){
			include "./database/cbt_jawaban.php";
			}	
			elseif($_REQUEST['modul']=="edit_tes"){
			include "edit_tes.php";
			}	
			elseif($_REQUEST['modul']=="sinkron"||$_REQUEST['modul']=="sinkronsatu"){
			include "sinkron.php";
			}	
			elseif($_REQUEST['modul']=="hapus_data"){
			include "hapus_data.php";
			}
			elseif($_REQUEST['modul']=="berita_acara"){
			include "berita_acara.php";
			}	
            elseif($_REQUEST['modul']=="cetak_banksoal"){
			include "cetak_banksoal.php";
			}			
			/*
			elseif($_REQUEST['modul']=="backup"){
			include "../../database/cbt_jawaban.php";
			}*/				
			?>

            </div>
            <!-- /page wrapper -->                            

    </div>
    <!-- /#wrapper -->
</div>  

<div class="modal fade" id="myDaftarHadir" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label"><i class="glyphicon glyphicon-print"></i> | Daftar Hadir</h1>
                </div><form action="?modul=cetak_absensi" method="post">
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p><table width="100%">
							<tr height="30px"><td>Kode Sekolah</td><td>:                                 
                                <select id="server"  name="server">
<?php 
								$sqk = mysql_query("select * from server_sekolah group by XServerId");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XServerId]'>$rs[XServerId]</option>";
								} ?>                                
                                </select>
                                <tr height="30px"><td>Jurusan </td><td>:                                 
                                <select id="jur1"  name="jur1">
<?php 
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>
                                </td></tr> 
                                <tr height="30px"><td width="30%">Kelas </td><td>:
                                <select id="iki1"  name="iki1">
<?php 
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]'>$rs[XKodeKelas]</option>";
								} ?>                                
                                </select>
                                </td></tr>
                                <tr height="30px"><td width="30%">Sesi </td><td>:
                                <select id="sesi1"  name="sesi1">
<?php 
								$sqk = mysql_query("select * from cbt_sesi group by XSesi");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XSesi]'>$rs[XSesi]</option>";
								} ?>                                
                                </select>
                                </td></tr> 
								
                                <tr height="30px"><td width="30%">Ruang </td><td>:
                                <select id="ruang1"  name="ruang1">
<?php 
								$sqk = mysql_query("select * from cbt_ruang group by XRuang");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XRuang]'>$rs[XRuang]</option>";
								} ?>                                
                                </select>
                                </td></tr>					
								
								<tr height="30px"><td width="30%">Mata Pelajaran </td><td>:
                                <select id="mapel1"  name="mapel1">
<?php // edit Broo
								$sqk = mysql_query("select * from cbt_mapel group by XNamaMapel");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XNamaMapel]'>$rs[XNamaMapel]</option>";
								} ?>                              
								
                                </select>
                                </td></tr>
								<tr height="30px"><td width="30%">Tanggal </td><td>:
								<input id="tanggal1" name="tanggal1" type="text"/>
								<?php
								$tanggal1 = !empty($_POST['tanggal1']) ? $_POST['tanggal1'] : '';
								?> 
								<tr height="30px"><td width="30%">Jam Mulai </td><td>:
								<input id="mulai1" name="mulai1" type="text"/>
								<?php
								$mulai1 = !empty($_POST['mulai1']) ? $_POST['mulai1'] : '';
								?> 
                                </td></tr>
								<tr height="30px"><td width="30%">Jam Selesai </td><td>:
                                <input id="akhir1" name="akhir1" type="text"/>
								<?php
								$akhir1 = !empty($_POST['akhir1']) ? $_POST['akhir1'] : '';
								?> 
                                </td></tr>
                                </table>                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-6">
                           <button type="submit" class="btn btn-success btn-lg">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success btn-lg" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>

              <!-- Modal -->
<div class="modal fade" id="myCetakKartu" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label"><i class="glyphicon glyphicon-print"></i> | Kartu Ujian</h1>
                </div><form action="?modul=cetak_kartu" method="post">
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p><table width="100%">
                                <tr height="30px"><td>Jurusan </td><td>:                                 
                                <select id="jur2"  name="jur2">
								<?php 
									$sqk = mysql_query("select * from cbt_jurusan");
									while($rs = mysql_fetch_array($sqk)){
									echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>
								</td></tr> 
                                <tr><td width="30%">Kelas </td><td>:
                                <select id="iki2"  name="iki2">
								<?php 
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]'>$rs[XKodeKelas]</option>";
								} ?>                                
                                </select>
                                </td></tr>

                                </table>                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-6">
                           <button type="submit" class="btn btn-success btn-lg">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success btn-lg" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>


   <!-- Modal -->
<div class="modal fade" id="myCetakHasil" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label"><i class="glyphicon glyphicon-print"></i> | Hasil Ujian</h1>
                </div><form action="?modul=cetak_hasil" method="post">
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p><table width="100%">
<tr height="30px"><td>Jenis Tes</td><td>:                                 
                                <select id="tes3"  name="tes3">
<?php 
								//$sqk = mysql_query("select * from cbt_tes");
								//while($rs = mysql_fetch_array($sqk)){
								echo "<option value='A' selected>Semua</option>";								
								//while($rs = mysql_fetch_array($sqk)){
                             	//echo "<option value=$rs[XKodeUjian]>$rs[XNamaUjian]</option>";
								//} 
								?>                                
                                </select>
</td></tr>        
                                <tr><td width="30%">Semester</td><td>:
                                <select id="sem3"  name="sem3">
<?php 
  							   echo "<option value=1>Ganjil</option>";
                               echo "<option value=2>Genap</option>";
								?>                                
                                </select>
                                </td></tr>
                     
                                <tr height="30px"><td>Jurusan </td><td>:                                 
                                <select id="jur3"  name="jur3">
<?php 
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>
</td></tr> 
                                <tr><td width="30%">Kelas </td><td>:
                                <select id="iki3"  name="iki3">
<?php 
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]'>$rs[XKodeKelas]</option>";
								} ?>                                
                                </select>
                                </td></tr>
                                <tr height="30px"><td>Mata Pelajaran </td><td>:                                 
                                <select id="map3"  name="map3">
<?php 
								$sqk = mysql_query("select * from cbt_mapel");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeMapel]'>$rs[XNamaMapel]</option>";
								} ?>                                
                                </select>
</td></tr> 
                                </table>                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-6">
                           <button type="submit" class="btn btn-info">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-info" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>

    <!-- Modal UAS-->
<div class="modal fade" id="myCetakUAS" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label"><i class="glyphicon glyphicon-print"></i> | Hasil Ujian</h1>
                </div><form action="?modul=cetak_UAS" method="post">
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p><table width="100%">
<tr height="30px"><td>Jenis Tes</td><td>:                                 
                                <select id="tes3"  name="tes3">
<?php 
								//$sqk = mysql_query("select * from cbt_tes");
								echo "<option value='UAS' >UAS</option>";																							
								//while($rs = mysql_fetch_array($sqk)){
                             	//echo "<option value=$rs[XKodeUjian]>$rs[XNamaUjian]</option>";
								//} 
								?>                                
                                </select>
</td></tr>        
                                <tr><td width="30%">Semester</td><td>:
                                <select id="sem3"  name="sem3">
<?php 

  							   echo "<option value=1>Ganjil</option>";
                               echo "<option value=2>Genap</option>";

								?>                                
                                </select>
                                </td></tr>
                     
                                <tr height="30px"><td>Jurusan </td><td>:                                 
                                <select id="jur3"  name="jur3">
<?php 
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>
</td></tr> 
                                <tr><td width="30%">Kelas </td><td>:
                                <select id="iki3"  name="iki3">
<?php 
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]'>$rs[XKodeKelas]</option>";
								} ?>                                
                                </select>
                                </td></tr>
                                <tr height="30px"><td>Mata Pelajaran </td><td>:                                 
                                <select id="map3"  name="map3">
<?php 
								$sqk = mysql_query("select * from cbt_mapel");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeMapel]'>$rs[XNamaMapel]</option>";
								} ?>                                
                                </select>
</td></tr> 
                                </table>                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-6">
						
                           <button type="submit" class="btn btn-success btn-lg">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success btn-lg" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>

    <!-- Modal UAS-->
<div class="modal fade" id="myCetakUTS" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label"><i class="glyphicon glyphicon-print"></i> | Hasil Ujian</h1>
                </div><form action="?modul=cetak_UTS" method="post">
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p><table width="100%">
<tr height="30px"><td>Jenis Tes</td><td>:                                 
                                <select id="tes3"  name="tes3">
<?php 
								//$sqk = mysql_query("select * from cbt_tes");
								echo "<option value='UTS' >UTS</option>";																							
								//while($rs = mysql_fetch_array($sqk)){
                             	//echo "<option value=$rs[XKodeUjian]>$rs[XNamaUjian]</option>";
								//} 
								?>                                
                                </select>
</td></tr>        
                                <tr><td width="30%">Semester</td><td>:
                                <select id="sem3"  name="sem3">
<?php 

  							   echo "<option value=1>Ganjil</option>";
                               echo "<option value=2>Genap</option>";

								?>                                
                                </select>
                                </td></tr>
                     
                                <tr height="30px"><td>Jurusan </td><td>:                                 
                                <select id="jur3"  name="jur3">
<?php 
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>
</td></tr> 
                                <tr><td width="30%">Kelas </td><td>:
                                <select id="iki3"  name="iki3">
<?php 
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]'>$rs[XKodeKelas]</option>";
								} ?>                                
                                </select>
                                </td></tr>
                                <tr height="30px"><td>Mata Pelajaran </td><td>:                                 
                                <select id="map3"  name="map3">
<?php 
								$sqk = mysql_query("select * from cbt_mapel");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeMapel]'>$rs[XNamaMapel]</option>";
								} ?>                                
                                </select>
</td></tr> 
                                </table>                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-6">
						
                           <button type="submit" class="btn btn-success btn-lg">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success btn-lg" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="KELUAR" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label"><i class="fa  fa-sign-out fa-3x"></i> <span style="font-size:35px">Konfirmasi Keluar</span></h1>
                </div>
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            Apakah anda yakin akan keluar dari halaman admin ini ????
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-6">
						
                           <a href="logout.php"><button class="btn btn-success">
                           <i class="fa  fa-sign-out"></i> Keluar</button></a>
                           <button type="submit" class="btn btn-danger" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- margin : atas-kiri-bawah-kanan !-->
<!--<div id="headtop"  style="width:98%; margin:0px 15px -50px 15px; height:60px; background-color:#fffefb; border-bottom-color:#e4e4e2; font-size:14px; padding:15px; text-align:center"><?php echo "$skull"; ?> | website: <?php echo "$skul_web"; ?> | Email : <?php echo "$skul_email"; ?> | Tlp : <?php echo "$skul_tlp"; ?>  </div>-->
<footer>
<div class="navbar navbar-inverse navbar-fixed-bottom" style="min-height:35px;background-color:<?php echo "$xadm[XWarna]"; ?>; border:0px">
<div class="container-fluid">
<ul class="nav navbar-nav hidden-xs" style="color:#fff; font-size:16px; margin-top:10px;">
<?php echo "$skull"; ?> | website: <?php echo "$skul_web"; ?> | Email : <?php echo "$skul_email"; ?>
</ul>
</div>
</div>
</footer>
<script src="../vendor/jquery/jquery.min.js"></script>
	 
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../vendor/raphael/raphael.min.js"></script>
   
   
	<script src="../dist/js/sb-admin-2.js"></script>
	<script src="../../js/jquery.wallform.js"></script>
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
<script>
  $(function () {

      $('#metis').metisMenu();

  });
</script>
<script>
	$(document).ready(function(){
	$('#tombol').click(function(evt){
		 evt.stopPropagation();
		$('#menu').toggleClass("slide-menu-tampil");
	});
	
	$('body,html').click(function(e){
	   var container = $("#menu");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.removeClass("slide-menu-tampil");

    }
	});
	
});
</script>
	
</body>

</html>
    <script>
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);
    </script>
    <!-- jQuery -->
	
	
	
	
    