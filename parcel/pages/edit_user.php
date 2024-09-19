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
        $sql = mysql_query("SELECT * FROM cbt_user WHERE Urut = '$id'");
        $r = mysql_fetch_array($sql);
        ?>
 
        	<form action="?modul=data_user&simpan=yes" method="post">
            <input type="hidden" name="id" value="<?php echo $r['Urut']; ?>">
			<div class="form-group">
			<div style="width:100%; background-color:#28b2bc; color:#FFFFFF; padding:10px; margin-top:10px; font-size:22px">Edit Data User</div>
            </div><table><table width="100%" >
            <tr><td><label>Username</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_usern" value="<?php echo $r['Username']; ?>">
            </td></tr>
            <tr><td><label>Password</label></td><td width="5%"><br><br></td><td>
                <input type="password" class="form-control" name="txt_pass">
            </td></tr>
            <tr><td><label>Nama</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_nama" value="<?php echo $r['Nama']; ?>">
            </td></tr>
            <tr><td><label>NIP</label></td><td width="5%"><br><br></td><td>
                <div><input type="text" class="form-control" name="txt_nip" value="<?php echo $r['NIP']; ?>">
            </td></tr>
            <tr><td><label>Alamat</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_alamat" value="<?php echo $r['Alamat']; ?>">
            </td></tr>
            <tr><td><label>HP/Telp</label></td><td width="5%"><br><br></td><td> 
                <input type="text" class="form-control" name="txt_hp" value="<?php echo $r['HP']; ?>">
            </td></tr>
            <tr><td><label>Email</label></td><td width="5%"><br><br></td><td>
                <input type="text" class="form-control" name="txt_email" value="<?php echo $r['Email']; ?>">
            </td></tr>
			 <tr><td><label>Kelamin</label></td><td width="2%"><br><br></td><td>
            <select class="form-control" name="txt_kelamin" id="txt_kelamin">
			            <option value="Pria" >Pria</option>
						<option value="Wanita" >Wanita</option>
					</select></td></tr>
			</table>
			<button class="btn btn-primary" type="submit">Update</button>
        </form>
 
        <?php } 
?>