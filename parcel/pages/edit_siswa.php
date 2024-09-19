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
        $sql = mysql_query("SELECT * FROM cbt_siswa WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        <!-- MEMBUAT FORM -->
        <form action="?modul=daftar_siswa&simpan=yes" method="post">
            <input type="hidden" name="id" value="<?php echo $r['Urut']; ?>">
			<div class="form-group col-md-6">
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
            </div>
            <div class="form-group col-md-6">
                <label>Nama Peserta</label>
                <input type="text" class="form-control" name="txt_nam" value="<?php echo $r['XNamaSiswa']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label>NIS</label>
                <input type="text" class="form-control" name="txt_nis" value="<?php echo $r['XNIK']; ?>">
            </div>
			<div class="form-group col-md-6">
                <label>NISN</label>
                <input type="text" class="form-control" name="txt_nisn" value="<?php echo $r['Xnisn']; ?>">
            </div>
			<div class="form-group col-md-6">
                <label>Nomor Ujian</label>
                <input type="text" class="form-control" name="txt_nom" value="<?php echo $r['XNomerUjian']; ?>">
            </div>
			<div class="form-group col-md-6">
                <label>Password</label>
                <input type="text" class="form-control" name="txt_pas" value="" size="5" required>
            </div>
			<div class="form-group col-md-3">
                <label>Semester</label>
               
				<select id="txt_sms"  name="txt_sms" class="form-control" >
					<option value='1' <?php if($r['XSemester']=="1"){echo "selected";} ?>>Ganjil</option>
					<option value='2' <?php if($r['XSemester']=="2"){echo "selected";} ?>>Genap</option>                           
                 </select>   
            </div>
			<div class="form-group col-md-3">
                <label>Tahun Ajaran</label>
                <input type="text" class="form-control" name="txt_thn" value="<?php echo $r['XThnajar']; ?>">
            </div>
			<div class="form-group col-md-3">
                <label>Level</label>
                <select id="txt_level"  name="txt_level" class="form-control" >
								<?php 
								echo "<option value='$r[XKodeLevel]' selected >$r[XKodeLevel]</option>";
								$sqk = mysql_query("select * from cbt_level group by XLevel");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XLevel]' class='form-control' >$rs[XLevel]</option>";} ?>                                
                                </select>  
            </div>
			<div class="form-group col-md-3">
                <label>Jurusan</label>
              <select id="jur2"  name="jur2" class="form-control">
								<?php 
								echo "<option value='$r[XKodeJurusan]' selected >$r[XKodeJurusan]</option>";
								$sqk = mysql_query("select * from cbt_jurusan group by XJurusan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XJurusan]'>$rs[XJurusan]</option>";
								} ?>                                
                                </select>
            </div>
			<div class="form-group col-md-3">
                <label>Kelas</label>
              <select id="txt_kelas"  name="txt_kelas" class="form-control" >
								<?php 
								echo "<option value='$r[XKodeKelas]' selected >$r[XKodeKelas]</option>";
								$sqk = mysql_query("select * from cbt_kelas group by XKodeKelas");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XKodeKelas]' class='form-control' >$rs[XKodeKelas] $rs[XNamaKelas]</option>";} ?>                                
                                </select>  
            </div>
			<div class="form-group col-md-3">
                <label>Sesi</label>
                 <select id="txt_sesi"  name="txt_sesi" class="form-control">
								<?php 
								echo "<option value='$r[XSesi]' selected>$r[XSesi]</option>";
								$sqk = mysql_query("select * from cbt_sesi group by XSesi");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XSesi]'>$rs[XSesi]</option>";
								} ?>                                
                                </select>       
            </div>
			<div class="form-group col-md-3">
                <label>Ruang</label>
                <select id="txt_ruang"  name="txt_ruang" class="form-control">
								<?php 
								echo "<option value='$r[XRuang]' selected >$r[XRuang]</option>";
								$sqk = mysql_query("select * from cbt_ruang group by XRuang");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XRuang]'>$rs[XRuang]</option>";
								} ?>                                
                                </select>    
            </div>
			<div class="form-group col-md-3">
                <label>Agama</label>
                <select id="txt_agama"  name="txt_agama" class="form-control">
								<?php 
								echo "<option value='$r[XAgama]' selected >$r[XAgama]</option>";
								$sqk = mysql_query("select * from cbt_agama where not XAgama ='' group by XAgama");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XAgama]'>$rs[XAgama]</option>";
								} ?>                                
                                </select>    
            </div>
			<div class="form-group col-md-4">
                <label>Mapel Pilihan</label>
                <select id="txt_pilih"  name="txt_pilih" class="form-control">
								<?php 
								echo "<option value='$r[XPilihan]' selected >$r[XPilihan]</option>";
								$sqk = mysql_query("select * from cbt_pilihan where not XPilihan ='' group by XPilihan");
								while($rs = mysql_fetch_array($sqk)){
                             	echo "<option value='$rs[XPilihan]'>$rs[XPilihan]</option>";
								} ?>                                 
                                </select>        
            </div>
			<div class="form-group col-md-4">
                <label>Jenis Kelamin</label>
                <select id="txt_jekel"  name="txt_jekel" class="form-control">
								<option value='L' <?php if($r['XJenisKelamin']=="L"){echo "selected";} ?>>Laki-laki</option>
								<option value='P' <?php if($r['XJenisKelamin']=="P"){echo "selected";} ?>>Perempuan</option>                                
                                </select>      
            </div>
			<div class="form-group col-md-4">
                <label>Foto Peserta</label>
                <input type="text" class="form-control" name="txt_potret" value="<?php echo $r['XFoto']; ?>">   
            </div>
			<!-- TW -->
			<div class="modal-footer">
              <button class="btn btn-primary" type="submit">Update</button>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
			</div>
        </form>
 
        <?php } 
?>