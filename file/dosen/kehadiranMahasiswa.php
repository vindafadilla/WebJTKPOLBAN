<div class="container-fluid">
  
  <!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Kehadiran Mahasiswa
          </h1>
      </div>
  </div>

  <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="smt">Mata Kuliah :</label>
                <select class="form-control" id="smt">
                    <option>Pengantar Perangkat Lunak</option>
                    <option>Sistem Informasi</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="smt">Kelas :</label>
                <select class="form-control" id="smt">
                    <option>2A - D3</option>
                    <option>2B - D3</option>
                </select>
            </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-bordered " id="datatabel">
        <thead>
          <tr>
                <th>Kelas </th>
                <th>NIM </th>
                <th>Nama </th>
                <th>Sakit</th>
                <th>Ijin</th>
                <th>Alpa</th>
                <th> Lihat </th>
          </tr>
        </thead>
        <tbody>
          <tr>
             <td>2-B</td>
             <td>141511108</td>
             <td>Ade Fulki</td>
             <td>1</td>
             <td>0</td>
             <td>0</td>
             <td><a href="dosen.php?content=<?php echo "detailKehadiranMahasiswa.php"?>">detail</a></td>
          </tr>
          <tr>
             <td>2-B</td>
             <td>141511108</td>
             <td>Ade Fulki</td>
             <td>1</td>
             <td>0</td>
             <td>0</td>
             <td><a href="dosen.php?content=<?php echo "detailKehadiranMahasiswa.php"?>">detail</a></td>
          </tr>
          <tr>
             <td>2-B</td>
             <td>141511108</td>
             <td>Ade Fulki</td>
             <td>1</td>
             <td>0</td>
             <td>0</td>
             <td><a href="dosen.php?content=<?php echo "detailKehadiranMahasiswa.php"?>">detail</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  &nbsp

  <div class="row">
      <div class="col-md-12">
          <button onclick="goBack()" class="btn btn-primary">Back</button>
      </div>
  </div>

  &nbsp
</div>