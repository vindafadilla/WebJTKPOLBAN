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
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="inc/adminModel.php?a=insertAbsensiMahasiswa">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Masukkan Kehadiran</h3>
            </div>

          <div class="panel-body">

            <div class="form-group">
                <label for="id" class="col-md-2 ">Nama</label>
                <div class="col-md-10">
                    <select name="ID_MHS" class="form-control">
                        <option>- Pilihan -</option>
                        <?php
                        $query = "SELECT * FROM `mhs`;";
                        include('../../user.login.php');
                            $user = new UserData(); 
                            $user->konek_db();

                            $result = mysqli_query($mysqli,$query);

                        while($row = mysqli_fetch_assoc($result)){
                          echo "<option value=\"$row[ID_MHS]\">$row[NAMA_MHS]</option>";
                        }
                      ?>
                      </select>

                </div>
            </div>
              
             

            <div class="form-group">
        <label for="tgl" class="col-md-2 ">Semester</label>
        <div class="col-md-10">
          <select name="SEMESTER" class="form-control">
            <option>- Pilihan -</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option>
            <!-- <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option> -->
          </select>

        </div>
      </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-2 ">Sakit</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="SAKIT" maxlength="10" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-2 ">Izin</label>
                  <div class="col-md-10">
                      <input type="text" class="form-control" name="IZIN" maxlength="10" required/>
                  </div>
            </div>     

            <div class="form-group">
                  <label for="tgl" class="col-md-2 ">Alpha</label>
                  <div class="col-md-10">
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