<?php 
    if(isset($_POST['angkatan']) || isset($_POST['prodi'])){
        if($_POST['angkatan'] != "---Semua---" && $_POST['prodi'] != "---Semua---"){
            $angkatan = $_POST['angkatan'];
            $prodi = $_POST['prodi'];
            $alumni = $mysqli->query("SELECT * FROM alumni WHERE ANGKATAN = '$angkatan' AND PRODI = '$prodi' ORDER BY ANGKATAN DESC");
        }
        else if($_POST['angkatan'] != "---Semua---"){
            $angkatan = $_POST['angkatan'];
            $prodi = "---Semua---";
            $alumni = $mysqli->query("SELECT * FROM alumni WHERE ANGKATAN = '$angkatan' ORDER BY ANGKATAN DESC");
        }
        else if($_POST['prodi'] != "---Semua---"){
            $prodi = $_POST['prodi'];
            $angkatan = "---Semua------Semua---";
            $alumni = $mysqli->query("SELECT * FROM alumni WHERE PRODI = '$prodi' ORDER BY ANGKATAN DESC");
        }
        else{
        $angkatan = "---Semua---";
        $prodi = "---Semua---";
        $alumni = $mysqli->query("SELECT * FROM alumni ORDER BY ANGKATAN DESC");
    }
    }
    else{
        $angkatan = "---Semua---";
        $prodi = "---Semua---";
        $alumni = $mysqli->query("SELECT * FROM alumni ORDER BY ANGKATAN DESC");
    }
 ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-search"></i> Daftar Alumni
            </h1>
        </div>
    </div>
<form action="mahasiswa.php?content=../semua/searchalumni.php" method="post" id="form">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="smt">Angkatan :</label>
                <select class="form-control" name="angkatan" onChange="this.form.submit()" >
                    <?php if(isset($_POST['angkatan']))
                    echo "<option hidden>$angkatan</option>";
                    ?>
                    <option value="---Semua---">---Semua---</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="smt">Prodi :</label>
                <select class="form-control" id="smt" name="prodi" onChange="this.form.submit()">
                <?php if(isset($_POST['prodi']))
                    echo "<option hidden>$prodi</option>";
                    ?>
                    <option value="---Semua---">---Semua---</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                </select>
            </div>
        </div>
    </div>
</form>

    <div class="row">
        <div class="col-md-12 dataTable_wrapper">
            <table class="table table-striped table-bordered " id="datatabel">
                <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Angkatan</td>
                        <td>Prodi</td>
                        <td>Pekerjaan Pertama</td>
                        <td>Pekerjaan Sekarang</td>
                        <td>View Detail</td>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
                    $i=1;
                    while ($almn = $alumni->fetch_assoc()) {
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $i; ?></td>
                      <td><?php echo $almn['NAMA']; ?></td>
                      <td><?php echo $almn['ANGKATAN']; ?></td>
                      <td><?php echo $almn['PRODI']." - T. Informatika"; ?></td>
                      <td><?php echo $almn['PEKERJAAN_PERTAMA']; ?></td>
                      <td><?php echo $almn['PEKERJAAN_SEKARANG']; ?></td>
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