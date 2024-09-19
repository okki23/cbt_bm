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
<style>
.left {
    float: left;
    width: 25%;
}
.right {
    float: left;
    width: 100%;
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
 var txt_id = $("#server").val();
 var txt_ip = $("#ip_server").val();
 var txt_user = $("#userm").val();
 var txt_pas = $("#pas_data").val();
  
 $.ajax({
     type:"POST",
     url:"ubahserver.php",    
     data: "aksi=simpan&txt_ip=" + txt_ip + "&txt_user=" + txt_user + "&txt_pas=" + txt_pas ,
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
$sql = mysql_query("select * from server_sekolah");
$xadm = mysql_fetch_array($sql);
$serverid= $xadm['XServerId'];
$servername= $xadm['XServerName'];
$skulnam= $xadm['XSekolah']; 
$ipserver= $xadm['XIPSekolah']; 
$skulala= $xadm['XStatus'];
$database= $xadm['XDatabase']; 
$passw= $xadm['XPass'];
?><br />
<span>

<div class="group">
    <div class="right">
    
    
    
    				<div class="panel panel-primary">
                        <div class="panel-heading">
                            Setting Server Pusat
                        </div>
                        <div class="panel-body">
                            <table width="100%">
                            <tr height="42px"><td width="40%">Id Sekolah&nbsp;</td><td>: <?php echo "$serverid"; ?></td></tr>
                            <tr height="42px"><td width="40%">Nama Sekolah&nbsp;</td><td>: <?php echo "$skulnam"; ?></td></tr>
                            <tr height="42px"><td>IP/Hostname Server Pusat&nbsp;</td><td>: <input type="text" id="ip_server"  value="<?php echo "$ipserver"; ?>"/></td></tr>
                            <tr height="42px"><td>Username Db&nbsp;</td><td>: <input type="text" id="userm"  value="<?php echo "$database"; ?>"/></td></tr>
                            <tr height="42px"><td>Pass Db Pusat&nbsp;</td><td>: <input type="password" id="pas_data"  value="<?php echo "$passw"; ?>"/></td></tr>
                             
<script>
    $(function() {
        $('#cp1').colorpicker();
    });
</script></td></tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <input type="submit"  class="btn btn-info btn-lg btn-small" id="simpan" name="simpan" value="Simpan">
                            <div id="info"></div><div id="loading"><img src="images/loading.gif" height="10"></div>
                        </div>
                    </div>
    
    
    
	</div>
</div>    

</div>                    
</body>