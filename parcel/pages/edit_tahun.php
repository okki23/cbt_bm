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
        $sql = mysql_query("SELECT * FROM cbt_tahunakademik WHERE urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_tahunakademik&simpan=yes" method="post">
            <input type="hidden" name="urut" value="<?php echo $r['urut']; ?>">
            <div class="form-group">
                <label>Edit Tahun Pelajaran</label>
                <input type="text" class="form-control" name="txt_tahunakademik" value="<?php echo $r['Xtahunakadmik']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>