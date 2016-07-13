<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Input Beasiswa
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Beasiswa</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-6 control-label">Kode Beasiswa</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="id" maxlength="5" required/>
                </div>
            </div>
              
             <div class="form-group">
                  <label for="judulinfo" class="col-md-6 control-label">Jenis Beasiswa</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-6 control-label">Judul Beasiswa</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="info" class="col-md-6 control-label">Isi Beasiswa</label>
                  <div class="col-md-6">
                      <!--<input type="text" class="form-control" name="info" required/>-->
                      <textarea class="form-control" name="info"></textarea>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-6 control-label">Tanggal</label>
                  <div class="col-md-6">
                      <input type="date" class="form-control" name="tgl" maxlength="10" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-6 control-label">Deadline Pendaftaran</label>
                  <div class="col-md-6">
                      <input type="date" class="form-control" name="tgl" maxlength="10" required/>
                  </div>
            </div>     

            <div class="form-group">
                  <label for="namafilefoto" class="col-md-6 control-label">Photo</label>
                  <div class="col-md-6">
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