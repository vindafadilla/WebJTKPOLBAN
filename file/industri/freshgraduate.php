<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-graduation-cap"></i> Fresh Graduate
            </h1>
        </div>
    </div>

    <?php 
      $index=1;
      $dataBarang = $mysqli->query("SELECT * FROM freshgraduate ORDER BY nim");
    ?>

    <div class="row">
        <div class="col-md-12 dataTable_wrapper">
            <table class="table table-striped table-bordered " id="datatabel">
                <thead>
                    <tr class="text-center">
                        <td>No</td>
                        <td>Nama Lengkap</td>
                        <td>Angkatan</td>
                        <td>Tahun Lulus</td>
                        <td>Skill</td>
                    </tr>
                </thead>

    <?php
    while($query = $dataBarang->fetch_assoc()){ 
    ?>                   
                <tbody>
                    <tr>
                      <td class="text-center"><?php echo $index;?></td>
                      <td><?php echo $query['nama'];?></td>
                      <td><?php echo $query['angkatan'];?></td>
                      <td><?php echo $query['tahun_lulus'];?></td>
                      <td><?php echo $query['keahlian'];?></td>
                    </tr>
                </tbody>
    <?php
        $index++;
        }
    ?>
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