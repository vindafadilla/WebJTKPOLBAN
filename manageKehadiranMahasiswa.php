	<div id="content-right-menu">
		<div class="content-title">
			Manage Absensi
		</div>
		<form action="tatausaha.php?a=manageAbsensi&b=absensi" method="POST">
			<div class="content-item">
				<div class="col-md-2">
					Angkatan
				</div>
				<div class="col-md-10">
					<select name="ANGKATAN" class="form-control">
						<?php
						$query = "SELECT DISTINCT `ANGKATAN` FROM `mahasiswa`;";
						$tatausaha->konek_db();

				        $result = mysqli_query($mysqli,$query);

						echo"<option>- Pilihan -</option>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<option value=\"$row[ANGKATAN]\">$row[ANGKATAN]</option>";
						}
					?>
						<!-- <option value="dosen">Dosen</option>
						<option value="mahasiswa">Mahasiswa</option> -->
					</select>

				</div>
			</div>

				<div class="content-item">
				<div class="col-md-2">
					Kelas
				</div>
				<div class="col-md-10">
					<select name="ID_KELAS" class="form-control">
						<?php
						$query = "SELECT DISTINCT `ID_KELAS` FROM `mahasiswa`;";
						$tatausaha->konek_db();

				        $result = mysqli_query($mysqli,$query);

						echo"<option>- Pilihan -</option>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<option value=\"$row[ID_KELAS]\">$row[ID_KELAS]</option>";
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
					<select name="ID_SEMESTER" class="form-control">
						<?php
						$query = "SELECT `ID_SEMESTER`, `NAMA_SEMESTER` FROM `semester`;";
						$tatausaha->konek_db();

				        $result = mysqli_query($mysqli,$query);

						echo"<option>- Pilihan -</option>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<option value=\"$row[ID_SEMESTER]\">$row[NAMA_SEMESTER]</option>";
						}
					?>
						<!-- <option value="dosen">Dosen</option>
						<option value="mahasiswa">Mahasiswa</option> -->
					</select>

				</div>
			</div>

				<div class="content-item">
				<div class="col-md-2">
					Prodi
				</div>
				<div class="col-md-10">
					<select name="PRODI" class="form-control">
						<?php
						$query = "SELECT DISTINCT `PRODI` FROM `mahasiswa`;";
						$tatausaha->konek_db();

				        $result = mysqli_query($mysqli,$query);

						echo"<option>- Pilihan -</option>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<option value=\"$row[PRODI]\">$row[PRODI]</option>";
						}
					?>
						<!-- <option value="dosen">Dosen</option>
						<option value="mahasiswa">Mahasiswa</option> -->
					</select>

				</div>

				<div class="col-md-12">
					
					<button class="btn btn-primary btn-content">
						Search
					</button>

				</div>
			</div>
		</form>
		<div class="content-item">
			<a href="tatausaha.php?a=inputAbsensi" class="btn btn-warning">+ &nbsp Tambah User</a>
		</div>
			
		<?php 
			 $b = isset($_GET['b']) ? $_GET['b'] : null;

			 switch ($b) {
			 	case 'absensi':
			 		$ANGKATAN=$_POST['ANGKATAN'];
					$ID_KELAS=$_POST['ID_KELAS'];
					$ID_SEMESTER=$_POST['ID_SEMESTER'];
					$PRODI=$_POST['PRODI'];
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
      					$query = "SELECT kehadiran_mhs.ID_KEHADIRAN_MHS, kehadiran_mhs.ID_MHS, mahasiswa.NAMA_MHS, mahasiswa.ANGKATAN,mahasiswa.ID_KELAS, kehadiran_mhs.ID_SEMESTER, kehadiran_mhs.SAKIT, kehadiran_mhs.IZIN_, kehadiran_mhs.ALFA FROM kehadiran_mhs, mahasiswa WHERE mahasiswa.ANGKATAN='$ANGKATAN' AND mahasiswa.ID_KELAS='$ID_KELAS' AND kehadiran_mhs.ID_SEMESTER='$ID_SEMESTER' AND kehadiran_mhs.ID_MHS=mahasiswa.ID_MHS ORDER BY kehadiran_mhs.ID_KEHADIRAN_MHS;";
				              
				        $tatausaha->konek_db();

				        $result = mysqli_query($mysqli,$query);
				        $i=1;
				        while ($row = mysqli_fetch_assoc($result)) {
				                ?>

				                <tr>
				                  <td><?php echo $i;?></td>
				                  <td align="centre"><?php echo $row['ID_MHS']; ?></td>
				                  <td><?php echo $row['NAMA_MHS']; ?></td>
				                  <td><?php echo $row['ANGKATAN']; ?></td>
				                  <td><?php echo $row['ID_KELAS']; ?></td>
				                  <td><?php echo $row['ID_SEMESTER']; ?></td>
				                  <td><?php echo $row['SAKIT']; ?></td>
				                  <td><?php echo $row['IZIN_']; ?></td>
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
		

