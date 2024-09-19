<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
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

   
    
<style>
img {
    max-width: 100%;
    
}
</style>
</head>
<link rel="stylesheet" href="../vendor/sweetalert2/assets/bootstrap4-buttons.css">
	<link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
	<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="jquery-1.4.js"></script>
<body>
<?php include "../../config/server.php"; ?>
 
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th width="5%">No.</th>
                                        <th width="8%">Kode</th>
                                        <th width="30%">Mata Pelajaran</th>                                        
                                        <th width="10%">Kelas</th>
                                        <th width="8%">Guru</th>                                           
                                        <th width="8%">Rekap</th>    
                                        <th width="8%">Hasil</th>                                                                              
                                        <th width="8%">Status</th>                                        
                                                                                                                          
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
								if($_COOKIE['beelogin']=='admin'){
									$sql = mysql_query("select p.*,m.*,p.Urut as Urutan,p.XKodeKelas  as kokel from cbt_paketsoal p left join cbt_mapel m on m.XKodeMapel = p.XKodeMapel order by p.Urut desc");
								} else {
									$sql = mysql_query("select p.*,m.*,p.Urut as Urutan,p.XKodeKelas  as kokel from cbt_paketsoal p left join cbt_mapel m on m.XKodeMapel = p.XKodeMapel where p.XGuru='$_COOKIE[beeuser]' order by p.Urut desc");	
								}
								$nomx = 0;
								while($s = mysql_fetch_array($sql)){ $nomx++;
					$sqlsoal = mysql_num_rows(mysql_query("select * from cbt_soal where XKodeSoal = '$s[XKodeSoal]'"));
					$sqlpakai = mysql_num_rows(mysql_query("select * from cbt_nilai where XKodeSoal = '$s[XKodeSoal]'"));
					if($sqlsoal<1){$kata="disabled";$alink="";}  else {$kata=""; $alink = "rekapexcel.php?soal=$s[XKodeSoal]&mapel=$s[XKodeMapel]";}	
					if($sqlpakai>0){$katapakai="";$alink = "rekapexcel.php?soal=$s[XKodeSoal]&mapel=$s[XKodeMapel]";}  else {$katapakai="disabled";$alink="";}	
					if ($s['XEsai']>0) { $adaesai = ''; $elink = "rekapesai.php?soal=$s[XKodeSoal]&mapel=$s[XKodeMapel]"; } else { $adaesai='disabled'; $elink='';}
					$zlink = "?modul=analisajawaban&adaesai=".$adaesai."&soal=".$s['XKodeSoal'];
					if ($katapakai=='disabled') { $adaesai='disabled'; $elink=''; $zlink = ''; } 

								?>
                                
                                    <tr class="odd gradeX">
                                        <td align="center"><?php echo $nomx; ?><input type="hidden" value="<?php echo $s['Urutan']; ?>" id="txt_mapel<?php echo $s['Urutan']; ?>"></td>
                                        <td><?php echo $s['XKodeSoal']; ?></td>
                                        <td><?php echo $s['XNamaMapel']; ?></td>
                                        <!--<td><?php echo "$sqlsoal (". $s['XJumPilihan']." Pilihan)"; ?></td>-->   
                                        <td align="center"><?php echo $s['XKodeJurusan']; ?></td>                                        
                                        <td align="center">                                                                         
										<?php echo "$s[XGuru]"; ?>
                                        </td>
										<td align="center" nowrap><a href="<?php echo $alink; ?>" data-toggle="tooltip" title="rekap excel">
                                        <button type="button" class="btn btn-info btn-small" <?php echo $katapakai; ?>><i class="fa fa-list-alt"></i></button></a>
										<a href="<?php echo $elink; ?>" data-toggle="tooltip" title="Cetak Essai">
										<button type="button" class="btn btn-success btn-small" <?php echo $adaesai; ?>><i class="fa fa-list"></i></button></a>
										</td>											
										<td align="center"><a href="<?php echo $zlink; ?>" data-toggle="tooltip" title="Analisa Hasil">
                                        <button type="button" class="btn btn-primary btn-small" <?php echo $katapakai; ?>><i class="fa fa-bar-chart-o"></i></button></a></td>
                                        <td align="center">													
                                        <?php if($s['XStatusSoal']=="Y"){ ?>
                                        <span class="label label-success">Aktif</span>
                                        <?php } else { ?>
                                         <span class="label label-danger">Non Aktif</span>                                        
										<?php } ?>
                                        </td>     
                                    </tr>
  <!-- Button trigger modal -->
                              <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                            <p></p>
                                <h4>Keterangan</h4>
                                <li>Download File Excel (Rekap Hasil Ujian) DISABLE, apabiila <ul>
                                	<li>Belum ada peserta yang mengambil tes</li>
                                	<li>Belum ada soal pada Tes</li>                                    
                                </ul></li>
                             </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script type="text/javascript">
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
	});
	</script>

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
} );
</script> 
</body>
</html>