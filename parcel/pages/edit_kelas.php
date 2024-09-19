<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
?>
<?php
include "../../config/server.php";
    if($_REQUEST['urut']) {
        $id = $_POST['urut'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap
        $sql = mysql_query("SELECT * FROM cbt_kelas WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_kelas&simpan=yes" method="post">
            <input type="hidden" name="id" value="<?php echo $r['Urut']; ?>">
			<div class="form-group">
                <label>Kode Sekolah</label><br>
                <select class="form-control" name="txt_kodesek" id="txt_kodesek">
                                <?php 
								$sqle = mysql_query("SELECT * FROM server_sekolah WHERE XServerId = '$r[XKodeSekolah]'");
								$re = mysql_fetch_array($sqle);
								echo "<option value='$r[XKodeSekolah]' selected >$r[XKodeSekolah] $re[XSekolah]</option>";
                                $sqlsek = mysql_query("select * from server_sekolah order by XServerId");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XServerId]'>$sek[XServerId] $sek[XSekolah]</option>";
                                }
                                ?>
								</select>
            </div><p>
            <div class="form-group">
                <label>Kode Kelas</label>
                <input type="text" class="form-control" name="txt_kodkel" value="<?php echo $r['XKodeKelas']; ?>">
            </div>

            <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" class="form-control" name="txt_namkel" value="<?php echo $r['XNamaKelas']; ?>">
            </div>
             <div class="form-group">
			<label>Level / Jurusan</label>
               <select class="form-control" name="txt_kodlev" id="txt_kodlev">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_level order by XLevel");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XLevel]'>$sek[XLevel]</option>";
                                }
                                ?>
								</select>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
              <select class="form-control" name="txt_jur" id="txt_jur">
                                <?php 
                                $sqlsek = mysql_query("select * from cbt_jurusan order by XJurusan");
                                while($sek = mysql_fetch_array($sqlsek)){
                                echo "<option value='$sek[XJurusan]'>$sek[XJurusan]</option>";
                                }
                                ?>
								</select>  </div>

              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>