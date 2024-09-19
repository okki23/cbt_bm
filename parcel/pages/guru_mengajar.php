<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";
if(isset($_REQUEST['aksi'])){
//echo "delete from cbt_mengajar where id_jadwal = '$_REQUEST[id_jadwal]'";
$sql = mysql_query("delete from cbt_mengajar where id_jadwal = '$_REQUEST[id_jadwal]'");
}


if(isset($_REQUEST['simpan'])){
	$sql = mysql_query("update cbt_mengajar set id_guru = '$_REQUEST[id_guru]', id_matapelajaran = '$_REQUEST[id_matapelajaran]', id_kelas = '$_REQUEST[id_kelas]',
	id_ruang_kelas = '$_REQUEST[id_ruang_kelas]', hari = '$_REQUEST[hari]', jam = '$_REQUEST[jam]', jam2 = '$_REQUEST[jam2]', mulai = '$_REQUEST[mulai]', akhir = '$_REQUEST[akhir]'  where id_jadwal = '$_REQUEST[id]'");
}

if(isset($_REQUEST['tambah'])){
    $id_guru=htmlentities($_POST['id_guru']);
	$id_matapelajaran=htmlentities($_POST['id_matapelajaran']);
	$id_kelas=htmlentities($_POST['id_kelas']);
	$id_ruang_kelas=htmlentities($_POST['id_ruang_kelas']);
	
	$hari=$_POST['hari'];
	$jam=$_POST['jam'];
	$jam2=$_POST['jam2'];
	$mulai=$_POST['mulai'];
	$akhir=$_POST['akhir'];
	
	$cek_query=mysql_query("select * from cbt_mengajar where id_guru='$id_guru' and id_matapelajaran='$id_matapelajaran' and id_kelas='$id_kelas'");
	$cek_num=mysql_num_rows($cek_query);
	
	if($cek_num!==0){
	$message = "JADWAL SUDAH ADA/ BENTROK";
	echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		if(!$_REQUEST['id_guru']==""||!$_REQUEST['id_matapelajaran']==""){
		$sql = mysql_query("insert into cbt_mengajar (id_guru, id_matapelajaran, id_kelas, id_ruang_kelas, hari, jam, jam2, mulai, akhir) values  
		('$_REQUEST[id_guru]','$_REQUEST[id_matapelajaran]','$_REQUEST[id_kelas]','$_REQUEST[id_ruang_kelas]','$_REQUEST[hari]','$_REQUEST[jam]','$_REQUEST[jam2]','$_REQUEST[mulai]','$_REQUEST[akhir]')");
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
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/
$.noConflict();
jQuery( document ).ready(function( $ ) {
$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
	$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
	$.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker<?php echo $s['Urutan']; ?>').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'1986/01/05'
});
$('#datetimepicker<?php echo $s['Urutan']; ?>').datetimepicker({value:'2015/04/15 05:03',step:10});
$('.some_class').datetimepicker();
$('#default_datetimepicker<?php echo $s['Urutan']; ?>').datetimepicker({
	formatTime:'H:i',
	//formatDate:'d.m.Y',
	formatDate:'Y.m.d',
	//defaultDate:'8.12.1986', // it's my birthday
	defaultDate:'+03.01.1970', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});
$('#datetimepicker10').datetimepicker({
	step:5,
	inline:true
});
$('#jam').datetimepicker({
	datepicker:false,
	format:'H.i',
	step:5
});
$('#jam2').datetimepicker({
	datepicker:false,
	format:'H.i',
	step:5
});
$('#datetimepicker_mask<?php echo $s['Urutan']; ?>').datetimepicker({
	mask:'9999/19/39 29:59'
});
$('#datetimepicker_mask<?php echo $s['Urutan']; ?>').datetimepicker({value:'<?php echo "$tglx $jamx"; ?>',step:10});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})
        }); 
</script>   
</head>

<body>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">JADWAL MENGAJAR GURU</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Jadwal Mengajar 
<?php echo "<a href='#myTam' id='custId' data-toggle='modal' data-id=''>"; ?>
<button type="button" class="btn btn-info btn-small" ><i class="fa fa-plus-circle"></i> 
Tambah Jadwal</button>
<?php echo "</a>";?> 
 					
                        </div>
                        <!-- /.panel-heading -->
				
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
	                                    <th width="5%">No.</th>
										<th width="20%">Nama Guru</th>
                                        <th width="15%">Kelas</th>
                                        <th width="20%">Pelajaran</th>                                           
                                        <th width="15%">Ruang</th>                                       
                                        <th width="10%">Hari</th>    
                                         <th width="25%">Jam</th>	
                                         <th width="25%">Waktu</th>											 
                                        <th width="10%">Tindakan</th>                                                                                                                      
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
								$sql = mysql_query("select * from cbt_mengajar order by id_jadwal");
								$no=0; //<!-- TAMBAHKAN SEPERTI INI -->	
								while($s = mysql_fetch_array($sql)){
								$no++;		//<!-- TAMBAHKAN SEPERTI INI -->							
								?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td> <!-- GANTI SEPERTI INI -->
                                        <td><?php echo $s['id_guru'];?></td>
                                         <td><?php echo $s['id_kelas'];?></td>
			                             <td><?php echo $s['id_matapelajaran'];?></td>
			                              <td><?php echo $s['id_ruang_kelas'];?></td>
			                              <td><?php echo ucwords($s['hari']);?></td>
			                              <td>ke <?php echo $s['mulai'];?> sampai ke <?php echo $s['akhir'];?></td>
                                          <td><?php echo $s['jam'];?> -- <?php echo $s['jam2'];?></td>										  
                            <?php echo "<td><a href='#myModal' id='custId' data-toggle='modal' data-id=".$s['id_jadwal'].">"; ?>
                                            <button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                                            
                                            
                                            <a href="?modul=guru_mengajar&aksi=hapus&id_jadwal=<?php echo $s['id_jadwal']; ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button></a></td>                                                                               
                                    </tr>
 
								 <script>
								function myFunction<?php echo $s['id_jadwal']; ?>() {
									alert(<?php echo $s['id_jadwal']; ?>);
									document.getElementById("demo").innerHTML = "Hello World";
								}
								</script>
  <!-- Button trigger modal -->
                                    
                                        
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                               <h4>CBT <?php echo "$skull"; ?> </h4>
                                <p>Untuk keterangan lebih lanjut Hubungi Admin <?php echo "$skul_adm"; ?> : tlp/sms <?php echo "$skul_tlp"; ?></p><p>
                                </p>
                            </div>
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
                    <h4 class="modal-title">Tambah Jadwal Mengajar Guru</h4>
                </div>
                <div class="modal-body">
        <!-- MEMBUAT FORM -->
        <form action="?modul=guru_mengajar&tambah=yes" method="post">
			<div class="form-group">
                <label>Guru</label><br>
                <select class="form-control" name="id_guru" id="id_guru">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_user order by Urut");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[Nama]'>$sek[Nama]</option>";
                                }
                                ?>
								</select>
            </div><p>
             <div class="form-group">
                <label>Mata Pelajaran</label>
            <select class="form-control" name="id_matapelajaran" id="id_matapelajaran">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_mapel order by Urut");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XNamaMapel]'>$sek[XNamaMapel]</option>";
                                }
                                ?>
								</select>
								</div>

            <div class="form-group">
                <label>Nama Kelas</label>
              <select class="form-control" name="id_kelas" id="id_kelas">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_kelas order by Urut");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XNamaKelas]'>$sek[XNamaKelas]</option>";
                                }
                                ?>
								</select></div>
            <div class="form-group">
			<label>Ruangan</label>
               <select class="form-control" name="id_ruang_kelas" id="id_ruang_kelas">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_ruang order by Urut");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XRuang]'>$sek[XRuang]</option>";
                                }
                                ?>
								</select>
            </div>
            <div class="form-group">
                <label>Hari</label>
                <select class="form-control" name="hari" id="hari">
			            <option value="senin">Senin</option>
						<option value="selasa">Selasa</option>
						<option value="rabu">Rabu</option>
						<option value="kamis">Kamis</option>
						<option value="jumat">Jum'at</option>
						<option value="sabtu">Sabtu</option>
					</select>
					</div>
				<div class="form-group">
                <label>Malai Jam</label>
               <select class="form-control" name="mulai" id="mulai">
			            <option value="1">ke 1</option>
						<option value="2">ke 2</option>
						<option value="3">ke 3</option>
						<option value="4">ke 4</option>
						<option value="5">ke 5</option>
						<option value="6">ke 6</option>
						<option value="7">ke 7</option>
						<option value="8">ke 8</option>
						<option value="9">ke 9</option>
					</select>
					<p> <span class="asd" class="asd">Waktu</span><span>: 
		          <input type="text" size="5" value='' name="jam" id="jam"/></span></p>
				</div>
				
				<div class="form-group">
                <label>Sampai Jam</label>
                 <select class="form-control" name="akhir" id="akhir">
			            <option value="1">ke 1</option>
						<option value="2">ke 2</option>
						<option value="3">ke 3</option>
						<option value="4">ke 4</option>
						<option value="5">ke 5</option>
						<option value="6">ke 6</option>
						<option value="7">ke 7</option>
						<option value="8">ke 8</option>
						<option value="9">ke 9</option>
					</select>
					<p> <span class="asd" class="asd">Waktu</span><span>: 
		          <input type="text" size="5" value='' name="jam2" id="jam2"/></span></p>
					</div>
					
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Mengajar</h4>
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
                url : 'edit_mengajar.php',
                data :  'id_jadwal='+ rowid,
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
                data :  'id_guru='+ rowid,
                success : function(data){
                $('.fetched-data2').html(data);//menampilkan data ke dalam modal
                }
            });
         });
		 
    });
  </script>
 
</body>

</html>

 