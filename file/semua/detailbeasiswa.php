<?php 
  $id = $_GET['id'];
  $data = $mysqli->query("SELECT * FROM beasiswa WHERE idbeasiswa = $id");
  $bsw = $data->fetch_assoc();
  $date1 = date_create($bsw['tglmulaibeasiswa']);
  $date2 = date_create($bsw['tglakhirbeasiswa']);
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <i class="fa fa-child"></i> <?php echo $bsw['judulbeasiswa']; ?>
            </h1>
            <h3> <?php echo $bsw['perusahaan']; ?> </h3>
        </div>
    </div>

     <div class="row">
    <div class="col-md-12">
      <div class="panel panel-footer">
        <td><h4>KUOTA</h4></td>
        <div class="panel-heading">
           <td><h4><?php echo $bsw['kuotabeasiswa']; ?> orang</td>
    </div>
</div>
</div>
    
     <div class="col-md-12">
      <div class="panel panel-footer">
        <td><h4>DESKRIPSI BEASISWA</h4></td>
        <div class="panel-heading">
      <?php echo $bsw['isibeasiswa']; ?>
  </div>
</div>
</div>

<div class="col-md-6">
    <td> Open Requirement <br></td>
    <td> <?php echo date_format($date1,"d F Y"); ?> </td> 
</div>
<div class="col-md-6">
    <div align="right">
        <td>Close Requirement <br></td>
       <td> <?php echo date_format($date2,"d F Y"); ?> </td> 

    </div>
</div>
  </div>


    &nbsp

    <div class="row">
        <div class="col-md-12">
            <button onclick="goBack()" class="btn btn-warning">Back</button>
        </div>
    </div>

    &nbsp
</div>