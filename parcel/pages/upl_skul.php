<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>AJAX File Upload - Web Developer Plus Demos</title>
<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="./styles.css" />
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: 'upload-file.php',
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
				$('#upload').html('<img src="../../images/'+file+'"  width="200" alt="" />').addClass('success');
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
		var btnUpload1=$('#upload1');
		var status1=$('#status1');
		new AjaxUpload(btnUpload1, {
			action: 'upload-banner.php',
			name: 'uploadfile1',
			onSubmit: function(file1, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status1.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status1.text('Uploading...');
			},
			onComplete: function(file1, response){
				//On completion clear the status
				status1.text('');
				//Add uploaded file to list
				
				if(response==="success"){
				$('#upload1').html('<img src="../../images/'+file1+'"  width="200" alt="" />').addClass('success');
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files1').text(file1).addClass('error');
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
			action: 'upload-login.php',
			name: 'uploadfile2',
			onSubmit: function(file2, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status2.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status2.text('Uploading...');
			},
			onComplete: function(file2, response){
				//On completion clear the status
				status2.text('');
				//Add uploaded file to list
				
				if(response==="success"){
				$('#upload2').html('<img src="../../images/'+file2+'"  width="200" alt="" />').addClass('success');
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
			action: 'upload-login.php',
			name: 'uploadfile3',
			onSubmit: function(file3, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status3.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status3.text('Uploading...');
			},
			onComplete: function(file3, response){
				//On completion clear the status
				status3.text('');
				//Add uploaded file to list
				
				if(response==="success"){
				$('#upload3').html('<img src="images/'+file3+'"  width="100" alt="" />').addClass('success');
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files3').text(file3).addClass('error');
				}
			}
		});
		
	});
</script>
<script type="text/javascript" >
	$(function(){
		var btnUpload4=$('#upload4');
		var status4=$('#status4');
		new AjaxUpload(btnUpload4, {
			action: 'upload-header.php',
			name: 'uploadfile4',
			onSubmit: function(file4, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status4.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status4.text('Uploading...');
			},
			onComplete: function(file4, response){
				//On completion clear the status
				status4.text('');
				//Add uploaded file to list
				
				if(response==="success"){
				$('#upload4').html('<img src="images/'+file4+'"  width="100" alt="" />').addClass('success');
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files3').text(file4).addClass('error');
				}
			}
		});
		
	});
</script>
<style>
.left {
    float: left;
    width: 73%;
}
.right {
    float: right;
    width: 25%;
}
.group:after {
    content:"";
    display: table;
    clear: both;
}
img {
    max-width: 100%;
    height: auto;
}
@media screen and (max-width: 480px) {
    .left, 
    .right {
        float: none;
        width: auto;
		margin-top:10px;		
    }
	
}
</style>
</head>
<body>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 	var loading = $("#loading");
	var tampilkan = $("#tampilkan");

	loading.hide()
//apabila terjadi event onchange terhadap object <select id=propinsi>
 $("#simpan").click(function(){

 
 var txt_nama = $("#namaskul").val();
 var txt_ting = $("#tingkatskul").val();
 var txt_alam = $("#alamatskul").val();
 var txt_telp = $("#telpskul").val();
 var txt_facs = $("#faxskul").val();
 var txt_emai = $("#emailskul").val();
 var txt_webs = $("#webskul").val();  
 var txt_ip = $("#kepsek").val();
 var txt_adm = $("#txt_adm").val();  
 var txt_nip1 = $("#nipkepsek").val();   
 var txt_nip2 = $("#nipadmin").val();  
 var txt_col = $("#txt_col").val();  
 var txt_col = $("#txt_col").val();  
 var txt_kode = $("#txt_kode").val();  
 var txt_prop = $("#prop").val();  
 var txt_kab = $("#kota").val();  
 var txt_kec = $("#kec").val();
  
 $.ajax({
     type:"POST",
     url:"ubahdata.php",    
     data: "aksi=simpan&txt_nama=" + txt_nama + "&txt_ting=" + txt_ting + "&txt_alam=" + txt_alam + "&txt_telp=" + txt_telp + "&txt_facs=" + txt_facs + 
	 "&txt_emai=" + txt_emai + "&txt_webs=" + txt_webs + "&txt_ip=" + txt_ip + "&txt_adm=" + txt_adm + "&txt_col=" + txt_col + "&txt_kode=" + txt_kode + 
	 "&txt_nip1=" + txt_nip1 + "&txt_nip2=" + txt_nip2 + "&txt_prop=" + txt_prop + "&txt_kab=" + txt_kab + "&txt_kec=" + txt_kec,
	 success: function(data){
	 	loading.fadeOut();
		$("#info").html(data);
		$("#info").fadeOut(2000);
		
           location.reload(); // then reload the page.(3)
      
	 }
	 });
	 });

});
 
