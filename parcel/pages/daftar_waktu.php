<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
if(isset($_REQUEST['aksi'])){
//echo "delete from cbt_waktu where Urut = '$_REQUEST[urut]'";
$sql = mysql_query("delete from cbt_kelas where Urut = '$_REQUEST[urut]'");
}


if(isset($_REQUEST['simpan'])){
	$sql = mysql_query("update cbt_ujian set XKodeUjian = '$_REQUEST[txt_koduji]', XKodeKelas = '$_REQUEST[txt_kodkel]', XKodeJurusan = '$_REQUEST[txt_jur]',
	XKodeSoal = '$_REQUEST[txt_kodsoal]', XTglUjian = '$_REQUEST[txt_tuji]', XJamUjian = '$_REQUEST[txt_juji]', XLamaUjian = '$_REQUEST[txt_durasi]', XBatasMasuk = '$_REQUEST[txt_bmasuk]', XStatusUjian = '$_REQUEST[txt_suji]'  where Urut = '$_REQUEST[id]'");
}

if(isset($_REQUEST['tambah'])){

$sqlcek = mysql_num_rows(mysql_query("select * from cbt_kelas where XKodeKelas = '$_REQUEST[txt_kodkel]'"));
	if($sqlcek>0){
	$message = "Kode Kelas SUDAH ADA";
	echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		if(!$_REQUEST['txt_kodkel']==""||!$_REQUEST['txt_jur']==""){
		$sql = mysql_query("insert into cbt_kelas (XKodeLevel, XNamaKelas, XKodeJurusan,XKodeKelas, XKodeSekolah) values  
		('$_REQUEST[txt_kodlev]','$_REQUEST[txt_namkel]','$_REQUEST[txt_jur]','$_REQUEST[txt_kodkel]','$_REQUEST[txt_kodesek]')");
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <a href="?modul=daftar_tesbaru"><button class="btn btn-info"><span class="fa  fa-arrow-circle-left "> Kembali ke paket soal</span></button></a> 
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th width="5%">No.</th>
										<th width="15%">Kode Ujian</th>
                                        <th width="10%">Kode Kelas</th>
                                        <th width="40%">Kode Mapel</th>                                           
                                        <th width="15%">Kode Jurusan</th>                                       
                                        <th width="15%">Kode Soal</th>   
                                         <th width="15%">Tanggal Ujian</th> 
                                         <th width="15%">Jam Ujian</th> 
                                         <th width="15%">Batas Masuk</th>	
                                          <th width="15%">Status</th>										 
                                        <th width="10%">Tindakan</th>                                                                                                                      
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
								$sql = mysql_query("select * from cbt_ujian order by Urut");
								$no=0;
								while($s = mysql_fetch_array($sql)){ 
								$no++;
								?>
                                
                                    <tr class="odd gradeX">
                                        <td><?php echo $no ?></td>
										<td><?php echo $s['XKodeUjian']; ?></td>
                                        <td><?php echo $s['XKodeKelas']; ?></td>
                                        <td><?php echo $s['XKodeMapel']; ?></td>
                                        <td><?php echo $s['XKodeJurusan']; ?></td>
                                        <td><?php echo $s['XKodeSoal']; ?></td>
                                         <td><?php echo $s['XTglUjian']; ?></td> 
										 <td><?php echo $s['XJamUjian']; ?></td>
										 <td><?php echo $s['XBatasMasuk']; ?></td>
                                         <td><?php echo $s['XStatusUjian']; ?></td> 										 
                            <?php echo "<td><a href='#myModal' id='custId' data-toggle='modal' data-id=".$s['Urut'].">"; ?>
                                            <button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                                            
                                            
                                     </tr>
 
 <script>
function myFunction<?php echo $s['Urut']; ?>() {
	alert(<?php echo $s['Urut']; ?>);
    document.getElementById("demo").innerHTML = "Hello World";
}
</script>
  <!-- Button trigger modal -->
                                    
                                        
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
    
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Waktu Ujian</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
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
                url : 'edit_waktu.php',
                data :  'urut='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
		 
		  $('#myTam').on('show.bs.modal', function (e) {
           // var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'tambah_kelas.php',
                data :  'urut='+ rowid,
                success : function(data){
                $('.fetched-data2').html(data);//menampilkan data ke dalam modal
                }
            });
         });
		 
    });
  </script>
 
</body>

</html>

 