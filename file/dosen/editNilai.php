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
      <div class="col-md-12">
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Edit Nilai Mahasiswa</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-5 control-label">Angkatan</label>
                <div class="col-md-4">
                    <select class="form-control" id="smt">
                      <option>2012</option>
                      <option>2013</option>
                      <option>2014</option>
                      <option>2015</option>
                      </select>
        
                 </div>
            </div>
              
             <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Kelas</label>
                  <div class="col-md-4">
                <select class="form-control" id="smt">
                  <option>1A-D3</option>
                  <option>1B-D3</option>
                  <option>1A-D4</option>
                  <option>2A-D3</option>
                  <option>2B-D3</option>
                  <option>2A-D4</option>
                  <option>3A-D3</option>
                  <option>3B-D3</option>
                  <option>3A-D4</option>
                 <option>4A-D4</option>
               </select>

                </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Semester</label>
                  <div class="col-md-4">
                    <select class="form-control" id="smt">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
                     
                  </div>
            </div>

            <div class="form-group">
                  <label for="info" class="col-md-5 control-label">Mata Kuliah </label>
                  <div class="col-md-4">
                     <select class="form-control" id="smt">
                      <option>DDP</option>
                      <option>Struktur Data dan Algoritma</option>
                      <option>Matematika Terapan</option>
                   </select>
                  </div>
            </div>

           <div class="form-group">
                  <label for="nama" class="col-md-5 control-label">Nama Mahasiswa</label>
                  <div class="col-md-4">
                 <input type="text" class="form-control" name="nama" maxlength="60" required/>
                  </div>
            </div>   

            <div class="form-group">
                  <label for="nim" class="col-md-5 control-label">NIM</label>
                  <div class="col-md-4">
                      <input type="text" class="form-control" name="nim" maxlength="15" required/>
                  </div>
            </div>                  
            <div class="form-group">
                  <label for="namafilefoto" class="col-md-5 control-label">Nilai</label>
                  <div class="col-md-4">
                      <input type="text" class="form-control" name="nilai"  maxlength="10" required />
                  </div>
            </div>

            <div class="form-group">
              <div class="col-md-10 text-right">
                <button onclick="goBack()" class="btn btn-warning">Back</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>  
            </div>

          </div>
        </div>
      </form>
    </div>   
  </div>
</div>
