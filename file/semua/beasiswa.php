<?php 
    $mysqli = new mysqli("localhost","root","","login");
    $beasiswa = $mysqli->query("SELECT * FROM beasiswa");
 ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-child"></i> Daftar Beasiswa
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
            <form action="<?php echo $user->get_role(); ?>.php?content=<?php echo "../semua/inputbeasiswa.php"?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                        <td>Nama Beasiswa</td>
                        <td>Kuota</td>
                        <td>Awal Pendaftaran</td>
                        <td>Akhir Pendaftaran</td>
                        <td>View Detail</td>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                    $i=1;
                    while ($bsw = $beasiswa->fetch_assoc()) {
                        $date1 = date_create($bsw['tglmulaibeasiswa']);
                        $date2 = date_create($bsw['tglakhirbeasiswa']);
                        $id = $bsw['idbeasiswa'];
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $i; ?></td>
                      <td><?php echo $bsw['judulbeasiswa']; ?></td>
                      <td><?php echo $bsw['kuotabeasiswa']; ?></td>
                      <td><?php echo date_format($date1,"d F Y"); ?></td>
                      <td><?php echo date_format($date2,'d F Y'); ?></td>
                      <td class="text-center"><a href="<?php echo $user->get_role(); ?>.php?content=../semua/detailbeasiswa.php&id=<?php echo $id; ?>">View Detail</a></td>
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