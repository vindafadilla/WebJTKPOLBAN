<?php 
    $nim = $user->get_nim();
    $data = $mysqli->query("SELECT * FROM nilai WHERE NIM = '$nim'");
    $prod = $mysqli->query("SELECT PRODI FROM mahasiswa WHERE NIM = '$nim'");
    $prodi = $prod->fetch_assoc();
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-child"></i> Daftar Nilai
            </h1>
        </div>
    </div>

    <table>
        <tr>
            <td width="35%">Nama</td>
            <td>:</td>
            <td> <?php echo $user->get_nama(); ?></td>
        </tr>
        <tr>
            <td width="35%">NIM</td>
            <td>:</td>
            <td> <?php echo $user->get_nim(); ?></td>
        </tr>
        <tr>
            <td width="35%">Jurusan</td>
            <td>:</td>
            <td> Teknik Komputer dan Informatika</td>
        </tr>
        <tr>
            <td width="35%">Program Studi</td>
            <td>:</td>
            <td> <?php echo $prodi['PRODI']; ?> - Teknik Informatika</td>
        </tr>
    </table>

    &nbsp

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered ">
                <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Mata Kuliah</td>
                        <td>SKS</td>
                        <td>Nilai</td>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                        $i = 1;
                        $sks = 0;
                        while($dat = $data->fetch_assoc()){ 
                            $sks+=$dat['SKS'];
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $i; ?></td>
                      <td><?php echo $dat['MATKUL']; ?></td>
                      <td class="text-center"><?php echo $dat['SKS']; ?></td>
                      <td class="text-center"><?php echo $dat['NILAI']; ?></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <table>
        <tr>
            <td width="75%">Satuan Kredit Semester (SKS)</td>
            <td>:</td>
            <td> <?php echo $sks; ?> SKS</td>
        </tr>
        <tr>
            <td width="75%">Index Prestasi Kumulatif (IPK)</td>
            <td>:</td>
            <td> 3.44 IPK</td>
        </tr>
    </table>

    &nbsp

    <div class="row">
        <div class="col-md-12">
            <button onclick="goBack()" class="btn btn-primary">Back</button>
        </div>
    </div>

    &nbsp
</div>