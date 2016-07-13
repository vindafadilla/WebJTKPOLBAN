<div class="container-fluid">
<div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              <i class="fa fa-table"></i> Manage User
          </h1>
      </div>
  </div>
  <div class="content-item">
			<a href="admin.php?content=manageUser.php" class="btn btn-warning">Back</a>
			<br />
			<br />
		</div>
<?php 

$b=$_POST['peran'];
			 
			 switch ($b) {

			 	case 'dosen':
			 			?>
			 			<div class="table">
				            <table class="table table-striped table-app display">

				            <tr>
				              <th>No.</th>
				              <th>Nama</th>
				              <th>Username</th>
				              <th>Passsword</th>
				               <td colspan="3" align="center"><b>Manage<b></td>
				            </tr>
			 			<?php
      					// echo "mahasiswa2";
      					$query = "SELECT `ID_DOSEN`, `USERNAME`, `NIP`, `NAMA_DOSEN` FROM `dosen` ORDER BY `NAMA_DOSEN`;";
				              
				              // $tatausaha->konek_db();
      						include('../../inc/class-general.php');
    						$user = new UserData(); 
    						$user->konek_db();
				              $result = $mysqli->query($query);
				              $i=1;
				              while ($row = $result->fetch_assoc()) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  <td><?php echo $row['NAMA_DOSEN']; ?></td>
				                  <td><?php echo $row['USERNAME']; ?></td>
				                  <td><?php echo $row['PASSWORD']; ?></td>
				                  <td><a href="tatausaha.php?a=editDosen&id=<?php echo $row['ID_DOSEN']; ?>" class="btn btn-warning">EDIT</a>  <a href="tatausaha.php?a=deleteDosen&id=<?php echo $row['ID_DOSEN']; ?>" class="btn btn-warning">DELETE</a>  <a href="tatausaha.php?a=detailDosen&id=<?php echo $row['ID_DOSEN']; ?>" class="btn btn-warning">DETAIL</a> </td>
				                </tr>
				                
				                <?php
				                $i++;
				              }
				              ?>
				              </table>
				              </div>
				              <?php
			 		break;

			 	case 'mahasiswa':
			 			include('../../inc/class-general.php');
    						$user = new UserData(); 
    						$user->konek_db();
			 			?>
			 			<div class="table">
				            <table class="table table-striped table-app display ">

				            <tr>
				              <th>No.</th>
				              <th>Nama</th>
				              <th>Username</th>
				              <th>Passsword</th>
				              <th>Manage</th>
				            </tr>
			 			<?php
				        $query = "SELECT `mhs`.`ID_MHS`,`mhs`.`NAMA_MHS`, `mhs`.`USERNAME`, `user`.`PASSWORD` FROM `mhs`,`user` WHERE `user`.`USERNAME`=`mhs`.`USERNAME` ORDER BY `mhs`.`USERNAME`;";
				              
				        
				        $result = mysqli_query($mysqli,$query);
				        $i=1;
				        while ($row = mysqli_fetch_assoc($result)) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  <td><?php echo $row['NAMA_MHS']; ?></td>
				                  <td><?php echo $row['USERNAME']; ?></td>
				                  <td><?php echo $row['PASSWORD']; ?></td>
				                  <td><a href="tatausaha.php?a=editMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-edit"></a>  <a href="tatausaha.php?a=deleteMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-trash-o"></a>  <a href="tatausaha.php?a=detailMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-folder-open"></a> </td>
				                </tr>
				                
				                <?php
				                $i++;
				              }
				              ?>
				              </table>
				              </div>
				              <?php
			 		break;

			 		case 'industri':
			 			include('../../inc/class-general.php');
    						$user = new UserData(); 
    						$user->konek_db();
			 			?>
			 			<div class="table">
				            <table class="table table-striped table-app display ">

				            <tr>
				              <th>No.</th>
				              <th>Nama</th>
				              <th>Username</th>
				              <th>Password</th>
				              <th>Status Validasi</th>
				              <th>Manage</th>
				            </tr>
			 			<?php
				        $query = "SELECT `industri`.`ID_INDUSTRI`,`industri`.`NAMA_INDUSTRI`, `industri`.`USERNAME`, `user`.`PASSWORD`, `industri`.`STATUS_VALIDASI` FROM `industri`,`user` WHERE `user`.`USERNAME`=`industri`.`USERNAME` ORDER BY `industri`.`USERNAME`;";
				              
				        
				        $result = mysqli_query($mysqli,$query);
				        $i=1;
				        while ($row = mysqli_fetch_assoc($result)) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  <td><?php echo $row['NAMA_INDUSTRI']; ?></td>
				                  <td><?php echo $row['USERNAME']; ?></td>
				                  <td><?php echo $row['PASSWORD']; ?></td>
				                  <td><?php echo $row['STATUS_VALIDASI']; ?></td>
				                  <td><a href="admin.php?content=inc/adminModel.php&a=statusValidasi&id=<?php echo $row['ID_INDUSTRI']; ?>" class="btn btn-warning fa fa-edit"></a>  <a href="tatausaha.php?a=editMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-edit"></a>  <a href="tatausaha.php?a=deleteMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-trash-o"></a>  <a href="tatausaha.php?a=detailMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-folder-open"></a> </td>
				                </tr>
				                
				                <?php
				                $i++;
				              }
				              ?>
				              </table>
				              </div>
				              <?php
			 			break;

			 		case 'alumni':
			 			include('../../inc/class-general.php');
    						$user = new User(); 
    						$user->konek_db();
			 			?>
			 			<div class="table">
				            <table class="table-condensed">

				            <tr>
				              <th>No.</th>
				              <th>Nama</th>
				              <th>Username</th>
				              <th>Password</th>
				              <th>Manage</th>
				            </tr>
			 			<?php
				        $query = "SELECT `mhs`.`ID_MHS`,`mhs`.`NAMA_MHS`, `mhs`.`USERNAME`, `user`.`PASSWORD` FROM `mhs`,`user` WHERE `user`.`USERNAME`=`mhs`.`USERNAME` ORDER BY `mhs`.`USERNAME`;";
				              
				        
				        $result = mysqli_query($mysqli,$query);
				        $i=1;
				        while ($row = mysqli_fetch_assoc($result)) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  <td><?php echo $row['mhs.NAMA_MHS']; ?></td>
				                  <td><?php echo $row['mhs.USERNAME']; ?></td>
				                  <td><?php echo $row['user.PASSWORD'];?></td>
				                  <td><a href="tatausaha.php?a=editMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-edit"></a>  <a href="tatausaha.php?a=deleteMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-trash-o"></a>  <a href="tatausaha.php?a=detailMahasiswa&id=<?php echo $row['ID_MHS']; ?>" class="btn btn-warning fa fa-folder-open"></a> </td>
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