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
      					$query = "SELECT `ID_DOSEN`,`NAMA_DOSEN`, `USERNAME`, `PASSWORD` FROM `dosen` ORDER BY `NAMA_DOSEN`;";
				              
				              $tatausaha->konek_db();

				              $result = mysqli_query($mysqli,$query);
				              $i=1;
				              while ($row = mysqli_fetch_assoc($result)) {
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