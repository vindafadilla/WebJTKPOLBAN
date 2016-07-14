<div class="col-sm-7"> 
<?php 
    $mysqli = new mysqli("localhost","root","","login");
    $batas = 1;
          $pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
           
          if ( empty( $pg ) ) {
          $posisi = 0;
          $pg = 1;
          } else {
          $posisi = ( $pg - 1 ) * $batas;
          }
    $query = "SELECT * FROM `berita` limit $posisi, $batas;";
              $no = 1+$posisi;
    $result = $mysqli->query($query);
              $i=1;
              while ($row = $result->fetch_assoc()) {

  ?>
  <div class="panel panel-blue">
    <div class="panel-heading">
      <h2><?php echo $row['JUDUL_BERITA'];?></h2>
      <div class="row">
        <div class="col-md-12">
          <label>Admin</label> - <?php echo $row['TANGGAL'];?>
        </div>
      </div>
    </div>

    <div class="panel-body text-center">
      <img src="image/<?php echo $row['PHOTO'];?>" width="100%">
    </div>

    <div class="panel-body text-justify">
      <p><?php echo $row['BERITA'];?></p>
    </div>
  </div>
<?php } 
    $jml_data = mysqli_num_rows($mysqli->query("SELECT * FROM berita"));
//Jumlah halaman
$JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
 
//Navigasi ke sebelumnya
if ( $pg > 1 ) {
$link = $pg-1;
$prev = "<li><a href='index.php?content=berita.php&pg=$link'>Sebelumnya </a></li>";
} else {
$prev = "<li><a href='#'>Sebelumnya</a></li> ";
}
 
//Navigasi nomor
$nmr = '';
for ( $i = 1; $i<= $JmlHalaman; $i++ ){
 
if ( $i == $pg ) {
$nmr .= "<li class='active'><a href='index.php?content=berita.php&pg=$i'>$i</a></li>";
} else {
$nmr .= "<li><a href='index.php?content=berita.php&pg=$i'>$i</a></li> ";
}
}
 
//Navigasi ke selanjutnya
if ( $pg < $JmlHalaman ) {
$link = $pg + 1;
$next = " <li><a href='index.php?content=berita.php&pg=$link'>Selanjutnya</a></li>";
} else {
$next = " <li><a href='#'>Selanjutnya</a></li>";
}
 
//Tampilkan navigasi
?>
<div align="center">
  <ul class="pagination">
    <?php echo $prev . $nmr . $next; ?>
  </ul>
</div>
</div>