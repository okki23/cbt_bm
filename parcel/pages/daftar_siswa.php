<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
if(isset($_REQUEST['aksi'])){
//echo "delete from cbt_kelas where Urut = '$_REQUEST[urut]'";
$sql = mysql_query("delete from cbt_siswa where Urut = '$_REQUEST[urut]'");
}
if(isset($_REQUEST['simpan'])){
//echo "Urut = '$_REQUEST[txt_kodkel] - $_REQUEST[txt_namkel] - $_REQUEST[txt_kodlev] - $_REQUEST[txt_jur]' $_REQUEST[id]";
$sql = mysql_query("update cbt_siswa set XNamaSiswa = '$_REQUEST[txt_nam]', XPassword = '$_REQUEST[txt_pas]', XNomerUjian = '$_REQUEST[txt_nom]',
XKodeJurusan = '$_REQUEST[jur2]', XKodeKelas = '$_REQUEST[txt_kelas]', XKodeLevel = '$_REQUEST[txt_level]',
XNIK = '$_REQUEST[txt_nis]', XFoto='$_REQUEST[txt_potret]',XJenisKelamin = '$_REQUEST[txt_jekel]',
XSesi = '$_REQUEST[txt_sesi]',XRuang = '$_REQUEST[txt_ruang]',XAgama = '$_REQUEST[txt_agama]',XKodeSekolah = '$_REQUEST[txt_kodesek]',XPilihan = '$_REQUEST[txt_pilih]',XTlahir = '$_REQUEST[txt_lhr]',
XTTlahir = '$_REQUEST[txt_lhrr]',XSemester = '$_REQUEST[txt_sms]',XThnajar = '$_REQUEST[txt_thn]',Xnkel = '$_REQUEST[txt_nkel]',Xnisn = '$_REQUEST[txt_nisn]',Xnayah = '$_REQUEST[txt_nayah]',Xpayah = '$_REQUEST[txt_payah]',Xnibu = '$_REQUEST[txt_nibu]',Xpibu = '$_REQUEST[txt_pibu]',Xnwali = '$_REQUEST[txt_nwali]',Xpwali = '$_REQUEST[txt_pwali]'
 where Urut = '$_REQUEST[id]'");
}

if(isset($_REQUEST['tambah'])){
	$sqlcek = mysql_num_rows(mysql_query("select * from cbt_siswa where (XNomerUjian = '$_REQUEST[txt_nom]' or XNIK = '$_REQUEST[txt_nisn]')"));
	if($sqlcek>0){
	$message = "NISN atau Nomer Ujian SUDAH ADA";
	echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		//if(!$_REQUEST['txt_nom']==""||!$_REQUEST['txt_nisn']==""){
		//$sql = mysql_query("insert into cbt_siswa (XNamaSiswa, XPassword, XNomerUjian, XKodeJurusan, XKodeKelas, XKodeLevel,
		//XNIK, XFoto, XJenisKelamin, XSesi, XRuang, XAgama, XKodeSekolah, XPilihan, XTlahir, XTTlahir, XSemester, XThnajar, Xnkel, Xnisn, Xnayah, Xpayah, Xnibu, Xpibu, Xnwali,  Xpwali) values 	
		//('$_REQUEST[txt_nam]','$_REQUEST[txt_pas]','$_REQUEST[txt_nom]','$_REQUEST[jur2]','$_REQUEST[txt_kelas]','$_REQUEST[txt_level]','$_REQUEST[txt_nis]', 
		//'$_REQUEST[txt_potret]','$_REQUEST[txt_jekel]','$_REQUEST[txt_sesi]','$_REQUEST[txt_ruang]','$_REQUEST[txt_agama]','$_REQUEST[txt_kodesek]','$_REQUEST[txt_pilih]','$_REQUEST[txt_lhr]','$_REQUEST[txt_lhrr]','$_REQUEST[txt_sms]','$_REQUEST[txt_thn]','$_REQUEST[txt_nkel]','$_REQUEST[txt_nisn]','$_REQUEST[txt_nayah]','$_REQUEST[txt_payah]','$_REQUEST[txt_nibu]','$_REQUEST[txt_pibu]','$_REQUEST[txt_nwali]','$_REQUEST[txt_pwali]')");
		//}
		if(!$_REQUEST['txt_nom']==""||!$_REQUEST['txt_nisn']==""){
		$sql = mysql_query("insert into cbt_siswa (XNamaSiswa, XPassword, XNomerUjian, XKodeJurusan, XKodeKelas, XKodeLevel,
		XNIK, XFoto, XJenisKelamin, XSesi, XRuang, XAgama, XKodeSekolah, XPilihan, XSemester, XThnajar,  Xnisn) values 	
		('$_REQUEST[txt_nam]','$_REQUEST[txt_pas]','$_REQUEST[txt_nom]','$_REQUEST[jur2]','$_REQUEST[txt_kelas]','$_REQUEST[txt_level]','$_REQUEST[txt_nis]', 
		'$_REQUEST[txt_potret]','$_REQUEST[txt_jekel]','$_REQUEST[txt_sesi]','$_REQUEST[txt_ruang]','$_REQUEST[txt_agama]','$_REQUEST[txt_kodesek]','$_REQUEST[txt_pilih]','$_REQUEST[txt_sms]','$_REQUEST[txt_thn]','$_REQUEST[txt_nisn]')");
		}
	}

}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../vendor/sweetalert2/assets/bootstrap4-buttons.css">
	<link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
	<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
   
</head>

<body>
<?php include "../../config/server.php"; ?>
            
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
						<?php echo "<a href='#myTam' id='custId' data-toggle='modal' data-id=''>"; ?>
						<button type="button" class="btn btn-info btn-small" ><i class="fa fa-plus-circle"></i> 
						Tambah <span class="hidden-xs">Siswa</span></button>
						<?php echo "</a>";?>
						<a href="?modul=upl_siswa"><button type="button" class="btn btn-info btn-small" ><i class="fa fa-upload"></i> <span class="hidden-xs">Import Data Siswa</span></button></a>
						<a href="#" data-toggle="modal" data-target="#myCetakKartu"><button type="button" class="btn btn-danger btn-small" ><i class="fa fa-print"></i> <span class="hidden-xs"> Cetak Kartu</span></button></a> 
                        <a class="btn btn-warning btn-small" href="?modul=upl_foto"><i class="fa fa-upload"></i> <span class="hidden-xs">Upload Foto</span></a>   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        
										<th width="15%">Nomer Peserta</th>
										 <th width="30%">Nama Peserta</th>
										 <th width="10%">Kelas</th>
										 <th width="10%">Kode</th>
										<!--<th width="10%">Foto</th>-->
                                        <th width="15%">Pil.</th>
                                        <th width="9%">Aksi</th>                                    
                                        </tr>
                                </thead>
                                <tbody>
                                <?php 
								$sql = mysql_query("select * from cbt_siswa order by XNomerUjian");
								while($s = mysql_fetch_array($sql)){ 
								$gbr=str_replace(" ","",$s['XFoto']);
								if($gbr==""){$gbr="nouser.png";}
								?>
                                
                                    <tr class="odd gradeX">
										<td style="text-align:center">
										<?php echo $s['XNomerUjian']; ?> | Sesi <?php echo $s['XSesi']; ?></td>
                                        <td><?php echo $s['XNamaSiswa']; ?></td>
                                        <td class="center"><?php echo $s['XKodeKelas']; ?> - <?php echo $s['XKodeJurusan']; ?></td>
                                        <td class="center"><?php echo $s['XKodeSekolah']; ?></td>
										<!--<td align="center"><img src="../../fotosiswa/<?php echo $gbr; ?>" style="max-height:20px"></td>-->
                                        <td class="center"><?php echo $s['XPilihan']; ?></td>
										<?php echo "<td><a href='#myModal' id='custId' data-toggle='modal' data-id=".$s['Urut'].">"; ?>
                                            <button type="button" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></button></a>
                                            
                                            
                                            <a href="?modul=daftar_siswa&aksi=hapus&urut=<?php echo $s['Urut']; ?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a></td>
                                        
                                    </tr>
  <!-- Button trigger modal -->
                          
                            <!-- /.modal -->                              
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
  
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
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
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
                           <button type="submit" class="btn btn-default btn-sm">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-default btn-sm" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>
  
   
   
       
       <div class="modal fade" id="myTam" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Siswa</h4>
                </div>
                <div class="modal-body">
        <!-- MEMBUAT FORM -->
      <form action="?modul=daftar_siswa&tambah=yes" method="post">
		<div class="form-group col-md-6">
                <label>Kode Sekolah</label>
                <select class="form-control" name="txt_kodesek" id="txt_kodesek">
                                <?php 
                                $sqlsek = mysql_query("select * from server_sekolah order by XServerId");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XServerId]'>$sek[XServerId] $sek[XSekolah]</option>";
                                }
                                ?>
								</select>
        </div>
        <div class="form-group col-md-6">
                <label>Nama Peserta</label>
                <input type="text" class="form-control" name="txt_nam" required>
            </div>
			 <div class="form-group col-md-6">
                <label>NIS</label>
                <input type="text" class="form-control" name="txt_nis">
            </div>
			<div class="form-group col-md-6">
                <label>NISN</label>
                <input type="text" class="form-control" name="txt_nisn">
            </div>
            <div class="form-group col-md-6">
                <label>Nomer Ujian Peserta</label>
                <input type="text" class="form-control" name="txt_nom" required>
            </div>
			<div class="form-group col-md-6">
                <label>Password</label>
                <input type="text" class="form-control" name="txt_pas" value="" size="5" required>
            </div>
			<div class="form-group col-md-3">
                <label>Semester</label>
               
				<select id="txt_sms"  name="txt_sms" class="form-control">
								<option value='1'>Ganjil</option>
								<option value='2'>Genap</option>                                
                                </select>   
            </div>
			<div class="form-group col-md-3">
                <label>Tahun Ajaran</label>
                <select id="txt_thn"  name="txt_thn" class="form-control" >
								<?php $sqk = mysql_query("select * from cbt_tahunakademik group by Xtahunakadmik");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[Xtahunakadmik]' class='form-control' >$rs[Xtahunakadmik]</option>";} ?>                                
                                </select>   
            </div>
			<div class="form-group col-md-3">
                <label>Level</label>
                <select id="txt_level"  name="txt_level" class="form-control" >
								<?php $sqk = mysql_query("select * from cbt_level group by XLevel");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XLevel]' class='form-control' >$rs[XLevel]</option>";} ?>                                
                                </select> 
            </div>
			<div class="form-group col-md-3">
                <label>Jurusan</label>
               <select id="jur2"  name="jur2" class="form-control">
								<?php 
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>   
            </div>
			<div class="form-group col-md-3">
                <label>Kelas</label>
               <select id="txt_kelas"  name="txt_kelas" class="form-control" >
									<?php 
								//echo "<option value='$r[XKodeKelas]' selected >$r[XKodeKelas]</option>";
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]' class='form-control' >$rs[XKodeKelas]</option>";} ?>                                
                                </select> 
            </div>
			<div class="form-group col-md-3">
                <label>Sesi</label>
                 <select id="txt_sesi"  name="txt_sesi" class="form-control">
								<?php 
								$sqk = mysql_query("select * from cbt_sesi group by XSesi");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XSesi]'>$rs[XSesi]</option>";
								} ?>                                
                                </select>   
            </div>
			<div class="form-group col-md-3">
                <label>Ruang</label>
                <select id="txt_ruang"  name="txt_ruang" class="form-control">
								<?php 
								$sqk = mysql_query("select * from cbt_ruang group by XRuang");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XRuang]'>$rs[XRuang]</option>";
								} ?>                                
                                </select>  
            </div>
			<div class="form-group col-md-3">
                <label>Agama</label>
                <select id="txt_agama"  name="txt_agama" class="form-control">
								<?php 
								$sqk = mysql_query("select * from cbt_agama where not XAgama ='' group by XAgama");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XAgama]'>$rs[XAgama]</option>";
								} ?>                                 
                                </select>   
            </div>
			<div class="form-group col-md-4">
                <label>Mapel Pilihan</label>
                <select id="txt_pilih"  name="txt_pilih" class="form-control">
								<?php 
								$sqk = mysql_query("select * from cbt_pilihan where not XPilihan ='' group by XPilihan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XPilihan]'>$rs[XPilihan]</option>";
								} ?>                                 
                                </select>     
            </div>
			<div class="form-group col-md-4">
                <label>Jenis Kelamin</label>
                <select id="txt_jekel"  name="txt_jekel" class="form-control">
								<option value='L'>Laki-laki</option>
								<option value='P'>Perempuan</option>                                
                                </select>   
            </div>
			<div class="form-group col-md-4">
                <label>Foto Peserta</label>
               <input type="text" class="form-control" name="txt_potret"> 
            </div>
           
			<div class="modal-footer">
              <button class="btn btn-primary" type="submit">Tambah</button>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			  </div>
        </form>
                
                   
                </div>
                
            </div>
        </div>
    </div>            
    <script src="../vendor/jquery/jquery-1.12.3.js"></script>
    <script src="../vendor/jquery/jquery.dataTables.min.js"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    
	
	
	});
    </script>
    <script>$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('#example tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
 
    $('#button').click( function () {
        table.row('.selected').remove().draw( false );
    } );
} );</script>



<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Siswa</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                
            </div>
        </div>
    </div>    
  <script src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'edit_siswa.php',
                data :  'urut='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
		 
		

		 
    });
  </script>

</body>

</html>
