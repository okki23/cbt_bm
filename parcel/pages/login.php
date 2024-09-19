<?php
include "../../config/server.php";
error_reporting(0);
$sql = mysql_query("select * from cbt_admin");
$xadm = mysql_fetch_array($sql);
$skull= $xadm['XSekolah'];
$skul_pic= $xadm['XBanner'];
$skul_ban= $xadm['XLogin']; 
$skul_tkt= $xadm['XTingkat']; 
$skul_warna= $xadm['XWarna']; 
$skul_web= $xadm['XWeb']; 
$skul_alamat= $xadm['XAlamat']; 
$skul_tlp= $xadm['XTelp']; 
$skul_email= $xadm['XEmail']; 
$skul_prop= $xadm['XProp']; 
$skul_adm= strtoupper($xadm['XAdmin']); 
$status_server = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN CBT</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap2.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   
<style>
html, body {
height: 100%;
}
input[type=text] {
   
    margin: 8px 0;
    box-sizing: border-box;
	border:0;
	    border-bottom: 2px solid #939292;
    background-color: #eae9e9;
    color: #999;
	width:100%;
}
input[type=text]:focus {
    background-color: #fff;
    color: #999;
	width:100%;
}
input[type=password] {
   
    margin: 8px 0;
    box-sizing: border-box;
	border:0;
	    border-bottom: 2px solid #939292;
    background-color: #eae9e9;
    color: white;
	width:100%;
}
input[type=password]:focus {
    background-color: #fff;
    color: #999;
	width:100%;
}
.switch-field {
  font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
	overflow: hidden;
}

.switch-title {
  margin-bottom: 6px;
}

.switch-field input {
  display: none;
}

.switch-field label {
  float: left;
}

.switch-field label {
  display: inline-block;
  width: 60px;
  background-color: #e4e4e4;
  color: rgba(0, 0, 0, 0.6);
  font-size: 14px;
  font-weight: normal;
  text-align: center;
  text-shadow: none;
  padding: 6px 14px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition:    all 0.1s ease-in-out;
  -ms-transition:     all 0.1s ease-in-out;
  -o-transition:      all 0.1s ease-in-out;
  transition:         all 0.1s ease-in-out;
}

.switch-field label:hover {
	cursor: pointer;
}

.switch-field input:checked + label {
  background-color: #A5DC86;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.switch-field label:first-of-type {
  border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
  border-radius: 0 4px 4px 0;
}
#ingat{width:100%; height:130px; background-color:#FBECF0; border:0; border-left:thick #FF0000 solid; padding-left:10; padding-top:15}
</style>
</head>
	
<body style="background:url(../../images/<?php echo "$skul_ban";?>);background-size:cover; background-repeat:no-repeat;">

<script>
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);
    </script>
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="script.js"></script>
	<script>function validateForm() {
		var x = document.forms["loginform"]["userz"].value;
		var y = document.forms["loginform"]["passz"].value;
		var peluru = '\u2022';
		if (x == null || x == "" || y == null || y == "") {
	//        alert("Name must be filled out");
			document.getElementById("ingat").style.display = "block";
			document.getElementById("isine").textContent= peluru+"Username dan Password harus diisi";
			return false;
		}
		
		
	}

	</script>
	<?php
		// Connect to MySQL
		include "../../config/server.php";

		if(isset($sqlconn)){
		//echo "Database $sqlconn";
		} else {
		$pesan1 = "Tidak dapat Koneksi Database.";
		}
		if (!$sqlconn) {
			die('Could not connect: ' . mysql_error());
		}

		// Make my_db the current database
		$db_selected = mysql_select_db('dbpusat', $sqlconn);

		if (!$db_selected) {
		  // If we couldn't, then it either doesn't exist, or we can't see it.
		  $sql = 'CREATE DATABASE dbpusat';

		  if (mysql_query($sql, $sqlconn)) {
		  //    echo "Database my_db created successfully\n";
		  
		  
		  } else {
		  //    echo 'Error creating database: ' . mysql_error() . "\n";
		  }
		}
		$val = mysql_query('select 1 from `cbt_admin` LIMIT 1');
		?>
					<div id="ingat" style=" display:none"> <p>
						<span style=" padding:20px; padding-top:20; font-size:39px">Peringatan</span>
					</p>        
						<p>
						<span id="isine" style="color:#CC3300; margin-left:20px;" >
					 <?php 
						if($val == FALSE)
						{?>
						<script>
						$(document).ready(function(){
							var peluru = '\u2022';
								document.getElementById("ingat").style.display = "block";
								document.getElementById("isine").textContent= peluru+" <?php echo "Database belum Terbentuk, Klik disini untuk Proses Buat Database"; ?>";
								return false;
						});		
						</script>
						<?php 
						}
						?>
									</span>
									<?php 
						if($val == FALSE)
						{?><a href="buat_database.php">
						<input type="submit"  class="btn btn-danger btn-sm" value="Buat Database"></a>
						<?php 
						}
						?>
						</p> 
						</div> 

    <div class="container">
       
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    
                    <div class="panel-body">
					<div style="float:center"><img  class="img img-responsive"  src="../../images/<?php echo "$skul_pic"; ?>"></div>
					Silahkan masukkan Username dan Password </p>
					
                        <form role="form" id="loginform"  name="loginform" onSubmit="return validateForm();" action="../pages/ceklogin.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" id="userz" name="userz" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="passz" name="passz" type="password" value="">
                                </div>
                                <div class="switch-field">
								  <input type="radio" id="switch_left" name="login" value="admin" checked/>
								  <label for="switch_left">Admin</label>
								  <input type="radio" id="switch_right" name="login" value="guru" />
								  <label for="switch_right">Guru</label>
								</div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php 
								if(!$val == FALSE) {?>   
								<p style="text-align:right; width:100%"><input type="submit"  class="btn btn-info  btn-small" value="Masuk"  ></p>
								<?php 
								}
								?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
