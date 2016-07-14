<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-child"></i> Beasiswa
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form action="industri.php?content=<?php echo '../semua/insertbeasiswa.php'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Beasiswa</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-5 control-label">Kode Beasiswa</label>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="idbeasiswa" maxlength="5" required/>
                </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Judul Beasiswa</label>
                  <div class="col-md-4">
                      <input type="text" class="form-control" name="judulbeasiswa" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Kuota</label>
                  <div class="col-md-4">
                      <input type="number" class="form-control" name="kuotabeasiswa" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="info" class="col-md-5 control-label">Deskripsi Beasiswa</label>
                  <div class="col-md-4">
                      <textarea name="isibeasiswa" id="isibeasiswa"></textarea>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-5 control-label">Tanggal Mulai Pendaftaran</label>
                  <div class="col-md-4">
                      <input type="date" class="form-control" name="tglmulaibeasiswa" maxlength="10" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-5 control-label">Tanggal Akhir Pendaftaran</label>
                  <div class="col-md-4">
                      <input type="date" class="form-control" name="tglakhirbeasiswa" maxlength="10" required/>
                  </div>
            </div>     

            <div class="form-group">
                  <label for="namafilefoto" class="col-md-5 control-label">File</label>
                  <div class="col-md-4">
                      <input type="file" name="filebeasiswa" required />
                  </div>
            </div>

            <div class="form-group">
              <div class="col-md-10 text-right">
                <button onclick="goBack()" class="btn btn-warning">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>  
            </div>

          </div>
        </div>
      </form>
    </div>   
  </div>  
</div>