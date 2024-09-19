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

   
</head>
<link rel="stylesheet" href="../vendor/sweetalert2/assets/bootstrap4-buttons.css">
	<link rel="stylesheet" href="../vendor/sweetalert2/dist/sweetalert2.min.css">
	<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
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
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
	
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
 //alert(a+b1+b2+c+d);	
var e = $('input[name=radio1]:checked').val();
//alert(e);
if ($("input[type=radio]:checked").length > 0) {
//alert(e);
} else {swal(
  'Oops...',
  'Pilih Kunci Jawaban dulu',
  'error'
); return false;}

var f = $("#map").val();

var g1 = $("#gambar4").val();
var g2 = $("#gambar5").val();
var g3 = $("#gambar6").val();
var g4 = $("#gambar7").val();
var g5 = $("#gambar8").val();

var h = $("#nomax").val();
var i = $("#txt_kate").val();
var j = $("#txt_kes").val();
var k = $("#txt_aca").val();
var l = $("#txt_ops").val();

$.ajax({
     type:"POST",
     url:"simpan_soal_tambah.php",    
     data: "aksi=simpan&txt_tanya=" + encodeURIComponent(a) + "&txt_jawab1=" + encodeURIComponent(b1) + "&txt_jawab2=" + encodeURIComponent(b2) + "&txt_jawab3=" + encodeURIComponent(b3) + "&txt_jawab4=" + encodeURIComponent(b4)  + "&txt_jawab5=" + encodeURIComponent(b5)  + "&txt_gbr=" + b6  + "&txt_audio=" + b7  + "&txt_video=" + b8 + "&txt_kunci=" + e + "&txt_soal=" + d + "&txt_nom=" + c + "&txt_gbr1=" + g1 + "&txt_gbr2=" + g2 + "&txt_gbr3=" + g3 + "&txt_gbr4=" + g4 + "&txt_gbr5=" + g5 + "&txt_mapel=" + f + "&txt_nomax=" + h + "&txt_kate=" + i + "&txt_kes=" + j + "&txt_aca=" + k + "&txt_ops=" + l,

	 success: function(data){
	 
	   swal({
  position: 'top-right',
  type: 'success',
  title: 'Soal Disimpan',
  showConfirmButton: false,
  timer: 1500,
 
});
 setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 1000);     
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
 $("#kirim").click(function(e){
  e.preventDefault();
 var ed = tinyMCE.get('tanyasoal');
 
var  a = tinymce.get('tanyasoal').getContent();
var b1 = tinymce.get('jawab1').getContent();
var b2 = tinymce.get('jawab2').getContent();
var b3 = tinymce.get('jawab3').getContent();
var b4 = tinymce.get('jawab4').getContent();
var b6 = $("#gambar").val();
var b7 = $("#audio").val();
var b8 = $("#video").val();

var c = $("#nom").val();
var d = $("#soal").val();
 //alert(a+b1+b2+c+d);	
var e = $('input[name=radio1]:checked').val();
//alert(e);
if ($("input[type=radio]:checked").length > 0) {
//alert(e);
} else {swal(
  'Oops...',
  'Pilih Kunci Jawaban dulu',
  'error'
); return false;}

var f = $("#map").val();

var g1 = $("#gambar4").val();
var g2 = $("#gambar5").val();
var g3 = $("#gambar6").val();
var g4 = $("#gambar7").val();

var h = $("#nomax").val();
var i = $("#txt_kate").val();
var j = $("#txt_kes").val();
var k = $("#txt_aca").val();
var l = $("#txt_ops").val();

$.ajax({
     type:"POST",
     url:"simpan_soal_tambah.php",    
     data: "aksi=simpan&txt_tanya=" + encodeURIComponent(a) + "&txt_jawab1=" + encodeURIComponent(b1) + "&txt_jawab2=" + encodeURIComponent(b2) + "&txt_jawab3=" + encodeURIComponent(b3) + "&txt_jawab4=" + encodeURIComponent(b4)  + "&txt_gbr=" + b6  + "&txt_audio=" + b7  + "&txt_video=" + b8 + "&txt_kunci=" + e + "&txt_soal=" + d + "&txt_nom=" + c + "&txt_gbr1=" + g1 + "&txt_gbr2=" + g2 + "&txt_gbr3=" + g3 + "&txt_gbr4=" + g4 + "&txt_mapel=" + f + "&txt_nomax=" + h + "&txt_kate=" + i + "&txt_kes=" + j + "&txt_aca=" + k + "&txt_ops=" + l,

	 success: function(data){
	   swal({
  position: 'top-right',
  type: 'success',
  title: 'Soal Disimpan',
  showConfirmButton: false,
  timer: 1500,
 
});
 setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 1000);     


	  data.preventDefault();
	 //$("#info").html(data);
		//alert(txt_durasi);
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
<form action="#" method="post">

<?php	
$sqltanya = mysql_query("select * from cbt_paketsoal where XKodeSoal= '$_REQUEST[soal]'");
	$so=mysql_fetch_array($sqltanya);
$sqlsoal = mysql_query("SELECT MAX(XNomerSoal) as maksi FROM `cbt_soal` WHERE XKodeSoal = '$_REQUEST[soal]'");
	$sm = mysql_fetch_array($sqlsoal);
	$maks = $sm['maksi']+1;
	?>
<br>
<div class="panel panel-default">
	<div class="panel-heading">
    
	<?php echo "<a href=?modul=edit_soal&jum=$_REQUEST[jum]&soal=$_REQUEST[soal]><button type='button' class='btn btn-info'><i class='fa fa-arrow-left'></i> <span class='hidden-xs'>Kembali ke Daftar Soal</span></button></a>"; ?>	
    <button type="submit" class="btn btn-success btn-small" id="kirim"><i class='fa fa-save'></i> <span class="hidden-xs">Simpan Soal</span></button>     
	<div style="float:right">
	<span class="btn btn-danger">Soal No :  <?php echo $maks ; ?></span>
    </div>
	</div>
	
<div class="panel-body">
 
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td align="right">
    <input type="hidden" id="soal" name="soal" value="<?php echo $_REQUEST['soal']; ?>" />
    <input type="hidden" id="map" name="map" value="<?php echo $so['XKodeMapel']; ?>" />
	
	<input type="hidden" id="nomax" name="nomax" value="<?php echo $maks ; ?>" />
    </strong></td>
	</tr>
	<tr>
	
	</tr>
	<tr>
	<td colspan="3">
		<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Jenis Soal</label><span class="label label-success">Pilihan Ganda</span>
		<input type="hidden" id="txt_kate" name="txt_kate" value="1" readonly size="1" style="margin-bottom:5px" >
		</div>
		<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Tk. Kesulitan</label>
		<select id="txt_kes" name="txt_kes" class="input-sm"  style="margin-bottom:5px" />
		<option value="1">Mudah</option>
		<option value="2">Sedang</option>
		<option value="3">Sulit</option>
		</select>
		 </div>
		<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Acak Soal</label>
		<select id="txt_aca" name="txt_aca" class="input-sm"/>
		<option value="A">Acak</option>
		<option value="T">Tidak</option>
		</select>
		 </div>
		<div class="col-sm-3"><label style="width:100px; font-style:normal; font-weight:normal">Acak Opsi</label>
		<select id="txt_ops" name="txt_ops" class="input-sm"/>
		<option value="Y">Acak</option>
		<option value="T">Tidak</option>
		</select>
		</div>
	</td>
	</tr>   
	  
    <td colspan="3" align="right">

	<div class="col-sm-9">
	<textarea name="tanyasoal"  id="tanyasoal" style="font-size:18px; width:100%; height:auto">
    </textarea>
		
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
				$('#upload').html('<img src="../../pictures/'+file+'"  width="100" alt="" />').addClass('success');
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
					status2.text('Only MP3 OR WAV files are allowed');
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
	<div class="col-sm-3">
		<div align="left">
		<span id="status" ></span>
		<input type="files" id="gambar" name="image-upload" placeholder="Gambar" readonly style="border:0px;">
		<div id="upload" >
		<!-- IMPORT GAMBAR -->
		<input  type="file" class="btn btn-default" style="width:200px">
		<ul id="files"></ul>
		</div>
		
		</div>
		
		<!-- IMPORT AUDIO -->
		<div align="left">
		<span id="status2" ></span>
		  <input type="text" id="audio" name="audio-upload" placeholder="Audio" readonly style="border:0px;">
		  <div id="upload2" >
		  <input  type="file" class="btn btn-default" style="width:200px">
		  <ul id="files2"></ul>
		  </div>
		  
		  </div>
		 
		 <!-- IMPORT VIDEO -->
		 <div align="left">
		 <span id="status3" ></span> 
		<input type="text" id="video" name="video-upload" placeholder="Video" readonly style="border:0px;">	
		 <div id="upload3" >
		<input  type="file" class="btn btn-default" style="width:200px">
		 <ul id="files3"></ul>
		 </div>
		 
		
		</div>
	</div>
	
    </td>
  </tr>
 
 
<tr bgcolor="#507db3"><td colspan="3" style="padding:2px"><font color="#FFFFFF" size="3"><b>&nbsp;Pilihan Jawaban Soal PG</b></font></td></tr>

<?php
for($i=1;$i<=$so['XJumPilihan'] ;$i++){
$jwb = "XJawab$i";
$gjwb = "XGambarJawab$i";
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
  
  <tr>
   	<td width="70px" height="50px">
	 
    <p style="margin-top:8px;margin-left:3px">Kunci Jawaban :  <input type="radio" name="radio1" value="<?php echo $i; ?>" class="lcs_check lcs_tt2" autocomplete="off" ></p>
    </td>
  </tr>
    <tr>
    
	<td>
	<div class="col-sm-9">
	<textarea name="tanya"  id="jawab<?php echo $i; ?>" style="font-size:14px; width:100%; height:100px"></textarea>
    
	</div>
	<div class="col-sm-3"> 
	
	
	<span  id="status<?php echo $var; ?>" ></span>
		<input type="files" id="gambar<?php echo $var; ?>" name="image-upload" placeholder="Gambar" readonly style="border:0px;">
		<div id="upload<?php echo $var; ?>"  >
		<!-- IMPORT GAMBAR -->
		<input  type="file" class="btn btn-default" style="width:200px">
		<ul id="files<?php echo $var; ?>"></ul>
		</div>
	</div>
 
</td>
    
  </tr>
  
<?php } ?>
   <tr><td colspan="2">&nbsp;</td></tr>
 </table>
</div></div> 
</form>
                   
                                                               
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

   


</body>

</html>
