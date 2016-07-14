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
              <td width="150px">NIP</td>
              <td width="20px" align="center">:</td>
              <td width="500px"><?php echo $user->get_identitas(); ?></td>
            </tr>
            <tr>
              <td width="150px">Detail Kehadiran</td>
              <td width="20px" align="center">:</td>
            </tr>
          </table>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="smt">Semester :</label>
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

        &nbsp

        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Mata Kuliah</td>
                  <td>Hadir (Jam)</td>
                  <td>Total Waktu per Semester (Jam)</td>
                  <td>Presentasi Kehadiran (%)</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Sistem Informasi (Teori)</td>
                  <td class="text-center">80</td>
                  <td class="text-center">100</td>
                  <td class="text-center">80</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Sistem Informasi (Praktek)</td>
                  <td class="text-center">70</td>
                  <td class="text-center">10</td>
                  <td class="text-center">80</td>
                </tr>
              </tbody>
            </table>  
          </div>
        </div>

      </div>
    </div>
</div>