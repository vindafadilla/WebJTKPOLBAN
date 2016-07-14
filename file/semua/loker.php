<?php 
    // $mysqli = new mysqli("localhost","root","","login");
    $loker = $mysqli->query("SELECT * FROM loker");
 ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-table"></i> Daftar Lowongan Kerja
            </h1>
        </div>
    </div>
    <?php 
    if ($user->get_role() != 'mahasiswa') { ?>
    <div class="row">
        <div class="col-md-6">
            <table class="form-group">
                <tr>
                    <td width="100px><label for="smt"><label>Program Studi</label></td>
                    <td width="20px class="text-center">:</td>
                    <td width="300px">
                        <select class="form-control" id="smt">
                            <option>Khusus D3</option>
                            <option>Khusus D4</option>
                            <option>D3 dan D4</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-6 text-right">
            <form action="<?php echo $user->get_role(); ?>.php?content=<?php echo "../semua/inputlowongan.php"?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <button class="btn btn-primary">Tambah</button>
            </form>
        </div>
  </div>
<?php    }
?>

    <div class="row">
        <div class="col-md-12 dataTable_wrapper">
            <table class="table table-striped table-bordered " id="datatabel">
                <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Posisi</td>
                        <td>Minimal Gaji</td>
                        <td>Tempat</td>
                        <td>Tanggal Mulai Pendaftaran</td>
                        <td>Tanggal Akhir Pendaftaran</td>
                        <td>View Detail</td>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                    $i=1;
                    while ($lkr = $loker->fetch_assoc()) {
                        $date1 = date_create($lkr['TANGGAL_MULAI']);
                        $date2 = date_create($lkr['TANGGAL_AKHIR']);
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $i; ?></td>
                      <td><?php echo $lkr['POSISI']; ?></td>
                      <td><?php echo $lkr['GAJI']; ?></td>
                      <td><?php echo $lkr['TEMPAT']; ?></td>
                      <td><?php echo date_format($date1,"d F Y"); ?></td>
                      <td><?php echo date_format($date2,'d F Y'); ?></td>
                      <td class="text-center"><a href="#">View Detail</a></td>
                    </tr>
                    <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>

    &nbsp

    <div class="row">
        <div class="col-md-12">
            <button onclick="goBack()" class="btn btn-primary">Back</button>
        </div>
    </div>

    &nbsp
</div>