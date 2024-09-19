
<?php include "../../config/server.php"; 
$sql011 = "select DISTINCT XKodeMapel,XKodeKelas,XKodeSoal  from cbt_soal where XKodeSoal = '$_GET[id]' order by Urut asc";
$result011 = mysql_query($sql011);
while($mhs011 = mysql_fetch_array($result011)){
$km = $mhs011['XKodeMapel'];	  ?>
<table width="716" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="93"><strong>Nama Mapel  <br>
 Kode Soal </strong></td>
    <td width="468" valign="top"><strong>:
        <?php $sql0111 = "select *  from cbt_mapel where XKodeMapel = '$km'";
$result0111 = mysql_query($sql0111);
while($mhs0111 = mysql_fetch_array($result0111)){  ?>
        <? echo $mhs0111['XNamaMapel']; ?>
        <? } ?>
        <br>
      : <?php echo $mhs011['XKodeSoal']; ?></strong>
    <? } ?></td>
    <td width="155" valign="top"><strong><a href="index.php?page=buat_soal">Ke Admin Panel </a></strong></td>
  </tr>
</table>
<br>
<table width="499" height="163" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
<?php
$no1 = 1;
$sql01 = "select * from cbt_soal where XKodeSoal = '$_GET[id]' order by Urut asc";
$result01 = mysql_query($sql01);
while($mhs01 = mysql_fetch_array($result01)){ 
?>
<style type="text/css">
.ss {
	color: #F00;
}
</style>

<table width="712" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><strong><?php echo $mhs01['XNomerSoal']; ?>.</strong></td>
    <td align="left" valign="top"><?php echo $mhs01['XTanya']; ?></td>
    <td align="center"><strong><a href="?modul=ubah_soal3&id=<?php echo $mhs01['Urut']; ?>">Edit</a></strong></td>
  </tr>
  <tr>
    <td width="59" align="center" valign="top">&nbsp;</td>
    <td width="580" align="left" valign="top">&nbsp;</td>
    <td width="73">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>A. <?php echo $mhs01['XJawab1']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>B. <?php echo $mhs01['XJawab2']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>C. <?php echo $mhs01['XJawab3']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>D. <?php echo $mhs01['XJawab4']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>E. <?php echo $mhs01['XJawab5']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><span class="ss"><strong>Kunci</strong><strong> <?php echo $mhs01['XKunciJawaban']; ?>  <br />
Audio : <?php echo $mhs01['XAudioTanya']; ?></strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><hr></td>
  </tr>
</table>

<?php } ?>
&nbsp;</td>
  </tr>
</table>
