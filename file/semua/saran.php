<?php 
    if(isset($_POST['perihal'])){
      $perihal = $_POST['perihal'];
      $nim = $user->get_identitas();
      $tanggal = date('Y/m/d');
      $nama = $user->get_nama();
      $identitas = $user->get_identitas();
      $saran = $_POST['saran'];
      $sql = "INSERT INTO `saran`(`NIM`, `NAMA`, `IDENTITAS`, `PERIHAL`, `tanggal`, `saran`) VALUES ('$nim','$nama','$identitas','$perihal','$tanggal','$saran')";
    }
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-sticky-note"></i> Saran
            </h1>
        </div>
    </div>
    <?php if(isset($_POST['perihal']))
    if($mysqli->query($sql)) echo '<div class="alert alert-success col-md-5 col-md-offset-3" role="alert"><b>Yeah!</b> Saran berhasil tersubmit</div>'
     ?>

    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo $user->get_role(); ?>.php?content=../semua/saran.php" data-toggle="validator" role="form" method="post">

              <div  class="row">
                  <div class="col-md-5 col-md-offset-3">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="smt">Tanggal Saran</label>
                          </div>
                      </div>
                      <div class="col-md-1">
                          <div class="form-group">
                              <label for="smt">:</label>
                          </div>
                      </div>
                      <div class="col-md-7">
                          <div class="form-group">
                              <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y/m/d'); ?>" disabled>
                          </div>
                      </div>
                  </div>
              </div>

              <div  class="row">
                  <div class="col-md-5 col-md-offset-3">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="smt">NAMA</label>
                          </div>
                      </div>
                      <div class="col-md-1">
                          <div class="form-group">
                              <label for="smt">:</label>
                          </div>
                      </div>
                      <div class="col-md-7">
                          <div class="form-group">
                              <input name="nama" class="form-control" value="<?php echo $user->get_nama(); ?>" disabled>
                          </div>
                      </div>
                  </div>
              </div>

              <div  class="row">
                  <div class="col-md-5 col-md-offset-3">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="smt">Perihal</label>
                          </div>
                      </div>
                      <div class="col-md-1">
                          <div class="form-group">
                              <label for="smt">:</label>
                          </div>
                      </div>
                      <div class="col-md-7">
                          <div class="form-group">
                              <input type="text" class="form-control" name="perihal" required>
                          </div>
                      </div>
                  </div>
              </div>

              <div  class="row">
                  <div class="col-md-5 col-md-offset-3">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="smt">Saran</label>
                              <textarea id="mytextarea" name="saran"></textarea>
                          </div>
                      </div>
                  </div>
              </div>

              <div  class="row">
                  <div class="col-md-4 col-md-offset-5 text-right">
                      <div class="form-group">
                          <button onclick="goBack()" class="btn btn-primary">Batal</button>
                          <button type="submit" class="btn btn-primary">Membuat Tugas</button>
                      </div>
                  </div>
              </div>

              <div  class="row">
                  &nbsp
              </div>
          </form>
        </div>
    </div>
</div>