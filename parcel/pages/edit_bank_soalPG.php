<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>

<?php
if(isset($_REQUEST['aksi'])&&$_REQUEST['aksi']=="simpan"){
$sss= str_replace("'","\'",$_REQUEST['tanyasoal']);
	$sql0 = mysql_query("update cbt_soal set XTanya = '$sss' where XKodeSoal = '$_REQUEST[soal]' and Urut = '$_REQUEST[nom]'");
	//echo "update cbt_soal set XTanya = '$sss' where XKodeSoal = '$_REQUEST[txt_soal]' and Urut = '$_REQUEST[txt_nom]'";
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
<!-- TinyMCE 4.x -->
 
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
 
tinymce.init({
  selector: "textarea",
  menubar: false,
  statusbar: false,
	
	
  plugins: [
    "eqneditor advlist lists charmap anchor",
    "code fullscreen",
    "table contextmenu paste "
  ],
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent eqneditor table ",
	
  relative_urls: false,
 forced_root_block : "", 
    force_br_newlines : true,
    force_p_newlines : false,
});
 
</script>
<!-- /TinyMCE -->
  
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="jquery-1.4.js"></script>
<?php
if(isset($_REQUEST['jum'])&&$_REQUEST['jum']==5){
?>
<script>    
$(document).ready(function(){
		$("#txt_durasi").change(function(){
	var txt_durasi = $("#txt_durasi").val();
	$.ajax({
	url: "ambil_token.php",
	data: "txt_ujian="+txt_durasi,
	cache: false,
	success: function(msg){
	$("#txt_token").val(msg);
	}
	});
	});

 $("#kirim").click(function(){

 var ed = tinyMCE.get('tanyasoal');
 

var a = tinymce.get('tanyasoal').getContent();
var b1 = tinymce.get('jawab1').getContent();
var b2 = tinymce.get('jawab2').getContent();
var b3 = tinymce.get('jawab3').getContent();
var b4 = tinymce.get('jawab4').getContent();
var b5 = tinymce.get('jawab5').getContent();
var b6 = $("#gambar").val();
var b7 = $("#audio").val();
var b8 = $("#video").val();

var c = $("#nom").val();
var d = $("#soal").val();



 var e = $('input[name=radio1]:checked').val();
 //alert(e);
var f = $("#map").val();

var g1 = $("#gambar4").val();
var g2 = $("#gambar5").val();
var g3 = $("#gambar6").val();
var g4 = $("#gambar7").val();
var g5 = $("#gambar8").val();
var i = $("#txt_kate").val();
var j = $("#txt_kes").val();
var k = $("#txt_aca").val();
var l = $("#txt_ops").val();

 $.ajax({
     type:"POST",
     url:"simpan_soal_edit.php",    
     data: "aksi=simpan&txt_tanya=" + encodeURIComponent(a) + "&txt_jawab1=" + encodeURIComponent(b1) + "&txt_jawab2=" + encodeURIComponent(b2) + "&txt_jawab3=" + encodeURIComponent(b3) + "&txt_jawab4=" + encodeURIComponent(b4)  + "&txt_jawab5=" + encodeURIComponent(b5)  + "&txt_gbr=" + b6  + "&txt_aud=" + b7  + "&txt_vid=" + b8 + "&txt_kunci=" + e + "&txt_soal=" + d + "&txt_nom=" + c + "&txt_gbr1=" + g1 + "&txt_gbr2=" + g2 + "&txt_gbr3=" + g3 + "&txt_gbr4=" + g4 + "&txt_gbr5=" + g5 + "&txt_mapel=" + f + "&txt_kate=" + i + "&txt_kes=" + j + "&txt_aca=" + k + "&txt_ops=" + l,
	 success: function(data){
	 alert("Update Soal Sukses");
	 window.location.href = "?modul=edit_soal&jum=5&soal="+d;
	 //$("#info").html(data);
		//alert(txt_durasi);
		    // Do you ajax call here, window.setTimeout fakes ajax call
    ed.setProgressState(1); // Show progress
    window.setTimeout(function() {
        ed.setProgressState(0); // Hide progress
        //alert(ed.getContent());
    }, 2000);


		//tampildata();
	 }
	 });
	 });
	

});
</script>
<?php } ?>
<?php
if(isset($_REQUEST['jum'])&&$_REQUEST['jum']==4){
?>
<script>    
$(document).ready(function(){
		$("#txt_durasi").change(function(){
	var txt_durasi = $("#txt_durasi").val();
	$.ajax({
	url: "ambil_token.php",
	data: "txt_ujian="+txt_durasi,
	cache: false,
	success: function(msg){
	$("#txt_token").val(msg);
	}
	});
	});

 $("#kirim").click(function(){

 var ed = tinyMCE.get('tanyasoal');

var a = tinymce.get('tanyasoal').getContent();
var b1 = tinymce.get('jawab1').getContent();
var b2 = tinymce.get('jawab2').getContent();
var b3 = tinymce.get('jawab3').getContent();
var b4 = tinymce.get('jawab4').getContent();
var b6 = $("#gambar").val();
var b7 = $("#audio").val();
var b8 = $("#video").val();

var c = $("#nom").val();
var d = $("#soal").val();



 var e = $('input[name=radio1]:checked').val();
 //alert(e);
var f = $("#map").val();

var g1 = $("#gambar4").val();
var g2 = $("#gambar5").val();
var g3 = $("#gambar6").val();
var g4 = $("#gambar7").val();
var i = $("#txt_kate").val();
var j = $("#txt_kes").val();
var k = $("#txt_aca").val();
var l = $("#txt_ops").val();

  
 $.ajax({
     type:"POST",
     url:"simpan_soal_edit.php",    
     data: "aksi=simpan&txt_tanya=" + encodeURIComponent(a) + "&txt_jawab1=" + encodeURIComponent(b1) + "&txt_jawab2=" + encodeURIComponent(b2) + "&txt_jawab3=" + encodeURIComponent(b3) + "&txt_jawab4=" + encodeURIComponent(b4)  + "&txt_gbr=" + b6  + "&txt_aud=" + b7  + "&txt_vid=" + b8 + "&txt_kunci=" + e + "&txt_soal=" + d + "&txt_nom=" + c + "&txt_gbr1=" + g1 + "&txt_gbr2=" + g2 + "&txt_gbr3=" + g3 + "&txt_gbr4=" + g4  + "&txt_mapel=" + f  + "&txt_kate=" + i + "&txt_kes=" + j + "&txt_aca=" + k + "&txt_ops=" + l,
	 success: function(data){
	 //$("#info").html(data);
		//alert(txt_durasi);
		swal({
  
  type: 'success',
  title: 'Soal berhasil diedit',
  showConfirmButton: false,
  timer: 1500
});

		 window.location.href = "?modul=edit_soal&jum=4&soal="+d;
    // Do you ajax call here, window.setTimeout fakes ajax call
    ed.setProgressState(1); // Show progress
    window.setTimeout(function() {
        ed.setProgressState(0); // Hide progress
        //alert(ed.getContent());
    }, 2000);
		//tampildata();
	 }
	 });
	 });
	

});
</script>  
<?php } ?>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="js/lc_switch.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/lc_switch.css">
<script type="text/javascript">
var $jnoc = jQuery.noConflict();
          
$jnoc(document).ready(function(e) {

	$jnoc ('input').lc_switch();

	// triggered each time a field changes status
	$jnoc('body').delegate('.lcs_check', 'lcs-statuschange', function() {
		var status = ($(this).is(':checked')) ? 'checked' : 'unchecked';
		console.log('field changed status: '+ status );
	});
	
	
	// triggered each time a field is checked
	$jnoc('body').delegate('.lcs_check', 'lcs-on', function() {
		console.log('field is checked');
	});
	
	
	// triggered each time a is unchecked
	$jnoc('body').delegate('.lcs_check', 'lcs-off', function() {
		console.log('field is unchecked');
		
	});
});
</script>

<body>
<br>
<form  method="post"> 
<?php
	$sql0 = mysql_query("select * from cbt_soal where XKodeSoal= '$_REQUEST[soal]' and Urut = '$_REQUEST[nomer]'");
	$s=mysql_fetch_array($sql0);
	
?>
<div class="panel panel-default">
	<div class="panel-heading">
   
	<?php echo "<a href=?modul=edit_soal&jum=$_REQUEST[jum]&soal=$_REQUEST[soal]><button type='button' class='btn btn-info'><i class='fa fa-arrow-left'></i> Kembali ke Bank Soal</button></a>"; ?>	
    <button type="submit" class="btn btn-success btn-small" id="kirim"><i class='fa fa-save'></i> Update Soal</button>      
	<div style="float:right">
	<span class="btn btn-danger">Soal :  <?php echo $_REQUEST['soal']; ?></span>
    </div>
    </div>

<div class="panel-body">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>

<td align="right">
     
	<input type="hidden" id="nom" name="nom" value="<?php echo $_REQUEST['nomer']; ?>" />
    <input type="hidden" id="soal" name="soal" value="<?php echo $_REQUEST['soal']; ?>" />
    </strong></td>
  </tr>


<tr><td colspan="4">
<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Jenis Soal</label><span class="label label-success">Pilihan Ganda</span>
<input type="hidden" id="txt_kate" name="txt_kate" value="1" readonly size="1" style="margin-bottom:5px" >
 </div>
<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Tk. Kesulitan</label>
<select id="txt_kes" name="txt_kes" class="input-sm"  style="margin-bottom:5px" />
<option value="1" <?php if($s['XKategori']=='1'){echo "selected";}?>>Mudah</option>
<option value="2" <?php if($s['XKategori']=='2'){echo "selected";}?>>Sedang</option>
<option value="3" <?php if($s['XKategori']=='3'){echo "selected";}?>>Sulit</option>
</select>
 </div>
<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Acak Soal</label>
<select id="txt_aca" name="txt_aca" class="input-sm"/>
<option value="A" <?php if($s['XAcakSoal']=='A'){echo "selected";}?>>Acak</option>
<option value="T" <?php if($s['XAcakSoal']=='T'){echo "selected";}?>>Tidak</option>
</select>
 </div>
<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Acak Jawaban</label>
<select id="txt_ops" name="txt_ops" class="input-sm"/>
<option value="Y" <?php if($s['XAcakOpsi']=='Y'){echo "selected";}?>>Acak</option>
<option value="T" <?php if($s['XAcakOpsi']=='T'){echo "selected";}?>>Tidak</option>
</select>
 </div>

</td>
  </tr>  
  
<tr><td colspan="4">&nbsp;</td></tr>    
    <td colspan="4" align="right">
	<div class="col-sm-9">
    <textarea name="tanyasoal"  id="tanyasoal" style="font-size:18px; width:100%; height:auto;"><?php 
	echo "$s[XTanya]"; ?></textarea>
        <input type="hidden" id="map" name="map" value="<?php echo $s['XKodeMapel']; ?>" />
    </div>
    

<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="./styles.css" />
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: 'upload_gambar.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status.text('Uploading...');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				
				if(response==="success"){
				$('#upload').html('<img src="../../pictures/'+file+'"  width="130" alt="" />').addClass('success');
				document.getElementById("gambar").value = file
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>

<script type="text/javascript" >
	$(function(){
		var btnUpload2=$('#upload2');
		var status2=$('#status2');
		new AjaxUpload(btnUpload2, {
			action: 'upload_audio.php',
			name: 'uploadfile2',
			onSubmit: function(file2, ext2){
				 if (! (ext2 && /^(mp3|wav)$/.test(ext2))){ 
                    // extension is not allowed 
					status2.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status2.text('Uploading...');
			},
			onComplete: function(file2, response2){
				//On completion clear the status
				status2.text('');
				//Add uploaded file to list
				
				if(response2==="success"){
				$('#upload2').html('<img src="images/mp3.png"  width="130" alt="" />').addClass('success');
		 		document.getElementById("audio").value = file2				
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files2').text(file2).addClass('error');
				}
			}
		});
		
	});
</script>

<script type="text/javascript" >
	$(function(){
		var btnUpload3=$('#upload3');
		var status3=$('#status3');
		new AjaxUpload(btnUpload3, {
			action: 'upload_video.php',
			name: 'uploadfile3',
			onSubmit: function(file3, ext3){
				 if (! (ext3 && /^(mp4|avi)$/.test(ext3))){ 
                    // extension is not allowed 
					status3.text('Upload file dengan format mp4');
					return false;
				}
				status3.text('Uploading...');
			},
			onComplete: function(file3, response3){
				//On completion clear the status
				status3.text('');
				//Add uploaded file to list
				
				if(response3==="success"){
				$('#upload3').html('<img src="images/vid.png"  width="130" alt="" />').addClass('success');
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				var henti = document.getElementById("fileUpload");
		 		document.getElementById("video").value = file3
				} else{
					$('<li></li>').appendTo('#files3').text(file3).addClass('error');
				}
			}
		});
		
	});
</script>

<?php 
if($s['XAudioTanya']==""){$ico_audx="images/no_aud.png";$file_audx="";}else {$ico_audx="images/mp3.png";$file_audx="$s[XAudioTanya]";}
if($s['XVideoTanya']==""){$ico_vidx="images/no_vid.png";$file_vidx="";}else {$ico_vidx="images/vid.png";$file_vidx="$s[XVideoTanya]";}
if($s['XGambarTanya']==""){$ico_gbrx="images/no_pic.png";$file_gbrx="";}else {$ico_gbrx="../../pictures/$s[XGambarTanya]";$file_gbrx="$s[XGambarTanya]";}
?>
      
 <div class="col-sm-3">
		<div align="left">
		<span id="status" ></span>
		<input type="files" id="gambar" name="image-upload" placeholder="Gambar" readonly style="border:0px;" value="<?php echo $file_gbrx; ?>">
		<div id="upload" ><img src="<?php echo $ico_gbrx; ?>" width="130" style="margin-top:10"/>
		<!-- IMPORT GAMBAR -->
		<input  type="file" class="btn btn-default" style="width:200px">
		<ul id="files"></ul>
		</div>
		
		</div>
		
		<!-- IMPORT AUDIO -->
		<div align="left">
		<span id="status2" ></span>
		  <input type="text" id="audio" name="audio-upload" placeholder="Audio" readonly style="border:0px;" value="<?php echo $file_audx; ?>">
		  <div id="upload2" >
		  <input  type="file" class="btn btn-default" style="width:200px">
		  <ul id="files2"></ul>
		  </div>
		  
		  </div>
		 
		 <!-- IMPORT VIDEO -->
		 <div align="left">
		 <span id="status3" ></span> 
		<input type="text" id="video" name="video-upload" placeholder="Video" readonly style="border:0px;" value="<?php echo $file_vidx; ?>">	
		 <div id="upload3" >
		<input  type="file" class="btn btn-default" style="width:200px">
		 <ul id="files3"></ul>
		 </div>
		 
		
		</div>
	</div>


</td>
  </tr>
  

<tr bgcolor="#507db3"><td colspan="4" style="padding:0px"><font color="#FFFFFF" size="2"><b>&nbsp;Pilihan Jawaban Soal PG</b></font></td></tr>

<?php
$sqltanya = mysql_query("select * from cbt_paketsoal where XKodeSoal= '$_REQUEST[soal]'");
$so=mysql_fetch_array($sqltanya); 
for($i=1;$i<=$so['XJumPilihan'] ;$i++){
$jwb = "XJawab$i";
$jawaban = "$s[$jwb]"; 
$gjwb = "XGambarJawab$i";
$gambarjawaban = "$s[$gjwb]"; 
$kuncijwb = "$s[XKunciJawaban]"; 
?>
<?php $var = $i +3 ; ?>
<script type="text/javascript" >
	$(function(){
		var btnUpload<?php echo $var; ?>=$('#upload<?php echo $var; ?>');
		var status<?php echo $var; ?>=$('#status<?php echo $var; ?>');
		new AjaxUpload(btnUpload<?php echo $var; ?>, {
			action: 'upload_jawab<?php echo $var; ?>.php',
			name: 'uploadfile<?php echo $var; ?>',
			onSubmit: function(file<?php echo $var; ?>, ext<?php echo $var; ?>){
				 if (! (ext<?php echo $var; ?> && /^(jpg|png|jpeg|gif)$/.test(ext<?php echo $var; ?>))){ 
                    // extension is not allowed 
					status<?php echo $var; ?>.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status<?php echo $var; ?>.text('Uploading...');
			},
			onComplete: function(file<?php echo $var; ?>, response<?php echo $var; ?>){
				//On completion clear the status
				status<?php echo $var; ?>.text('');
				//Add uploaded file to list
				
				if(response<?php echo $var; ?>==="success"){
				$('#upload<?php echo $var; ?>').html('<img src="../../pictures/'+file<?php echo $var; ?>+'"  width="130" alt="" />').addClass('success');
				document.getElementById("gambar<?php echo $var; ?>").value = file<?php echo $var; ?>
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files<?php echo $var; ?>').text(file<?php echo $var; ?>).addClass('error');
				}
			}
		});
		
	});
</script>
  
   	<td >
	
    <p style="margin-top:8px;margin-left:10px">Pilih Kunci Jawaban : <input type="radio" name="radio1" value="<?php echo $i; ?>" class="lcs_check lcs_tt2" autocomplete="off" <?php if($i==$kuncijwb){echo "checked='checked'";}?> ></p>
    </td>
   
   
    <tr>
    <td colspan="2" align="left" width="300" valign="top"> 
	<div class="col-sm-9">
 <textarea name="tanya"  id="jawab<?php echo $i; ?>" style="font-size:18px; width:100%; height:auto"><?php 
	$sql0 = mysql_query("select * from cbt_soal where XKodeSoal= '$_REQUEST[soal]' and Urut = '$_REQUEST[nomer]'");
	$s=mysql_fetch_array($sql0);
	echo "$jawaban"; ?></textarea>
	</div>

<div class="col-sm-3"> <span>&nbsp;&nbsp;Gambar Jawaban <?php echo $i; ?> </span><span>
<?php 
$GJ = str_replace("  ","",$s['XGambarJawab'.$i]);

if(!file_exists("../../pictures/$GJ")){
$gbrpic = "<img src='images/no_file.png'>";} 
else { 
	if($GJ==''){
	$gbrpic = "<img src='images/no_pic.png'>";} else {
	$gbrpic = "<img src='../../pictures/$GJ' width='100' style='margin-top:10'>";
	}
} 


?>

<div id="upload<?php echo $var; ?>" style="text-align:center; padding-right:10;"><?php echo $gbrpic; ?></div><span id="status<?php echo $var; ?>" ></span>
                        <ul id="files<?php echo $var; ?>"></ul>
           				</div><input type="text" id="gambar<?php echo $var; ?>" name="image-upload<?php echo $var; ?>" readonly style="border:0px;">

<?php $jwb = "XGambarJawab$jwb";?>
</span>
 </div>
 
</td>

  </tr>

<?php } ?>
   <tr><td colspan="2">&nbsp;</td></tr>
 </table>
  </form> 
</div></div> 

       
                                           
<script>    
$(document).ready(function(){

});

function confirmDialog(message, onConfirm){
    var fClose = function(){
        modal.modal("hide");
    };
    var modal = $("#confirmModal");
    modal.modal("show");
    $("#confirmMessage").empty().append(message);
    $("#confirmOk").one('click', onConfirm);
    $("#confirmOk").one('click', fClose);
    $("#confirmCancel").one("click", fClose);
}



});


</script>
                                                     
  <!-- Modal confirm -->
<div class="modal" id="confirmModal" style="display: none; z-index: 1050;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="confirmMessage">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="confirmOk">Ok</button>
                <button type="button" class="btn btn-default" id="confirmCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
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
    
 
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Buat Bank Soal Baru</h4>
      </div>
      <div class="modal-body">
        <?php include "buat_banksoalbaru.php";?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
	$('#myModal').on('hidden.bs.modal', function () {
	  document.location.reload();
	 // alert("tes");
	})
	
	$('#confirmModal').on('hidden.bs.modal', function () {
	  document.location.reload();
	  //alert("hapus");
	})
</script>


</body>

</html>
