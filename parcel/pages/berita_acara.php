<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
if(isset($_REQUEST['aksi'])){
//echo "delete from cbt_kelas where Urut = '$_REQUEST[urut]'";
$sql = mysql_query("delete from cbt_kelas where Urut = '$_REQUEST[urut]'");
}


if(isset($_REQUEST['simpan'])){
	$sql = mysql_query("update cbt_ujian set XProktor = '$_REQUEST[txt_proktorx]',XNIPProktor = '$_REQUEST[txt_nipproktorx]',XPengawas = '$_REQUEST[txt_pengawasx]',XNIPPengawas = '$_REQUEST[txt_nippengawasx]',XCatatan = '$_REQUEST[txt_catatanx]'
where XTokenUjian = '$_REQUEST[id]'");
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

</head>

 <?php $tgljam = date("Y/m/d H:i");  
 $tgl = date("Y/m/d"); 
 ?>
  <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}

</style>
<?php 
$tgx = 29;
$blx = 09;
$thx = 2016;

$tglx = date("Y/m/d");
$jamx = date("H:i:s");
?>
<body>
            
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
				<div class="alert alert-danger alert-dismissable">
                            <p>Berita Acara akan otomatis muncul saat ujian telah selesai</p>
                        </div>
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th width="2%">No.</th>
										<th width="5%">Ujian</th>                                        
                                        <th width="5%">Soal</th>
                                        <th width="15%">Mata Pelajaran</th>
                                        <th width="5%">Kelas</th>	
                                        <th width="5%">Token</th>	
                                        <th width="12%">Waktu</th>
                                        <th width="3%">Durasi</th>  
                                        <th width="5%">Pengawas</th>
                                        <th width="10%">Status</th>                                        
                                 </tr>
                                </thead>
                                <tbody>
<?php 
$sql = mysql_query("select u.*,m.*,u.Urut as Urutan,u.XKodeKelas as kokel from cbt_ujian u left join cbt_mapel m on m.XKodeMapel = u.XKodeMapel 
left join cbt_paketsoal p on p.XKodeSoal = u.XKodeSoal where u.XStatusUjian='9'");
								$no=0;
								$no++;
								while($s = mysql_fetch_array($sql)){ 
					$sqlsoal  = mysql_num_rows(mysql_query("select * from cbt_soal where XKodeSoal = '$s[XKodeSoal]'"));
					$sqlpakai = mysql_num_rows(mysql_query("select * from cbt_siswa_ujian where XKodeSoal = '$s[XKodeSoal]' and XStatusUjian = '1'"));
					$sqlsudah = mysql_num_rows(mysql_query("select * from cbt_jawaban where XKodeSoal = '$s[XKodeSoal]'"));
					if($sqlsoal<1){$kata="disabled";}  else {$kata="";}	
					if($sqlsudah>0||$sqlpakai>0){$kata="disabled";}  else {$kata="";}			
					if($sqlpakai>0){$katapakai="disabled";}  else {$katapakai="";}
					
$time1 = "$s[XJamUjian]";
$time2 = "$s[XLamaUjian]";

$secs = strtotime($time2)-strtotime("00:00:00");
$jamhabis = date("H:i:s",strtotime($time1)+$secs);	
$sekarang = date("H:i:s");	
$tglsekarang = date("Y-m-d");	
$tglujian = "$s[XTglUjian]";	
		
								?>
                            
                                    <tr class="odd gradeX">
                                        <td>
                                        <?php echo $no; ?>
                                        </td>
                                        <td><?php echo $s['XKodeUjian']; ?></td>
                                        <td><?php echo $s['XKodeSoal']; ?></td>
                                        <td><?php echo $s['XNamaMapel']; ?></td>
                                        <td><?php echo $s['kokel']." | ".$s['XKodeJurusan']."."; ?></td> 
                                        <td><?php echo $s['XTokenUjian']; ?></td>
                                        <td align="center">
                                        <?php echo $s['XTglUjian']." ".$s['XJamUjian'] ; ?>
                                        </td>                                        
                                        <td align="center">
                                        <?php echo $s['XLamaUjian']; ?>
                                        </td>
                                       <td align="center">
                                        <?php 
										echo $s['XPengawas']; 
										?>
                                        </td>
                                        <td>													
                                        <a href="?modul=cetak_berita&token=<?php echo $s['XTokenUjian']; ?>">
                                        <button type="button" class="btn btn-info"><i class="fa fa-print"></i></button></a>
                                        <button type="button" class="btn btn-warning btn-small"  data-toggle="modal" 
                                        data-target="#myPengawas<?php echo $s['XTokenUjian']; ?>"><i class="fa fa-edit"></i></button>
                                        </td>     
                                                                                                              
                                    </tr>
  <!-- Button trigger modal -->
  <!-- Modal -->
                            <div class="modal fade" id="myPengawas<?php echo $s['XTokenUjian']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo "Pengawas Ujian Mapel : $s[XNamaMapel]"; ?></h4>
                                        </div>
										 <form action="?modul=berita_acara&simpan=yes" method="post">
                                        <div class="modal-body" >
                                        
                                        <input type="hidden" value="<?php echo $s['XTokenUjian']; ?>" name="id"><br>
                                         <span>Nama Protor : </span><br><span><input class="form-control" type="text" name="txt_proktorx" width="90%">
                                        </span><br>
                               			<span>NIP  Proktor : </span><br><span><input class="form-control" type="text" name="txt_nipproktorx" width="90%"></span>				
                                        <br>
										<span>Nama Pengawas : </span><br><span><input class="form-control" type="text" name="txt_pengawasx" width="90%">
                                        </span><br>
                               			<span>NIP  Pengawas : </span><br><span><input class="form-control" type="text" name="txt_nippengawasx" width="90%"></span>				
                                        <br>
										<span>Catatan : </span><br><textarea name="txt_catatanx" cols="45" rows="5"></textarea></span>
                                        <br>
                                        
                                        </div>
										<div class="modal-footer">
                                        <button class="btn btn-info btn-lg btn-small" type="submit">Update</button>                                        
                                          </div>
                                    </div>
									</form>
									 
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal --> 
                                           

                              <?php } ?>
                                   
                                </tbody>
                            </table>
                            
<!-- /.panel-heading -->
                                                   
                            <!-- /.table-responsive -->
                            
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

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

</body>

</html>
