<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-table"></i> Daftar Hadir
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Kehadiran</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-6 control-label">NIM</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="id" maxlength="5" required/>
                </div>
            </div>
              
             <div class="form-group">
                  <label for="judulinfo" class="col-md-6 control-label">Nama</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-6 control-label">Angkatan</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-6 control-label">Kelas</label>
                  <div class="col-md-6">
                      <select class="form-control" id="smt">
                        <option>1A - D3</option>
                        <option>1B - D3</option>
                        <option>1A - D4</option>
                        <option>2A - D3</option>
                        <option>2B - D3</option>
                        <option>2A - D4</option>
                        <option>3A - D3</option>
                        <option>3B - D3</option>
                        <option>3A - D4</option>
                        <option>4A - D4</option>
                      </select>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-6 control-label">Sakit</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="tgl" maxlength="10" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-6 control-label">Izin</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="tgl" maxlength="10" required/>
                  </div>
            </div>     

            <div class="form-group">
                  <label for="tgl" class="col-md-6 control-label">Alpha</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="tgl" maxlength="10" required/>
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