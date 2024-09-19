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
        $sql = mysql_query("SELECT * FROM cbt_ujian WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_waktu&simpan=yes" method="post">
            <input type="hidden" name="id" value="<?php echo $r['Urut']; ?>">
			<div class="form-group">
                <label>Kode Ujian</label>
                <input type="text" class="form-control" name="txt_koduji" value="<?php echo $r['XKodeUjian']; ?>">
            </div>
            <div class="form-group">
                <label>Kode Kelas</label>
                <input type="text" class="form-control" name="txt_kodkel" value="<?php echo $r['XKodeKelas']; ?>">
            </div>

            <div class="form-group">
                <label>Kode Jurusan</label>
                <input type="text" class="form-control" name="txt_jur" value="<?php echo $r['XKodeJurusan']; ?>">
            </div>
            <div class="form-group">
                <label>Kode Soal</label>
                <input type="text" class="form-control" name="txt_kodsoal" value="<?php echo $r['XKodeSoal']; ?>">
            </div>
			<div class="form-group">
                <label>Tanggal Ujian</label>
                <input type="text" class="form-control" name="txt_tuji" value="<?php echo $r['XTglUjian']; ?>">
            </div>
			<div class="form-group">
                <label>Jam Mulai Ujian</label>
                <input type="text" class="form-control" name="txt_juji" value="<?php echo $r['XJamUjian']; ?>">
            </div>
			<div class="form-group">
                <label>Durasi Ujian</label>
                <input type="text" class="form-control" name="txt_durasi" value="<?php echo $r['XLamaUjian']; ?>">
            </div>
			<div class="form-group">
                <label>Batas Masuk</label>
                <input type="text" class="form-control" name="txt_bmasuk" value="<?php echo $r['XBatasMasuk']; ?>">
            </div>
			<div class="form-group">
                <label>Status Soal</label>
                <input type="text" class="form-control" name="txt_suji" value="<?php echo $r['XStatusUjian']; ?>">
            </div>
            

              <button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>