<?php
	if(!isset($_COOKIE['beeuser'])){
	header("Location: login.php");}
include "../../config/server.php";

if(isset($_REQUEST['aksi1'])){ 
//echo "delete from cbt_kelas where Urut = '$_REQUEST[urut]'";
	$sqlcek = mysql_query("select * from cbt_tahunakademik where urut = '$_REQUEST[urut]'");
	$sta = mysql_fetch_array($sqlcek);
	$status= $sta['Xstatus'];
	if($status=="1"){ $ubah = "0"; } 
	elseif($status=="0"){ $ubah = "1"; } 
	
$sqlpasaif = mysql_query("update cbt_tahunakademik set Xstatus = '$ubah' where urut = '$_REQUEST[urut]'");
}

if(isset($_REQUEST['simpan'])){
	$sql = mysql_query("update cbt_tahunakademik set Xtahunakadmik = '$_REQUEST[txt_tahunakademik]' where urut = '$_REQUEST[urut]'");
}



?>


<body>

            <!-- /.row -->
            <div class="row"><br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <table  class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
	                                    <th width="2%">No.</th>
                                        <th width="40%">Tahun Akademik</th>
										<!--<th width="6%">Status</th> -->
                                        <th width="6%">Tindakan</th>                                                                                                                      
                                 </tr>
                                </thead>
                                <tbody>
                                <?php 
								$sql = mysql_query("select * from cbt_tahunakademik order by Xtahunakadmik");
								$no=0;
								while($s = mysql_fetch_array($sql)){
								$stts = $s['Xstatus'];
								$no++;
								?>
                                
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $s['Xtahunakadmik']; ?></td> 
                                       						
                                        <?php echo "<td><a href='#myModal' id='custId' data-toggle='modal' data-id=".$s['urut'].">"; ?>
										<button type="button" class="btn btn-info btn-sm" ><i class="fa fa-edit"></i> Ubah</button></a>
                                       </td></tr>
 
 
  <!-- Button trigger modal -->

                                                      
                                        
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    
    
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Tahun Pelajaran</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
 
  <script src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'edit_tahun.php',
                data :  'urut='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
		 
    });
  </script>
 
</body>

</html>

 