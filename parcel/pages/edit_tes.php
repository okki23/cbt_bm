<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
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

   
</head>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="./src/jquery-1.4.js"></script>

 <?php 
 $tgljam = date("Y/m/d H:i");  
 $tgl = date("Y/m/d"); 
 ?>
  <link rel="stylesheet" type="text/css" href="./src/jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}

</style>
<style>
.asd {
  display: inline-block;
  width: 50%;
}
</style>
<?php 
$tgx = 29;
$blx = 09;
$thx = 2016;

$tglx = date("Y/m/d");
$jamx = date("H:i:s");
?>
<script src="date/jquery.js"></script>
<script src="./src/jquery.datetimepicker.full.js"></script>
<?php
$sql = mysql_query("select p.*,m.*,p.Urut as Urutan,p.XKodeKelas  as kokel from cbt_paketsoal p left join cbt_mapel m on m.XKodeMapel = p.XKodeMapel where p.XStatusSoal='Y' and p.Urut = '$_REQUEST[idtes]'");
$s = mysql_fetch_array($sql);
?>

<body>

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Setting Jadwal Tes Baru</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

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
$('#mulai2').datetimepicker({
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
                          
<script>    
$(document).ready(function(){
	$("#txt_durasi<?php echo $s['Urutan']; ?>").change(function(){
		var txt_durasi = $("#txt_durasi<?php echo $s['Urutan']; ?>").val();
		$.ajax({
		url: "ambil_token.php",
		data: "txt_ujian="+txt_durasi,
		cache: false,
		success: function(msg){
		$("#txt_token<?php echo $s['Urutan']; ?>").val(msg);
		}
		});
	});

 $("#kirim<?php echo $s['Urutan']; ?>").click(function(){
 //alert("tes");
 var txt_ujian = $("#txt_ujian<?php echo $s['Urutan']; ?>").val();
 var txt_semester = $("#txt_semester<?php echo $s['Urutan']; ?>").val();
 var txt_waktu = $("#datetimepicker_mask<?php echo $s['Urutan']; ?>").val();
 var txt_token = $("#txt_token<?php echo $s['Urutan']; ?>").val();
 var txt_durasi = $("#txt_durasi<?php echo $s['Urutan']; ?>").val();
 var txt_kodesoal = $("#txt_kodesoal<?php echo $s['Urutan']; ?>").val();
 var txt_sesi = $("#txt_sesi<?php echo $s['Urutan']; ?>").val();
 var txt_hasil = $("#txt_hasil<?php echo $s['Urutan']; ?>").val();
 var mulai2 = $("#mulai2").val();
 
 
 if(txt_durasi==""){
 alert("Durasi Ujian masih KOSONG");
 return false;
 }
  
 $.ajax({
     type:"POST",
     url:"simpan_jadwal.php",    
     data: "aksi=simpan&txt_ujian=" + txt_ujian + "&txt_waktu=" + txt_waktu + "&txt_token=" + txt_token + "&txt_durasi=" + txt_durasi
	  + "&txt_kodesoal=" + txt_kodesoal + "&txt_semester=" + txt_semester + "&txt_hasil=" + txt_hasil + "&txt_sesi=" + txt_sesi + "&mulai2=" + mulai2,
	 success: function(data){
	  $("#infoz").html(data);
	  document.getElementById("ndelik").style.display = "block";
	  //alert(txt_waktu);
		//tampildata();
	 }
	 });
	 });
	

});
</script>                            

<script>
function myFunction() {
   document.location.reload();
}
</script>

<div id="infoz" class="infoz"></div>
        <p> <span class="asd" class="asd">Daftar Tes </span><span>: 
                            <select id="txt_ujian<?php echo $s['Urutan']; ?>">
                             <?php 
							 $sqlkelas = mysql_query("select * from cbt_tes order by Urut");
							 while($k = mysql_fetch_array($sqlkelas)){
                             echo "<option value='$k[XKodeUjian]'>$k[XNamaUjian]</option>";
							 }
							 ?>
                             </select>
        </span></p>                 	
        
        <p> <span class="asd" class="asd">Semester</span><span>: 
                            <select id="txt_semester<?php echo $s['Urutan']; ?>">
                             <?php 
                             echo "<option value='1'>1</option>";
                             echo "<option value='2'>2</option>";

							 ?>
                             </select>
        </span></p>                 	

        <p> <span class="asd" class="asd">Sesi Ujian</span><span>: 
                            <select id="txt_sesi<?php echo $s['Urutan']; ?>">
                             <?php 
							 $sqlsesi = mysql_query("select * from cbt_siswa group by XSesi");
							 while($sk = mysql_fetch_array($sqlsesi)){
                             echo "<option value='$sk[XSesi]'>$sk[XSesi]</option>";
							 }
							 ?>
                             </select>
        </span></p>                 	


        
		 <p><span class="asd" class="asd">Waktu Pelaksanaan </span><span>: 
         <input type="text" value="" id="datetimepicker_mask<?php echo $s['Urutan']; ?>"/></span></p>
		 <p> <span class="asd" class="asd">Durasi Tes </span><span>: <input type="text" size="3" id="txt_durasi<?php echo $s['Urutan']; ?>"> menit </span></p>
		 <p> <span class="asd" class="asd">Ujian ditutup</span><span>: 
		 <input type="text" size="5" value='' id="mulai2"/></span></p>
		<!-- <p> <span class="asd" class="asd">Hasil</span><span>: 
                            <select id="txt_hasil<?php echo $s['Urutan']; ?>">
                             <?php 
                             echo "<option value='0'>Tidak Tampil</option>";
                             echo "<option value='1'>Tampil</option>";

							 ?>
                             </select>
        </span></p>    -->             	
         <input type="hidden" size="3" id="txt_kodesoal<?php echo $s['Urutan']; ?>" value="<?php echo $s['XKodeSoal']; ?>">
         <p> <span class="asd" class="asd">Token </span><span>: <input type="text" size="10" id="txt_token<?php echo $s['Urutan']; ?>"></span></p>
          <p><button type="button" class="btn btn-info btn-small" id="kirim<?php echo $s['Urutan']; ?>"> Rilis Token </i></button> 
		  <a href="?modul=daftar_tesbaru">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Kembali</button>
              </a>	</p>

       
       <div style="background-color:#f2f1e8; padding:5px;"> 
       <p><font color="#cd0202">* Perhatian </font></p>
       <p>- Kosongkan untuk Disable Waktu Keterlambatan (Timer dihitung saat Klik)</p>
       <p>- Bila waktu keterlambatan melebihi durasi akan dianggap sama seperti Durasi</p>
       </div>

     
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
</div>
                                           
 
</body>

</html>
