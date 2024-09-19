<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
$sqla = mysql_query("select * from cbt_admin");
$xadm = mysql_fetch_array($sqla);
$skulwarna=$xadm['XWarna'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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

   
</head>

<body>

            
            <!-- /.row -->
            <div class="row"><br>
				<a style="color:<?php echo $skulwarna ?>" href="#" data-toggle="modal" data-target="#myCetakKartu">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-credit-card  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Kartu Ujian</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="#" data-toggle="modal" data-target="#myDaftarHadir">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2</div>
                                    <div>Daftar Hadir</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=berita_acara">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>Berita Acara</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="#" data-toggle="modal" data-target="#myCetakUAS">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Hasil UAS</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				<a style="color:<?php echo $skulwarna ?>" href="#" data-toggle="modal" data-target="#myCetakUTS">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-file-text-o  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">5</div>
                                    <div>Hasil UTS</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="#" data-toggle="modal" data-target="#myCetakHasil">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">6</div>
                                    <div>Semua Ujian</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				<a style="color:<?php echo $skulwarna ?>" href="?modul=upl_tugas">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-cloud-upload  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Upload Tugas</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                
            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
       
       
       
       
        
           
    <script src="../vendor/jquery/jquery-1.12.3.js"></script>
    <script src="../vendor/jquery/jquery.dataTables.min.js"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

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
                           <button type="submit" class="btn btn-success">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
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
                           <button type="submit" class="btn btn-success">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success" data-dismiss="modal">
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
                           <button type="submit" class="btn btn-success">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success" data-dismiss="modal">
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
                </div>
				<form action="?modul=cetak_UAS" method="post">
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
						
                           <button type="submit" class="btn btn-success">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success" data-dismiss="modal">
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
						
                           <button type="submit" class="btn btn-success">
                           <i class="glyphicon glyphicon-print"></i> Tampilkan</button>
                           <button type="submit" class="btn btn-success" data-dismiss="modal">
                           <i class="glyphicon glyphicon-minus-sign"></i> Tutup</button>
                        </div>
                    </div>
                </div></form>
            </div>
        </div>
    </div>
</div>
  
 
</body>

</html>

 