<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
<link rel="stylesheet" type="text/css" href="./styles.css" />
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: 'upload-potoguru.php',
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
				$('#upload').html('<img src="photo/'+file+'"  width="200" alt="" />').addClass('success');
//					$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
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

 
 var txt_nama = $("#nama").val();
 var txt_nip = $("#nip").val();
 var txt_alamat = $("#alamat").val();
 var txt_telp = $("#telp").val();
 var txt_kelamin = $("#kelamin").val();
 var txt_email = $("#email").val();
  
 $.ajax({
     type:"POST",
     url:"ubahbiodata.php",    
     data: "aksi=simpan&txt_nama=" + txt_nama + "&txt_nip=" + txt_nip + "&txt_alamat=" + txt_alamat + "&txt_telp=" + txt_telp + "&txt_kelamin=" + txt_kelamin + "&txt_email=" + txt_email,
	 success: function(data){
	 	loading.fadeOut();
		$("#info").html(data);
		$("#info").fadeOut(2000);
	 }
	 });
	 });

});
 
</script>
<div id="mainbody" >
<?php
include "../../config/server.php";
$sql = mysql_query("select * from cbt_user WHERE Username='$_COOKIE[beeuser]'");
$xadm = mysql_fetch_array($sql);

$nama= $xadm['Nama'];
$nip= $xadm['NIP'];
$alamat= $xadm['Alamat']; 
$telp= $xadm['HP']; 
$kelamin= $xadm['kelamin'];
$email= $xadm['Email']; 
$poto= $xadm['XPoto'];
$sqla = mysql_query("select * from cbt_admin");
$xadu = mysql_fetch_array($sqla);
$skulwarna=$xadu['XWarna'];
?><br />
<span>
    <div class="left">
    
    
    
    				<div class="panel panel-default">
                        <div style="background-color:<?php echo $skulwarna?>"class="panel-heading">
                            Edit Biodata
                        </div>
                        <div class="panel-body">
                            <table width="100%">
                            <tr height="42px"><td width="40%">Username&nbsp;</td><td>: <?php echo "$_COOKIE[beeuser]"; ?></td></tr>
                            <tr height="42px"><td width="40%">Nama&nbsp;</td><td>: <input type="text" id="nama" value="<?php echo "$nama"; ?>"/></td></tr>
                            <tr height="42px"><td>NIP&nbsp;</td><td>: <input type="text" id="nip" value="<?php echo "$nip"; ?>" /></td></tr>
                            <tr height="42px"><td>Alamat&nbsp;</td><td>: <input type="textarea" id="alamat"  cols="20" rows="2" value="<?php echo "$alamat"; ?>"/></td></tr>
                            <tr height="42px"><td>No. Telp&nbsp;</td><td>: <input type="text" id="telp"  value="<?php echo "$telp"; ?>"/></td></tr>
                            <tr height="42px"><td>Kelamin&nbsp;</td><td>: <select class="" name="kelamin" id="kelamin">
			            <option value="Pria" >Pria</option>
						<option value="Wanita" >Wanita</option>
					</select></td></tr>
                            <tr height="42px"><td>Email&nbsp;</td><td>: <input type="text" id="email"  value="<?php echo "$email"; ?>"/></td></tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <input type="submit"  class="btn btn-info btn-lg btn-small" id="simpan" name="simpan" value="Simpan">
                            <div id="info"></div><div id="loading"><img src="images/loading.gif" height="10"></div>
                        </div>
                    </div>
			
			</div>
<div class="group">
    <div class="right">
             <div class="panel panel-info" style="padding-top:20">
                        <div class="panel-heading" style=" text-align:center">
                            Upload Photo : 
                        </div>
                        <div class="panel-body">
                          
                        <!-- Upload Button, use any id you wish-->
                        <div id="upload" style="text-align:center"><img src="photo/<?php echo "$poto"; ?>" width="100"/></div><span id="status" ></span>
                        <ul id="files"></ul>
           				</div>
               			<div class="panel-footer" style=" text-align:center">Klik Picture untuk Ganti Foto
                        </div>
               
            </div>


                

    </div>	
</div>                    
</body>
<?php

?>