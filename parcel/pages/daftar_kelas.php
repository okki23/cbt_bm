<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
if(isset($_REQUEST['aksi'])){
//echo "delete from cbt_kelas where Urut = '$_REQUEST[urut]'";
$sql = mysql_query("delete from cbt_kelas where Urut = '$_REQUEST[urut]'");
}


if(isset($_REQUEST['simpan'])){
	$sql = mysql_query("update cbt_kelas set XKodeLevel = '$_REQUEST[txt_kodlev]', XNamaKelas = '$_REQUEST[txt_namkel]', XKodeJurusan = '$_REQUEST[txt_jur]',
	XKodeKelas = '$_REQUEST[txt_kodkel]', XKodeSekolah = '$_REQUEST[txt_kodesek]'  where Urut = '$_REQUEST[id]'");
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

            
            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
							<?php echo "<a href='#myTam' id='custId' data-toggle='modal' data-id=''>"; ?>
							<button type="button" class="btn btn-info btn-small" ><i class="fa fa-plus-circle"></i>Tambah Kelas</button>
							<?php echo "</a>";?> 
							<a href="?modul=upl_kelas"><button type="button" class="btn btn-info btn-small" ><i class="fa fa-plus-circle"></i> Import Data</button></a>                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th width="5%">No.</th>
										<th width="15%">Kode Sekolah</th>
                                        <th width="10%">Kode Level</th>
                                        <th width="40%">Jurusan</th>                                           
                                        <th width="15%">Kode Kelas</th>                                       
                                        <th width="15%">Nama Kelas</th>                                                                              
                                        <th width="10%">Tindakan</th>                                                                                                                      
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
								$no=0;
								$sql = mysql_query("select * from cbt_kelas order by Urut");
								while($s = mysql_fetch_array($sql)){ 
								$no++
								?>
                                
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
										<td><?php echo $s['XKodeSekolah']; ?></td>
                                        <td><?php echo $s['XKodeLevel']; ?></td>
                                        <td><?php echo $s['XKodeJurusan']; ?></td>
                                        <td><?php echo $s['XKodeKelas']; ?></td>
                                        <td><?php echo $s['XNamaKelas']; ?></td>  
										<?php echo "<td><a href='#editkelas' id='custId' data-toggle='modal' data-id=".$s['Urut'].">"; ?>
                                            <button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                                            
                                            
                                            <a href="?modul=daftar_kelas&aksi=hapus&urut=<?php echo $s['Urut']; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button></a></td>                                                                               
                                    </tr>
 

  <!-- Button trigger modal -->
                                    
                                        
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
       
       
       
       
       <div class="modal fade" id="myTam" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Kelas</h4>
                </div>
                <div class="modal-body">
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_kelas&tambah=yes" method="post">
			<div class="form-group">
                <label>Kode Sekolah</label><br>
                <select class="form-control" name="txt_kodesek" id="txt_kodesek">
                                <?php 
                                $sqlsek = mysql_query("select * from server_sekolah order by XServerId");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XServerId]'>$sek[XServerId] $sek[XSekolah]</option>";
                                }
                                ?>
								</select>
            </div><p>
             <div class="form-group">
                <label>Kode Kelas</label>
                <input type="text" class="form-control" name="txt_kodkel">
            </div>

            <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" class="form-control" name="txt_namkel">
            </div>
            <div class="form-group">
			<label>Level / Jurusan</label>
               <select class="form-control" name="txt_kodlev" id="txt_kodlev">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_level order by XLevel");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XLevel]'>$sek[XLevel]</option>";
                                }
                                ?>
								</select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
              <select class="form-control" name="txt_jur" id="txt_jur">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_jurusan order by XJurusan");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XJurusan]'>$sek[XJurusan]</option>";
                                }
                                ?>
								</select>  </div>

              <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
                
                    <div class="fetched-data2"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>    
           
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
    
<div class="modal fade" id="editkelas" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Kelas</h4>
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
        $('#editkelas').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'edit_kelas.php',
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

 