</script>
<div id="mainbody" >
<?php
include "../../config/server.php";
$sql = mysql_query("select * from cbt_admin");
$xadm = mysql_fetch_array($sql);
$skulpic= $xadm['XLogo'];
$skulban= $xadm['XBanner'];
$skulnam= $xadm['XSekolah']; 
$skultin= $xadm['XTingkat']; 
$skulala= $xadm['XAlamat'];
$skultel= $xadm['XTelp']; 
$skulfax= $xadm['XFax'];
$skulema= $xadm['XEmail']; 
$skulweb= $xadm['XWeb'];
$skulkep= $xadm['XKepSek']; 
$skulweb= $xadm['XWeb'];
$skuladm= $xadm['XAdmin']; 
$admpic= $xadm['XPicAdmin']; 
$skulkode= $xadm['XKodeSekolah']; 
$skulnip1= $xadm['XNIPKepsek']; 
$skulnip2= $xadm['XNIPAdmin']; 
$skullogin= $xadm['XLogin'];
$prop= $xadm['XProp'];
$kab= $xadm['XKab'];
$kec= $xadm['XKec'];
$colhead= $xadm['XWarna'];  //#ffca01
?>
<?php
$sql1 = mysql_query("select * from inf_lokasi where lokasi_kabupatenkota='$kab' and lokasi_propinsi='$prop' and lokasi_kecamatan='0000' and lokasi_kelurahan='0000'");
$xadm1 = mysql_fetch_array($sql1);
$xkab= $xadm1['lokasi_nama'];
?>
<?php
$sql2 = mysql_query("select * from inf_lokasi where lokasi_kecamatan='$kec' and lokasi_kabupatenkota='$kab' and lokasi_propinsi='$prop' and lokasi_kelurahan='0000'");
$xadm2 = mysql_fetch_array($sql2);
$xkec= $xadm2['lokasi_nama'];
?>
<?php
$sql3 = mysql_query("select * from inf_lokasi where lokasi_propinsi='$prop' and lokasi_kecamatan='00' and lokasi_kelurahan='0000' and lokasi_kabupatenkota='00'");
$xadm3 = mysql_fetch_array($sql3);
$xprop= $xadm3['lokasi_nama'];
?> <br />
<span>

