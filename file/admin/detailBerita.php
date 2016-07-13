<?php
include('../../inc/class-general.php');
$prestasi= new UserData();
$prestasi->konek_db();

     $id=$_GET['id'];
            
     $query = "SELECT * FROM `berita` WHERE `ID_BERITA`='$id';";
                
     $result = $mysqli->query($query);
     while ($row = $result->fetch_assoc()) {
        ?>
        <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center"><?php echo $row['JUDUL_BERITA'];?></h3>
            </div>
            <div>
                <div class="col-md-2 form-control"><?php echo $row['TANGGAL'];?></div>
            </div>
            <div class="col-md-2 image-profile"><img src="../../image/berita/<?php echo $row['PHOTO'];?>" width="300px"> </div>
            
            <div class="col-md-2 form-control"><?php echo $row['BERITA'];?></div>
        
        <div class="panel-body">
        </div>

        </div>
        </div>
          
        <?php
     }

?>