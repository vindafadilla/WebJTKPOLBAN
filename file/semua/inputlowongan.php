
<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-table"></i> Lowongan Pekerjaan
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo $user->get_role(); ?>.php?content=<?php echo '../semua/insertlowongan.php'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Lowongan Pekerjaan</h3>
            </div>

          <div class="panel-body">
              
             <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Posisi</label>
                  <div class="col-md-4">
                      <input type="text" class="form-control" name="posisilowongan" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Minimal Gaji</label>
                  <div class="col-md-4">
                      <input type="number" class="form-control" name="gajilowongan" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="judulinfo" class="col-md-5 control-label">Tempat</label>
                  <div class="col-md-4">
                      <input type="text" class="form-control" name="tempatlowongan" maxlength="60" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="info" class="col-md-5 control-label">Deskripsi Lowongan Pekerjaan</label>
                  <div class="col-md-4">
                      <textarea name="isilowongan" id="isilowongan"></textarea>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-5 control-label">Tanggal Mulai Pendaftaran</label>
                  <div class="col-md-4">
                      <input type="date" class="form-control" name="tglmulailowongan" maxlength="10" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-5 control-label">Tanggal Akhir Pendaftaran</label>
                  <div class="col-md-4">
                      <input type="date" class="form-control" name="tglakhirlowongan" maxlength="10" required/>
                  </div>
            </div>     

            <div class="form-group">
                  <label for="namafilefoto" class="col-md-5 control-label">File</label>
                  <div class="col-md-4">
                      <input type="file" name="fotolowongan" required />
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
