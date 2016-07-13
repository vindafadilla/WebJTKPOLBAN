<?php
include('../../inc/class-general.php');
$prestasi= new UserData();
$prestasi->konek_db();

     $id=$_GET['id'];
            
     $query = "SELECT * FROM `berita` WHERE `ID_BERITA`='$id';";
                
     $result = $mysqli->query($query);
     while ($row = $result->fetch_assoc()) {
        ?>


<div class="container-fluid">
  <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-newspaper-o"></i> Edit Berita
            </h1>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <form name="myForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="inc/adminModel.php?a=editBerita">
        <input type="number"name="ID_BERITA" value="<?php echo $row['ID_BERITA'];?>" hidden/>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Edit Berita</h3>
            </div>

          <div class="panel-body">


            <div class="form-group">
                  <label for="judulinfo" class="col-md-2">Judul Berita</label>
                  <div class="col-md-10">

                      <input type="text" class="form-control" name="judulinfo" maxlength="60" value="<?php echo $row['JUDUL_BERITA'];?>" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="info" class="col-md-2">Berita</label>
                  <div class="col-md-10">
                      <!--<input type="text" class="form-control" name="info" required/>-->
                      <textarea class="form-control" name="info" value="<?php echo $row['BERITA'];?>"><?php echo $row['BERITA'];?></textarea>
                  </div>
            </div>

            <div class="form-group">
                  <label for="tgl" class="col-md-2">Tanggal</label>
                  <div class="col-md-10">
                      <input type="date" class="form-control" name="tgl" maxlength="10" value="<?php echo $row['TANGGAL'];?>" required/>
                  </div>
            </div>

            <div class="form-group">
                  <label for="namafilefoto" class="col-md-2">Photo</label>

                  <div class="col-md-10">
                      <input type="file" name="namafilefoto" id="foto" value="<?php echo $row['PHOTO'];?>" />
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
<?php
}
?>