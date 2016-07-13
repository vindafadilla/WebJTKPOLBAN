<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">
                Mahasiswa
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="inc/adminModel.php?a=registrasiMahasiswa">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Data Mahasiswa</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-2">Username (NIM)</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="USERNAME" maxlength="9" required/>
                </div>
            </div>

            <div class="form-group">
                <label for="id" class="col-md-2">Nama</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="NAMA_MHS" maxlength="60" required/>
                </div>
            </div>
              
             <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Password</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="PASSWORD" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Angkatan</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="ANGKATAN" maxlength="4" required/>
                  </div>
            </div>

            
            <div class="form-group">
                  <label for="tgl" class="col-md-2">Kelas</label>
                  <div class="col-md-10">
                      <select class="form-control" id="smt" name="KELAS">
                        <option value="1A-D3">1A - D3</option>
                        <option value="1B-D3">1B - D3</option>
                        <option value="1A-D4">1A - D4</option>
                        <option value="2A-D3">2A - D3</option>
                        <option value="2B-D3">2B - D3</option>
                        <option value="2A-D4">2A - D4</option>
                        <option value="3A-D3">3A - D3</option>
                        <option value="3B-D3">3B - D3</option>
                        <option value="3A-D4">3A - D4</option>
                        <option value="4A-D4">4A - D4</option>
                      </select>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Tempat Lahir</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="TEMPAT_LAHIR" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Tanggal Lahir</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="TANGGAL_LAHIR" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Jenis Kelamin</label>
                  <div class="col-md-10">
                    <select class="form-control" id="smt" name="JENIS_KELAMIN">
                        <option value="1">Laki-laki</option>
                        <option value="0">Perempuan</option>
                    </select>
                     
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Alamat</label>
                  <div class="col-md-10">
                      
                      <textarea class="form-control" name="ALAMAT" maxlength="60"></textarea>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Nomor Telephone</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="NOTELP" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="namafilefoto" class="col-md-2">Photo</label>
                  <div class="col-md-10">
                      <input type="file" name="namafilefoto" id="foto" required />
                  </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>  
            </div>

          </div>
        </div>
      </form>
    </div>   
  </div>  
</div>