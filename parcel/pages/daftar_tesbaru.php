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
<link rel="stylesheet" href="../vendor/sweetalert2/assets/bootstrap4-buttons.css">
	<link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
	<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<script type="text/javascript" src="../js/jquery.js"></script>
<body>

           
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <table width="100%">
						   <tr>
						   
						   <td>
                           
							<a href="?modul=daftar_waktu"><button class="btn btn-info"><span class="fa fa-clock-o"> Ubah jadwal tes</span></button></a>
                            </td>
							</tr>
							</table>
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        	                       
                        
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th width="6%">No.</th>
                                        <th width="10%">Kode</th>
                                        <th width="25%">Mata Pelajaran</th>
                                        <th width="8%">Soal</th>	
                                        <th width="8%">Kelas</th>
                                        <th width="15%">Waktu</th>                                                                             
                                        <th width="8%">Sesi</th>                                                                             
                                        <th width="8%">Status</th>  
                                        <th width="8%">Jadwal</th>                                                                                
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
$sql = mysql_query("select p.*,m.*,p.Urut as Urutan,p.XKodeKelas  as kokel from cbt_paketsoal p left join cbt_mapel m on m.XKodeMapel = p.XKodeMapel where p.XStatusSoal='Y' order by p.Urut desc");
//$sql = mysql_query("select u.*,m.*,u.Urut as Urutan,u.XKodeKelas as kokel from cbt_ujian u left join cbt_mapel m on m.XKodeMapel = u.XKodeMapel left join cbt_paketsoal p on p.XKodeSoal = u.XKodeSoal where u.XStatusUjian='1'");
					$no=0;
					while($s = mysql_fetch_array($sql)){
							$no++;
					$sqlsoal = mysql_num_rows(mysql_query("select * from cbt_soal where XKodeSoal = '$s[XKodeSoal]'"));
					$sqlpakai = mysql_num_rows(mysql_query("select * from cbt_siswa_ujian where XKodeSoal = '$s[XKodeSoal]' and XStatusUjian = '1'"));
					$sqlsudah = mysql_num_rows(mysql_query("select * from cbt_jawaban where XKodeSoal = '$s[XKodeSoal]'"));
					if($sqlsoal<1){$kata="disabled";}  else {$kata="";}	
					if($sqlsudah>0||$sqlpakai>0){$kata="disabled";}  else {$kata="";}			
					if($sqlpakai>0){$katapakai="disabled";}  else {$katapakai="";}			
							
								
$sqltes = mysql_query("select XJamUjian,XTglUjian,XStatusUjian,XSesi from cbt_ujian where XKodeSoal = '$s[XKodeSoal]' and  XKodeMapel = '$s[XKodeMapel]' and  XKodeJurusan = '$s[XKodeJurusan]' and  XKodeKelas = '$s[kokel]' and XStatusUjian='1'");		
 $stu = mysql_fetch_array($sqltes);
 $tjamujian = $stu['XJamUjian'];
 $ttglujian = $stu['XTglUjian'];
 $sttsujian = $stu['XStatusUjian'];
 
								?>
                                
                                    <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $s['XKodeSoal']; ?></td>
                                        <td><?php echo  $s['XKodeMapel']." ".$s['XNamaMapel']; ?></td>
                                        <td><?php echo "$sqlsoal (". $s['XJumPilihan']." opsi)"; ?></td>                                           
                                        <td><?php echo $s['kokel']." | ".$s['XKodeJurusan']."."; ?></td> 
                                        <td><?php echo "$ttglujian $tjamujian"; ?></td>
                                        <td align="center">
                                        <!--
                                        <?php if($s['XAcakSoal']=="Y"){ ?>
                                        <input type="button" class="btn btn-success btn-small" id="acak<?php echo $s['Urutan']; ?>"  <?php echo $kata; ?>
                                         value="Acak">
                                         <?php } else { ?>
                                         <input type="button" class="btn btn-warning btn-small" id="acak<?php echo $s['Urutan']; ?>"  <?php echo $kata; ?>
                                         value="Tidak">
                                         <?php } ?>
                                         !-->
                                         
                                         <?php echo "$stu[XSesi]"; ?>
                                        </td>
                                        <td>													
                                        <?php if($sttsujian=="1"){ ?>
                                        <input type="button" id="simpan<?php echo $s['Urutan']; ?>" class="btn btn-success" value="Aktif"  <?php echo $katapakai; ?> disabled>
                                        <?php } else { ?>
                                        <input type="button" id="simpan<?php echo $s['Urutan']; ?>" class="btn btn-default" value="Non Aktif">                                        <?php } ?>
                                        </td>     
                                        
                                        <td>					
                                        <a href="?modul=edit_tes&idtes=<?php echo $s['Urutan']; ?>">
                                       <button type="button" class="btn btn-info btn-small">
                                        <i class="fa fa-clock-o  ">&nbsp;Set</i></button></a>
                                        
<!--                                        <button type="button" class="btn btn-info btn-small"  data-toggle="modal" 
                                        data-target="#myJadwal<?php echo $s['Urutan']; ?>" id="jadwal<?php echo $s['Urutan']; ?>">
                                        <i class="fa fa-clock-o  ">&nbsp;Set</i></button>!-->								
                                      
                                        </td>     
                                                                                                              
                                    </tr>
                                
  <!-- Modal confirm -->


                              <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
<li><font color="#FF0033">*Bank Soal Yang dipakai Seluruh Kelas dan Jurusan harus berdiri sendiri. TIDAK BOLEH AKTIF dengan Bank Soal lain</font></li>
<li>Beberapa ujian (untuk Kelas dan Jurusan berbeda) bisa di setting waktu bersamaan. </li>
<li>Apabila Satu kelas ada beberapa Tes bersamaan (untuk kelas dan jurusan yang sama). 
Akan mengakibatkan Peserta tidak dapat mengikuti Ujian (* Terlambat mengikuti Ujian)</li>
<li>Daftar diatas merupakan Paket Soal yang sudah diaktifkan oleh Guru. Silahkan melakukan pengaturan Jadwal ujian (Klik tombol 'Set' pada Menu Jadwal)</li>
                                
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