<div class="group">
    <div class="right">

				<div class="panel panel-default" style="padding-top:20">
                        <div class="panel-heading" style=" text-align:center">
                            Update Gambar Login : 
                        </div>
                        <div class="panel-body">
                          
                        <!-- Upload Button, use any id you wish-->
                        <div id="upload2" style="text-align:center"><img src="../../images/<?php echo "$skullogin"; ?>" width="150"/></div><span id="status2" ></span>
                        <ul id="files2"></ul>
           				</div>
               			<div class="panel-footer" style=" text-align:center">Klik Picture untuk Ganti Gambar<br/>Ekstensi File harus ; Jpg
                        </div>
               
                </div>
				<div class="panel panel-default" style="padding-top:20">
                        <div class="panel-heading" style=" text-align:center">
                            Update Logo Sekolah : 
                        </div>
                        <div class="panel-body">
                          
                        <!-- Upload Button, use any id you wish-->
                        <div id="upload" style="text-align:center"><img src="../../images/<?php echo "$skulpic"; ?>" width="110px"/></div><span id="status" ></span>
                        <ul id="files"></ul>
           				</div>
               			<div class="panel-footer" style=" text-align:center">Klik Picture untuk Ganti Logo<br/>Ekstensi File harus ; Jpg
                        </div>
               
                </div>
                <div class="panel panel-default" style="padding-top:20">
                        <div class="panel-heading" style=" text-align:center">
                            Update Banner Sekolah : 
                        </div>
                        <div class="panel-body">
                          
                        <!-- Upload Button, use any id you wish-->
                        <div id="upload1" style="text-align:center"><img src="../../images/<?php echo "$skulban"; ?>" height="170px"/></div><span id="status1" ></span>
                        <ul id="files1"></ul>
           				</div>
               			<div class="panel-footer" style=" text-align:center">Klik Picture untuk Ganti Banner
                        <br/>Ukuran Banner 470x101 pixel</div>
               
                </div>
				<!--<div class="panel panel-info" style="padding-top:20">
                        <div class="panel-heading" style=" text-align:center">
                            Upload Foto Admin: 
                        </div>
                        <div class="panel-body">
                     
                        <div id="upload2" style="text-align:center"><img src="photo/<?php echo "$admpic"; ?>" width="100"/></div><span id="status2" ></span>
                        <ul id="files2"></ul>
           				</div>
               			<div class="panel-footer" style=" text-align:center">Klik Picture untuk Ganti Foto
                        </div>
               
                </div>-->


                

    </div>
    <div class="left">
    
    
    
    				<div class="panel panel-default">
                        
                        <div class="panel-body">
                            <table width="100%">
                            <tr height="42px"><td width="40%">Kode Sekolah&nbsp;</td><td>: 
							
							<select id="txt_kode"  >
								<?php $sqk = mysql_query("select * from server_sekolah group by XServerId");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XServerId]' class='form-control' >$rs[XServerId]</option>";} ?>                                
                                </select> 
							</td></tr>
                            <tr height="42px"><td width="40%">Nama Sekolah&nbsp;</td><td>: <input type="text" id="namaskul" value="<?php echo "$skulnam"; ?>"/></td></tr>
                            <tr height="42px"><td>Level Sekolah&nbsp;</td><td>: 
                            <select id="tingkatskul">
                            <?php if($skultin=="SMA"){echo "Selected";}?>                            
                            
                            <option value="TK">TK</option>                            
                            <option value="SD">SD</option>
                            <option value="MI">MI</option>                            
                            <option value="SMP" <?php if($skultin=="SMP"){echo "Selected";}?>>SMP</option>
                            <option value="MTs" <?php if($skultin=="MTs"){echo "Selected";}?>>MTs</option>                            
                            <option value="SMU" <?php if($skultin=="SMU"){echo "Selected";}?>>SMU</option>
                            <option value="MA" <?php if($skultin=="MA") {echo "Selected";}?>>MA</option>                            
                            <option value="SMK" <?php if($skultin=="SMK"){echo "Selected";}?>>SMK</option>  
                            
                            </select>
                                                      
                            <script src="../js/jscolor.js"></script>
                            <tr height="42px"><td>Alamat Sekolah&nbsp;</td><td>: <input type="text" id="alamatskul"  value="<?php echo "$skulala"; ?>"/></td></tr>
                            <tr height="42px"><td>Propinsi&nbsp;</td><td>:
							<script type="text/javascript" src="js/ajax_kota.js"></script>
							<select name="prop" id="prop" onchange="ajaxkota(this.value)">
							<option value="<?php echo "$prop"; ?>"/><?php echo "$xprop"; ?></option>
							<?php
								$queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
								while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
								echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
								}
							?><select>
							</td></tr>
                            <tr height="42px"><td>Kabupaten&nbsp;</td><td>:
                            <select name="kota" id="kota" onchange="ajaxkec(this.value)">
								<option value="<?php echo "$kab"; ?>"/><?php echo "$xkab"; ?></option>
							</select></td></tr>
							<tr height="42px"><td>Kecamatan&nbsp;</td><td>:
							<select name="kec" id="kec" onchange="ajaxkel(this.value)">
								<option value="<?php echo "$kec"; ?>"/><?php echo "$xkec"; ?></option>
							</select></td></tr>
                            <tr height="42px"><td>No. Telp&nbsp;</td><td>: <input type="text" id="telpskul"  value="<?php echo "$skultel"; ?>"/></td></tr>
                            <tr height="42px"><td>IP Server&nbsp;</td><td>: <input type="text" id="faxskul"  value="<?php echo "$skulfax"; ?>"/></td></tr>
                            <tr height="42px"><td>Email Sekolah &nbsp;</td><td>: <input type="text" id="emailskul"  value="<?php echo "$skulema"; ?>"/></td></tr>
                            <tr height="42px"><td>Website Sekolah &nbsp;</td><td>: <input type="text" id="webskul" value="<?php echo "$skulweb"; ?>" /></td></tr>
                            <tr height="42px"><td>Kepala Sekolah&nbsp;</td><td>: <input type="text" id="kepsek" value="<?php echo "$skulkep"; ?>" /></td></tr>
                            <tr height="42px"><td>NIP KepSek&nbsp;</td><td>: <input type="text" id="nipkepsek" value="<?php echo "$skulnip1"; ?>" /></td></tr>
                            <tr height="42px"><td>CBT Administrator &nbsp;</td><td>: <input type="text" id="txt_adm" value="<?php echo "$skuladm"; ?>" /></td></tr>
                            <tr height="42px"><td>NIP Admin&nbsp;</td><td>: <input type="text" id="nipadmin" value="<?php echo "$skulnip2"; ?>" /></td></tr>
                            <tr height="42px"><td>Warna Header &nbsp;</td><td>: <input id="txt_col" type="text"  class="jscolor {hash:true}" value="<?php echo $colhead; ?>" />
							</td></tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <input type="submit"  class="btn btn-info btn-lg btn-small" id="simpan" name="simpan" value="Simpan">
                            <div id="info"></div><div id="loading"><img src="images/loading.gif" height="10"></div>
                        </div>
                    </div>
<script>
    $(function() {
        $('#cp1').colorpicker();
    });
</script>
				<table width="100%">
				<td width="49%">
				</td><td width="2%"> &nbsp&nbsp</td>
				<td width="49%">
				<!--<div class="panel panel-info" style="padding-top:20">
                        <div class="panel-heading" style=" text-align:center">
                            Update Header Login Admin: 
                        </div>
                        <div class="panel-body">
                          
                        <!-- Upload Button, use any id you wish
                        <div id="upload4" style="text-align:center"><img src="images/headerlogin.png" height="200px"/></div><span id="status4" ></span>
                        <ul id="files4"></ul>
           				</div>
               			<div class="panel-footer" style=" text-align:center">Klik Picture untuk Ganti Foto
						<br/>Ukuran Banner 470x101 pixel</div>
                        </div>-->
               </td>
            </table>
			</div>
</div>
</div>                    
</body>