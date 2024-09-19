<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
if(isset($_REQUEST['aksi'])){
//echo "delete from cbt_kelas where Urut = '$_REQUEST[urut]'";
$sql = mysql_query("delete from cbt_user where Urut = '$_REQUEST[urut]'");
}
if(isset($_REQUEST['aksi1'])){ 
//echo "delete from cbt_kelas where Urut = '$_REQUEST[urut]'";
	$sqlcek = mysql_query("select * from cbt_user where Urut = '$_REQUEST[urut]'");
	$sta = mysql_fetch_array($sqlcek);
	$status= $sta['Status'];
	if($status=="1"){ $ubah = "0"; } 
	elseif($status=="0"){ $ubah = "1"; } 
	
$sqlpasaif = mysql_query("update cbt_user set Status = '$ubah' where Urut = '$_REQUEST[urut]'");
}

if(isset($_REQUEST['simpan'])){
	if($_REQUEST['txt_pass']==""){
		$sql = mysql_query("update cbt_user set Username = '$_REQUEST[txt_usern]', NIP = '$_REQUEST[txt_nip]', 
		Nama = '$_REQUEST[txt_nama]', Alamat = '$_REQUEST[txt_alamat]', HP = '$_REQUEST[txt_hp]', Email = '$_REQUEST[txt_email]', kelamin = '$_REQUEST[txt_kelamin]' 
		where Urut = '$_REQUEST[id]'");
		} else {
		$pass  = md5($_REQUEST['txt_pass']);
		$sql = mysql_query("update cbt_user set Username = '$_REQUEST[txt_usern]', Password = '$pass', NIP = '$_REQUEST[txt_nip]', 
		Nama = '$_REQUEST[txt_nama]', Alamat = '$_REQUEST[txt_alamat]', HP = '$_REQUEST[txt_hp]', Email = '$_REQUEST[txt_email]', kelamin = '$_REQUEST[txt_kelamin]' 
		where Urut = '$_REQUEST[id]'");
	}
}

if(isset($_REQUEST['tambah'])){

$sqlcek = mysql_num_rows(mysql_query("select * from cbt_user where Username = '$_REQUEST[txt_usern]'"));
	if($sqlcek>0){
	$message = "Username SUDAH ADA";
	echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		if($_REQUEST['txt_usern']=="" ||  $_REQUEST['txt_pass']==""){
			$message = "Username dan Password Harus di isi";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
		$pass  = md5($_REQUEST['txt_pass']);
		$sql = mysql_query("insert into cbt_user (Username, Password, NIP, Nama, Alamat, HP, Email, login, Status, kelamin) values  
		('$_REQUEST[txt_usern]','$pass','$_REQUEST[txt_nip]','$_REQUEST[txt_nama]','$_REQUEST[txt_alamat]','$_REQUEST[txt_hp]',
		'$_REQUEST[txt_email]','$_REQUEST[txt_level]','1','$_REQUEST[txt_kelamin]')");
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
<button type="button" class="btn btn-info btn-small" ><i class="fa fa-plus-circle"></i> 
Tambah User</button>
<?php echo "</a>";?>                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
										<th>No.</th>
										<th>User</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Level</th>
										<th>Status</th>
										<th>Aksi</th>
                                 </tr>
                                </thead>
                                <tbody>
								<?php 
								$sql = mysql_query("select * from cbt_user order by Urut");
								$no=0;
								while($s = mysql_fetch_array($sql)){ 
								$stts = $s['Status'];
								$login = $s['login'];
								$no++
								?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $s['Username']; ?></td>
                                        <td><?php echo $s['Nama']; ?></td>
										<td><?php echo $s['Alamat']; ?></td>
										<td>
										<?php if($login=="1"){ ?>
										<label>Admin</label>
                                        <?php } else { ?>
                                        <label>Guru</label>
										<?php } ?>
                                        </td>	
                                        <td><a href="?modul=data_user&aksi1=status&urut=<?php echo $s['Urut']; ?>">													
                                        <?php if($stts=="1"){ ?>
										<button type="button" class="btn btn-success">Aktif</button></a>
										
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-default">Non Aktif</button></a>
										<?php } ?>
                                        </td>						
                                        <?php echo "<td><a href='#myModal' id='custId' data-toggle='modal' data-id=".$s['Urut'].">"; ?>
										<button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                                        <a href="?modul=data_user&aksi=hapus&urut=<?php echo $s['Urut']; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button></a></td>                                                                               
                                    </td></tr>
								
                                    
 <script>
function myFunction<?php echo $s['Urut']; ?>() {
	alert(<?php echo $s['Urut']; ?>);
    document.getElementById("demo").innerHTML = "Hello World";
}
</script>
  <!-- Button trigger modal -->
<script>    
$(document).ready(function(){
$("#simpan1<?php echo $s['Urut']; ?>").click(function(){
 $.ajax({
     type:"POST",
     url:"simpan_sekolah.php",
	 data :  'urut='+ rowid,
	 success: function(data){
	 document.location.reload();
	 loading.fadeOut();
	 tampilkan.html(data);
	 tampilkan.fadeIn(100);
	 tampildata();
	 window.location.reload();
	 }
	 
	 
	 });
	 });
</script> 
                                                      
                                        
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
                    <h4 class="modal-title">Tambah Data User</h4>
                </div>
                <div class="modal-body">
        <!-- MEMBUAT FORM -->
        <form action="?modul=data_user&tambah=yes" method="post">
		<table width="100%" >
            <tr><td><label>Level</label></td><td width="5%"><br><br></td><td>
                <select class="form-control" name="txt_level">
					<option value="1">Admin</option>
					<option value="0">Guru</option>
				</select>
            </td></tr>
			<tr><td><label>Username</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_usern">
            </td></tr>
            <tr><td><label>Password</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_pass">
            </td></tr>
            <tr><td><label>Nama</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_nama">
            </td></tr>
            <tr><td><label>NIP</label></td><td width="5%"><br><br></td><td>
                <div><input type="text" class="form-control" name="txt_nip">
            </td></tr>
            <tr><td><label>Alamat</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_alamat">
            </td></tr>
            <tr><td><label>HP/Telp</label></td><td width="5%"><br><br></td><td> 
                <input type="text" class="form-control" name="txt_hp">
            </td></tr>
            <tr><td><label>Email</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_email">
            </td></tr>
			 <tr><td><label>Kelamin</label></td><td width="2%"><br><br></td><td>
            <select class="form-control" name="txt_kelamin" id="txt_kelamin">
			            <option value="Pria" >Pria</option>
						<option value="Wanita" >Wanita</option>
					</select></td></tr></table>
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
    
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
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
                url : 'edit_user.php',
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

 