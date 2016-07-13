	<div id="container-fluid">
	<div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              <i class="fa fa-table"></i> Manage User
          </h1>
      </div>
  </div>
		<form action="admin.php?content=managePilihanUser.php" method="POST">
			<div class="content-item">
				<div class="col-md-2">
					Peran User
				</div>
				<div class="col-md-2">

					<select name="peran" class="form-control">
						<option value="dosen">Dosen</option>
						<option value="mahasiswa">Mahasiswa</option>
						<option value="alumni">Alumni</option>
						<option value="industri">Industri</option>

					</select>

				</div>
				<div>
					
					<button class="btn btn-primary btn-content">
						Search
					</button>
					<br />
				</div>
			</div>
		</form>
		<div class="col-md-2">
			<a href="admin.php?content=registrasiUser.php" class="btn btn-warning">+ &nbsp Tambah User</a>
		</div>
		
		
		
	</div>
