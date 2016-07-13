<div class="container-fluid">
  
  <!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              <i class="fa fa-user"></i> Registrasi User
          </h1>
      </div>
  </div>
  <form action="admin.php?content=registrasiUser.php" method="POST">
     <div class="row">
    <div class="col-md-4">
     <div class="form-group">
      <label for="smt">User :</label>
        <select class="form-control" id="smt" name="peran">
          <option value="admin">Admin</option>
          <option value="alumni" >Alumni</option>
          <option value="dosen">Dosen</option>
          <option value="industri">Industri</option>
          <option value="mahasiswa">Mahasiswa</option>
        </select>
     </div>
    </div>
  </div>
  <div>
          
          <button class="btn btn-primary btn-content">
            Search
          </button>
          <br />
        </div>
  </form>
 

<?php 
       $b = isset($_POST['peran']) ? $_POST['peran'] : null;

       switch ($b) {
        case 'mahasiswa':
          include "registrasimahasiswa.php";
          break;

        case 'dosen':
          include "registrasidosen.php";
          break;

        case 'alumni':
          include "registrasialumni.php";
          break;

        case 'industri':
          include "registrasiindustri.php";
          break;

        case 'admin':
          include "registrasiadmin.php";
          break;
        
        
       }
       ?>

  <?php 
  // include "registrasi/registrasimahasiswa.php" 
  ?>

</div>
