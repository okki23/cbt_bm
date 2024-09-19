<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
	include "../../config/server.php";
$sqla = mysql_query("select * from cbt_admin");
$xadm = mysql_fetch_array($sqla);
$skulwarna=$xadm['XWarna'];
?>
<head>
 <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
	<script type="text/javascript" src="./src/jquery-1.4.js"></script>
	<script src="../vendor/jquery/jquery-1.12.3.js"></script>
    <script src="../vendor/jquery/jquery.dataTables.min.js"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
 <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
 </head>
 <script>    
$(document).ready(function(){
 $("#simpan").click(function(){
 //alert("hai");
 var nompes = $("#nompes").val();
 //alert(nompes);
 $.ajax({
     type:"POST",
     url:"resetlogin.php",    
     data: "aksi=simpan&nompes=" + nompes,
	 success: function(data){
	 $("#info").html(data);
	 tampildata();
	 }
	 });
	 });
	 
});
</script>
<body>

<div class="row">
<br>
<div class="panel panel-default">
<div class="panel panel-body">
<table class="table table-bordered" id="tabletable"  >
<tr  style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center" height="40px" bgcolor="<?php echo $skulwarna?>">
									<th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">&nbsp;No.</th>
                                    <th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">Nomer Ujian</th>
                                    <th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">Nama Siswa</th>
                                    <th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">Kelas</th>
                                    <!--<th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">Jurusan</th>
                                    <th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">NIS</th>-->
                                    <th style="color:#FFFFFF; font-style:normal; font-weight:normal; text-align:center">Status</th>
						</tr>
						<?php                    
						include "../../config/server.php";
						$sql = mysql_query("SELECT *,u.XStatusUjian as ujsta
						FROM cbt_siswa s
						LEFT JOIN `cbt_siswa_ujian` u ON u.XNomerUjian = s.XNomerUjian
						LEFT JOIN cbt_ujian c ON (u.XKodeSoal = c.XKodeSoal and u.XTokenUjian = c.XTokenUjian)
						WHERE c.XStatusUjian = '1'"); 
						$nom = 1;								
						while($s= mysql_fetch_array($sql)){ 
						$nama = str_replace("  ","",$s['XNamaSiswa']); 
						$nouji = str_replace("  ","",$s['XNomerUjian']); 
						$kodekelas = str_replace("  ","",$s['XKodeKelas']); 
						$kodeNIK = str_replace("  ","",$s['XNIK']); 
						$kodeJUR = str_replace("  ","",$s['XKodeJurusan']); 
						$staujian = str_replace("  ","",$s['ujsta']); 
						if($staujian =='0'){$staujian = "Belum Login";}
						elseif($staujian =='1'){$staujian = "<font color='#629ad8'> Masih Dikerjakan </font>";}
						elseif($staujian =='9'){$staujian = "<font color='#be425f'> Tes SELESAI </font>";}
						?>
                                <tr height="40px">
                                    <td width="5%">&nbsp;<?php echo $nom ; ?></td>
                                    <td width="15%"><?php echo $nouji; ?></td>
                                    <td width="40%"><?php echo $nama; ?></td>
                                    <td width="5%"><?php echo $kodekelas; ?></td>
                                    <!--<td width="5%"><?php echo $kodeJUR; ?></td>
                                    <td width="5%"><?php echo $kodeNIK; ?></td>-->
                                    <td width="20%"><?php echo "$staujian"; ?></td>
                                    </td>
                                </tr>
                                
                                <?php $nom++; } ?>
                                </table>
</div>
</div>
</div>
</body>

