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
        $sql = mysql_query("SELECT * FROM server_sekolah WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=data_skul&simpan=yes" method="post">
            <input type="hidden" name="urut" value="<?php echo $r['Urut']; ?>">

            <div class="form-group">
                <label>Nama Sekolah</label>
                <input type="text" class="form-control" name="txt_namsek" value="<?php echo $r['XSekolah']; ?>">
            </div>
			<div class="form-group">
                <label>Kode Sekolah</label>
                <input type="text" class="form-control" name="txt_kodsek" value="<?php echo $r['XServerId']; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Serial Number</label>
                <input type="text" class="form-control" name="txt_alsek" value="<?php echo $r['XAlamatSek']; ?>" readonly>
            </div>
            
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>