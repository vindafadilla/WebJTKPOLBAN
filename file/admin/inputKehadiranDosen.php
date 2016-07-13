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
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="inc/adminModel.php?a=insertAbsensiDosen">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Kehadiran</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-6 control-label">Dosen</label>
                <div class="col-md-6">
                    <select name="ID_DOSEN" class="form-control">
                        <option>- Pilihan -</option>
                        <?php
                        $query = "SELECT * FROM `dosen`;";
                        include('../../inc/class-general.php');
                            $user = new UserData(); 
                            $user->konek_db();

                            $result = mysqli_query($mysqli,$query);

                        while($row = mysqli_fetch_assoc($result)){
                          echo "<option value=\"$row[ID_DOSEN]\">$row[NAMA_DOSEN]</option>";
                        }
                      ?>
                      </select>
                </div>
            </div>
              
             <div class="form-group">
                  <label for="judulinfo" class="col-md-6 control-label">Masuk</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="MASUK" maxlength="60" required/>
                  </div>
            </div>

           

            <div class="form-group">
                  <label for="tgl" class="col-md-6 control-label">Alpha</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="ALFA" maxlength="10" required/>
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