	<div id="container-fluid">
		<div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              <i class="fa fa-table"></i> Manage Absensi Mahasiswa
          </h1>
      </div>
  </div>
		<form action="admin.php?content=manageKehadiranMahasiswa.php&b=absensi" method="POST">
			<div class="content-item">
				<div class="col-md-2">
					Angkatan
				</div>
				<div class="col-md-10">
					<select name="ANGKATAN" class="form-control">
						<option>- Pilihan -</option>
						<?php
						$query = "SELECT DISTINCT `ANGKATAN` FROM `mhs`;";
						include('../../inc/class-general.php');
    						$user = new UserData(); 
    						$user->konek_db();

				        $result = mysqli_query($mysqli,$query);

						while($row = mysqli_fetch_assoc($result)){
							echo "<option value=\"$row[ANGKATAN]\">$row[ANGKATAN]</option>";
						}
					?>
					</select>

				</div>
			</div>

				<div class="content-item">
				<div class="col-md-2">
					Kelas
				</div>
				<div class="col-md-10">
					<select name="KELAS" class="form-control">
						<option>- Pilihan -</option>
						<?php
						$query = "SELECT DISTINCT `KELAS` FROM `mhs`;";
						
    						$user->konek_db();

				        $result = mysqli_query($mysqli,$query);

						
						while($row = mysqli_fetch_assoc($result)){
							echo "<option value=\"$row[KELAS]\">$row[KELAS]</option>";
						}
					?>
						<!-- <option value="dosen">Dosen</option>
						<option value="mahasiswa">Mahasiswa</option> -->
					</select>

				</div>
			</div>

				<div class="content-item">
				<div class="col-md-2">
					Semester
				</div>
				<div class="col-md-10">
					<select name="SEMESTER" class="form-control">
						<option>- Pilihan -</option>
						<option value="1">Semester 1</option>
						<option value="2">Semester 2</option>
						<option value="3">Semester 3</option>
						<option value="4">Semester 4</option>
						<option value="5">Semester 5</option>
						<option value="6">Semester 6</option>
						<option value="7">Semester 7</option>
						<option value="8">Semester 8</option>
						<!-- <option value="dosen">Dosen</option>
						<option value="mahasiswa">Mahasiswa</option> -->
					</select>

				</div>
			</div>

				
				<div class="col-md-10" >
					<br />
					<button class="btn btn-primary btn-content">
						Search
					</button>
					<br />
				</div>
			</div>
		</form>
		<div class="col-md-10">
			<br />
			<a href="admin.php?content=inputKehadiranMahasiswa.php" class="btn btn-warning">+ &nbsp Tambah Kehadiran Mahasiswa</a>
			<br />
			<br />
		</div>
			
		<?php 
			 $b = isset($_GET['b']) ? $_GET['b'] : null;

			 switch ($b) {
			 	case 'absensi':
			 		$ANGKATAN=$_POST['ANGKATAN'];
					$KELAS=$_POST['KELAS'];
					$SEMESTER=$_POST['SEMESTER'];
					
					// echo $ANGKATAN.$ID_KELAS.$ID_SEMESTER.$PRODI;

					?>
			 			<div class="table">
				            <table class=" table table-striped table-app display ">

				            <tr>
				              <th>No.</th>
				              <th>NIM</th>
				              <th>Nama</th>
				              <th>Angkatan</th>
				              <th>Kelas</th>
				              <th>Semester</th>
				              <th align="center">Sakit</th>
				              <th>Izin</th>
				              <th>Alpha</th>
				              <td colspan="3" align="center"><b>Manage<b></td>
				            </tr>
			 			<?php
      					// echo "mahasiswa2";
      					$query = "SELECT kehadiran_mhs.ID_KEHADIRAN_MHS, kehadiran_mhs.ID_MHS, mhs.NAMA_MHS, mhs.ANGKATAN,mhs.KELAS, kehadiran_mhs.SEMESTER, kehadiran_mhs.SAKIT, kehadiran_mhs.IZIN, kehadiran_mhs.ALFA FROM kehadiran_mhs, mhs WHERE mhs.ANGKATAN='$ANGKATAN' AND mhs.KELAS='$KELAS' AND kehadiran_mhs.SEMESTER='$SEMESTER' AND kehadiran_mhs.ID_MHS=mhs.ID_MHS ORDER BY kehadiran_mhs.ID_KEHADIRAN_MHS;";
				              
				        $user->konek_db();

				        $result = mysqli_query($mysqli,$query);
				        $i=1;
				        while ($row = mysqli_fetch_assoc($result)) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  <td align="centre"><?php echo $row['ID_MHS']; ?></td>
				                  <td><?php echo $row['NAMA_MHS']; ?></td>
				                  <td><?php echo $row['ANGKATAN']; ?></td>
				                  <td><?php echo $row['KELAS']; ?></td>
				                  <td><?php echo $row['SEMESTER']; ?></td>
				                  <td><?php echo $row['SAKIT']; ?></td>
				                  <td><?php echo $row['IZIN']; ?></td>
				                  <td align="center"><?php echo $row['ALFA']; ?></td>
				                  <td><a href="tatausaha.php?a=editAbsensiMahasiswa&id=<?php echo $row['ID_KEHADIRAN_MHS']; ?>" class="btn btn-warning fa fa-edit"></a>  <a href="tatausaha.php?a=deleteAbsensiMahasiswa&id=<?php echo $row['ID_KEHADIRAN_MHS']; ?>" class="btn btn-warning fa fa-trash-o"></a>  <a href="tatausaha.php?a=detailAbsensiMahasiswa&id=<?php echo $row['ID_KEHADIRAN_MHS']; ?>" class="btn btn-warning fa fa-folder-open"></a> </td>
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
		

