<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";

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

<?php 
$sql = "SELECT * FROM cbt_kelas";
$query = mysql_query($sql);
$count = mysql_num_rows($query);
$jurusan=mysql_query("SELECT * FROM cbt_jurusan");
$hitungjurusan=mysql_num_rows($jurusan);
$sesi=mysql_query("SELECT * FROM cbt_sesi");
$hitungsesi=mysql_num_rows($sesi);
$ruang=mysql_query("SELECT * FROM cbt_ruang");
$hitungruang=mysql_num_rows($ruang);
$mapel=mysql_query("SELECT * FROM cbt_mapel");
$hitungmapel=mysql_num_rows($mapel);
$agama=mysql_query("SELECT * FROM cbt_agama");
$hitungagama=mysql_num_rows($agama);
$user=mysql_query("SELECT * FROM cbt_user");
$hitunguser=mysql_num_rows($user);
$pilihan=mysql_query("SELECT * FROM cbt_pilihan");
$hitungpilihan=mysql_num_rows($user);
$sekolah=mysql_query("SELECT * FROM server_sekolah");
$hitungsekolah=mysql_num_rows($sekolah);

$sqla = mysql_query("select * from cbt_admin");
$xadm = mysql_fetch_array($sqla);
$skulwarna=$xadm['XWarna'];
?>

</head>

<body>

            
            <!-- /.row -->
            <div class="row"><br>
				 <a style="color:<?php echo $skulwarna ?>" href="?modul=info_skul">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">10</div>
                                    <div>identitas</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				 <a style="color:<?php echo $skulwarna ?>" href="?modul=data_skul">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo"$hitungsekolah"?></div>
                                    <div>Data Sekolah</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				<a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_tahunakademik">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-graduation-cap  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Tahun Akademik</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_jurusan">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plane fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$hitungjurusan"?></div>
                                    <div>Jurusan</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_tingkat">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-signal fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>Tingkatan</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_sesi">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-flag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$hitungsesi"?></div>
                                    <div>Sesi</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				<a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_ruang">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-university  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$hitungruang"?></div>
                                    <div>Ruang</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_mapel">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$hitungmapel"?></div>
                                    <div>Mata Pelajaran</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_kelas">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$count"?></div>
                                    <div>Kelas</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
                <a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_pilihan">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo"$hitungpilihan"?></div>
                                    <div>Mapel Pilihan</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				<a style="color:<?php echo $skulwarna ?>" href="?modul=daftar_agama">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-leaf fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$hitungagama"?></div>
                                    <div>Agama</div>
                                </div>
                            </div>
                        </div>
                                
                    </div>
                </div>
				</a>
				
				 <a style="color:<?php echo $skulwarna ?>" href="?modul=data_user">
                <div class="col-lg-3 col-md-6">
                    <div class="well">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo"$hitunguser"?></div>
                                    <div>Data User</div>
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

   

   
 
</body>

</html>

 