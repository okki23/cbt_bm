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
	 
	<link rel="stylesheet" href="../vendor/sweetalert2/assets/bootstrap4-buttons.css">
	<link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
	
</head>
<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="./src/jquery-1.4.js"></script>
<script>    
$(document).ready(function(){

	var loading = $("#loading");
	var tampilkan = $("#tampilkan1");
 	var idstu = $("#idstu").val();
	function tampildata(){
	tampilkan.hide();
	loading.fadeIn();
	
	$.ajax({
    type:"POST",
    url:"database_soal_tampil.php",  
	data:"aksi=tampil&idstu=" + idstu,  
	success: function(data){ 
		loading.fadeOut();
		tampilkan.html(data);
		tampilkan.fadeIn(100);
		
	   }
    }); 
	}// akhir fungsi tampildata
	tampildata();

});
</script>
<body>
<?php 
if(!empty($_REQUEST['datax'])&&$_REQUEST['datax']=="ujian"){
include "database/cbt_ujian.php";
}
if(!empty($_REQUEST['datax'])&&$_REQUEST['datax']=="siswa"){
include "database/cbt_siswa.php";

}
if(!empty($_REQUEST['datax'])&&$_REQUEST['datax']=="semua"){
include "database/cbt_semua.php";
}
?>
<?php include "../../config/server.php"; ?>
           
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
				  
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<br />                      		
                        
                        
                            <table width="100%" class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
	                                    <th width="10%">No.</th>
                                        <th width="60%">Jenis Data</th>
                                        <th style="text-align:center" width="15%">Backup Saja</th>                                           
                                        <th style="text-align:center" width="15%">Backup & Hapus </th>    
                                                                                                                          
                                 </tr>
                                </thead>
                                <tbody>
                                                                
                                    <tr class="odd gradeX">
                                        <td>1<input type="hidden" value="<?php echo $s['Urutan']; ?>" id="txt_mapel<?php echo $s['Urutan']; ?>"></td>
                                        <td>Backup Mapel, Kelas, Siswa </td>
                                        <td align="center"><a href="?modul=backup&datax=siswa&aksi=1">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
                                        <td align="center"><a href="?modul=backup&datax=siswa&aksi=2">
                                        <button type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></a></td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td>2<input type="hidden" value="<?php echo $s['Urutan']; ?>" id="txt_mapel<?php echo $s['Urutan']; ?>"></td>
                                        <td>Backup Soal dan Jawaban</td>
                                        <td align="center"><a href="?modul=backup&datax=ujian&aksi=1">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
                                        <td align="center"><a href="?modul=backup&datax=ujian&aksi=2">
                                        <button type='button' class='btn btn-danger'><i class='fa fa-times'></i></button>
										</a></td>
                                    </tr>

                                    <tr class="odd gradeX">
                                        <td>3<input type="hidden" value="<?php echo $s['Urutan']; ?>" id="txt_mapel<?php echo $s['Urutan']; ?>"></td>
                                        <td>Backup Database</td>
                                        <td align="center"><a href="?modul=backup&datax=semua&aksi=1">
                                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
                                        <td align="center"><a href="?modul=backup&datax=semua&aksi=2">
                                        <button type='button' class='btn btn-danger'><i class='fa fa-times'></i></button></a>
										
										</td>
                                    </tr>
                                    
                                    
  <!-- Button trigger modal -->
  <!-- Modal -->
                           
                                           

                                  
                                </tbody>
                            </table>
							<div class="alert alert-danger alert-dismissable" >
                                
                                Tombol &nbsp; <button type='button' class='btn btn-danger'><i class='fa fa-times'></i></button> 
                                &nbsp; : selain Backup, juga akan menghapus semua table yang berkaitan dengan Pilihan Jenis Data
                                
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>Restore Database</h4>
<br>
                                	<form action="?modul=restore" method="post">
                           <table><tr><td><input type="file" id="anu" name="anu" required></td><td>
                           <button type="submit" class="btn btn-info btn-small" ><i class="fa fa-plus-circle"></i> Restore</button>
                           </td></tr></table>
                            </form>                                  

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
    <script>
	
	$('.showcase.sweet button').on('click', () => {
    swal('Good job!', 'You clicked the button!', 'success')
  })
	
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
