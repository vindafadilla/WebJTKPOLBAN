<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
             <i class="fa fa-folder-open"></i> Nilai Mahasiswa
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
            <th>NO </th>
            <th>NIM </th>
            <th>Nama </th>
            <th>Nilai</th>
            <th><i class="fa fa-edit"></i> Edit</th>  
          </tr>
        </thead>
        <tbody>
           <tr>
              <td>1</td>
              <td>141511108</td>
              <td>Ade Fulki</td>
              <td>1</td>
              <td><i class="fa fa-edit"></i><a href="dosen.php?content=<?php echo "editNilai.php"?>"> edit</a></td>
            </tr>
            <tr>
              <td>1</td>
              <td>141511108</td>
              <td>Ade Fulki</td>
              <td>1</td>
              <td><i class="fa fa-edit"></i> edit</td>
            </tr>
            <tr>
              <td>1</td>
              <td>141511108</td>
              <td>Ade Fulki</td>
              <td>1</td>
              <td><i class="fa fa-edit"></i> edit</td>
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