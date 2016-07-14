	<div id="container-fluid">
		<div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              <i class="fa fa-table"></i> Manage Absensi Dosen
          </h1>
      </div>
  </div>
		
		<div class="col-md-10">
			<br />
			<a href="admin.php?content=inputKehadiranDosen.php" class="btn btn-warning">+ &nbsp Tambah Kehadiran Dosen</a>
			<br />
			<br />
		</div>
			
		<?php 
			 $b = 'absensi';
			 include('../../inc/class-general.php');
    						$user = new UserData(); 
    						$user->konek_db();
			 switch ($b) {
			 	case 'absensi':
			 		
					?>
			 			<div class="table">
				            <table class=" table table-striped table-app display ">

				            <tr>
				              <th>No.</th>
				              <th>Kode Dosen</th>
				              <th>Hadir</th>
				              <th>Alpha</th>
				              <td colspan="3" align="center"><b>Manage<b></td>
				            </tr>
			 			<?php
      					// echo "mahasiswa2";
      					$query = "SELECT * FROM `kehadiran_dosen`";
				              
				        

				        $result = mysqli_query($mysqli,$query);
				        $i=1;
				        while ($row = mysqli_fetch_assoc($result)) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  
				                  <td><?php echo $row['ID_DOSEN']; ?></td>
				                  <td><?php echo $row['JUMLAH_HADIR']; ?></td>
				                  <td><?php echo $row['JUMLAH_ALFA']; ?></td>
			
				                  <td><a href="tatausaha.php?a=editAbsensiMahasiswa&id=<?php echo $row['ID_KEHADIRAN_DOSEN']; ?>" class="btn btn-warning fa fa-edit"></a>  <a href="tatausaha.php?a=deleteAbsensiMahasiswa&id=<?php echo $row['ID_KEHADIRAN_DOSEN']; ?>" class="btn btn-danger fa fa-trash-o"></a>  <a href="tatausaha.php?a=detailAbsensiMahasiswa&id=<?php echo $row['ID_KEHADIRAN_DOSEN']; ?>" class="btn btn-info fa fa-folder-open"></a> </td>
				                </tr>
				                
				                <?php
				                $i++;
				              }
				              ?>
				              </table>
				              </div>
				              <?php

			 		break;
			 	
			 	
			 }
			 ?>
			 </div>
			 <?php

		?>
		

