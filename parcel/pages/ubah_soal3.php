<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

 <script src="buatsoal/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
 
tinymce.init({
  selector: "textarea",
  
  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
	
  plugins: [
    "eqneditor advlist lists charmap anchor",
    "code fullscreen",
    "table contextmenu paste jbimages"
  ],
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
	
  relative_urls: false,
 forced_root_block : "", 
    force_br_newlines : true,
    force_p_newlines : false,
});
 
</script>
<!-- /TinyMCE -->
  
</head>

<body>
<center><strong>
<h2>Formulir Perubahan Soal </h2></strong></center>
<form method="post" action="usoal.php">
<?php
include "../../config/server.php"; 
$sql01 = "select * from cbt_soal where Urut = '$_GET[id]'";
$result01 = mysql_query($sql01);
while($mhs01 = mysql_fetch_array($result01)){ 
?>
<table width="806" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="88" height="29" align="center">&nbsp;</td>
    <td width="702"><strong>Edit No.<? echo $mhs01['Urut']; ?><input name="urut" type="hidden" value="<? echo $mhs01['Urut']; ?>" /><input name="kose" type="hidden" value="<? echo $mhs01['XKodeSoal']; ?>" /></strong></td>
  </tr>
  <tr>
    <td height="66" align="center">&nbsp;</td>
    <td><textarea name="soal"> <? echo $mhs01['XTanya']; ?></textarea></td>
  </tr>
  <tr>
    <td height="29" align="center">&nbsp;</td>
    <td>jawaban 1.
      <textarea name="a" type="text" id="textfield9" size="50" ><? echo $mhs01['XJawab1']; ?> </textarea></td>
  </tr>
  <tr>
    <td height="28" align="center">&nbsp;</td>
    <td>Jawaban 2. 
      <textarea name="b" id="textfield5" ><? echo $mhs01['XJawab2']; ?> </textarea></td>
  </tr>
  <tr>
    <td height="31" align="center">&nbsp;</td>
    <td>Jawaban 3.
      <textarea name="c" type="text" id="textfield11" size="50" ><? echo $mhs01['XJawab3']; ?></textarea></td>
  </tr>
  <tr>
    <td height="32" align="center">&nbsp;</td>
    <td>Jawaban 4.
      <textarea name="d" type="text" id="d" size="50" ><? echo $mhs01['XJawab4']; ?></textarea></td>
  </tr>
  <tr>
    <td height="32" align="center">&nbsp;</td>
    <td>Jawaban 5.
      <textarea name="e" type="text" id="textfield12" size="50" ><? echo $mhs01['XJawab5']; ?></textarea></td>
  </tr>
  <tr>
    <td height="30" align="right" valign="top">&nbsp;</td>
    <td valign="bottom">File Audio
      <select name="audio">
        <option value="">pilih</option>
        <?php
$dir = "/xampp/htdocs/unbk/audio";

// Membuka direktori dan membaca dan menampilkan isinya
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
        if($file != ".." && $file != "."){
            //echo "filename: $file : filetype: " . filetype($dir . $file) . "<br>";
            ?>
        <option value="<?php echo $file; ?>"><?php echo $file; ?></option>
        <?php
                }
        }
        closedir($dh);
    }
}
?>
      </select></td>
  </tr>
  <tr>
    <td height="30" align="right" valign="top">&nbsp;</td>
    <td valign="bottom">
    Kunci :
      <?php
$data = mysql_query("select * from cbt_soal where Urut = '$_GET[id]'");
while($d = mysql_fetch_array($data)){
    echo "<select name=kunci>";
    if($d['XKunciJawaban']=="1"){
        echo "<option selected>1</option>
            <option>2</option>\n
			<option>3</option>\n
			<option>4</option>\n
			<option>5</option>\n";
    }elseif($d['XKunciJawaban']=="2"){
        echo "<option selected>2</option>
            <option>1</option>\n
			<option>3</option>\n
			<option>4</option>\n
			<option>5</option>\n";
    }elseif($d['XKunciJawaban']=="3"){
        echo "<option selected>3</option>
           <option>1</option>\n
			<option>2</option>\n
			<option>4</option>\n
			<option>5</option>\n";
    }elseif($d['XKunciJawaban']=="4"){
        echo "<option selected>4</option>
            <option>1</option>\n
			<option>2</option>\n
			<option>3</option>\n
			<option>5</option>\n";
    }else{
        echo "<option selected>5</option>
            <option>1</option>\n
			<option>2</option>\n
			<option>3</option>\n
			<option>4</option>\n";
    }
    echo "</select><p>";
}
?>
  </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<? } ?>  <center><input class="btn btn-success" type="submit" value="Perbaharui" name="ubah"/> </center>
<hr size="1" />
<p>&nbsp;</p>
<p> 

</p>
</form>

</body>
</html>