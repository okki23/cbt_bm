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
        $sql = mysql_query("SELECT * FROM cbt_sesi WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_sesi&simpan=yes" method="post">
            <input type="hidden" name="urut" value="<?php echo $r['Urut']; ?>">
            <div class="form-group">
                <label>Kode Sesi</label>
                <input type="text" class="form-control" name="txt_sesi" value="<?php echo $r['XSesi']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>