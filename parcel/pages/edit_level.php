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
        $sql = mysql_query("SELECT * FROM cbt_level WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_tingkat&simpan=yes" method="post">
            <input type="hidden" name="urut" value="<?php echo $r['Urut']; ?>">
            <div class="form-group">
                <label>Kode Level</label>
                <input type="text" class="form-control" name="txt_level" value="<?php echo $r['XLevel']; ?>">
            </div>
            
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>