<?php 
  $izin = 1;
  $sakit = 2;
  $alpha = 5;
 ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-user"></i> Kehadiran Pribadi
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-4 text-center">
        <img src="image/img.jpg">
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <table>
            <tr>
              <td width="150px">Nama</td>
              <td width="20px" align="center">:</td>
              <td width="500px"><?php echo $user->get_nama(); ?></td>
            </tr>
            <tr>
              <td width="150px">NIM</td>
              <td width="20px" align="center">:</td>
              <td width="500px"><?php echo $user->get_identitas(); ?></td>
            </tr>
          </table>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="smt">Semester :</label>
            
            4
          </div>
        </div>

        &nbsp

        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td class="text-center">Izin</td>
                  <td class="text-center">Sakit</td>
                  <td class="text-center">Alpha</td>
                  <td class="text-center">Kompen</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center"><?php echo $izin; ?></td>
                  <td class="text-center"><?php echo $sakit; ?></td>
                  <td class="text-center"><?php echo $alpha; ?></td>
                  <td class="text-center"><?php echo $alpha*2; ?></td>
                </tr>
              </tbody>
            </table>  
          </div>
        </div>

      </div>
    </div>
</div>