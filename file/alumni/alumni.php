<!DOCTYPE html>
<html>
<head>
  <title>Jurusan Teknik Komputer dan Informatika POLBAN</title>
  <?php include 'panggil.php' ?>
</head>

<body>

<?php 
if(!isset($_GET['content'])){
  $vcontent = "dashboard.php";
}
else{
  $vcontent = $_GET['content'];
}
?>

<!-- NAVBAR BAWAH -->
  <nav class="navbar-fixed-top navbar navbar-inverse navbar-bawah ">
    <div class="navbar-header brand-edit text-center">
        <form class="navbar-form" role="search">
         <div class="input-group">
             <input type="text" class="form-control" placeholder="Search this site">
             <span class="input-group-btn">
                 <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                 </button>
             </span>
         </div>
     </form>
    </div>
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar1">
         <ul class="nav navbar-nav navbar-right">
             <li class="">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Vinda Fadilla
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="#">Setting</a></li>
                 <li><a href="#">Log Out</a></li>
                 <li><a href="#">Help</a></li>
               </ul>
             </li>
         </ul>
      </div>
    </div>
  </nav>
<!-- ===END=== -->

<!-- SIDE BAR -->
<ul class="sidenav" >
  <li>
    <ul class="sidebar-profile">
      <li>
        <img class="img-profile" src="../../image/img.jpg">
      </li>
      <li>
        <b>Vinda Fadilla</b>
      </li>
      <li>
        <i>Alumni</i>
      </li>
    </ul>
     
     
  </li>
  <li><!-- add search form -->
     <h3>  Menu</h3>
  </li>
  <li><a class="active" href="alumni.php?content=<?php echo "dashboard.php"?>">Dashboard</a></li>
  <li><a href="alumni.php?content=<?php echo "tracer-study.php"?>">Tracer Study </a>
  </li>
  <li><a href="alumni.php?content=<?php echo "dashboard.php"?>">Lowongan Pekerjaan</a>
    <ul>
      <li>
        <a href="alumni.php?content=<?php echo "inputloker.php"?>">Input Lowongan Pekerjaan</a>
      </li>
    </ul>
  </li>
  <li><a href="alumni.php?content=<?php echo "dashboard.php"?>">Beasiswa</a></li>
  <li><a href="alumni.php?content=<?php echo "edit-data.php"?>">Edit Data</a>
  <li><a href="alumni.php?content=<?php echo "dashboard.php"?>">Search Alumni</a></li>
  </li>
  <br />
  <br />
  <br />
</ul>
<!-- ===END=== -->

<!-- ISI -->
<?php include $vcontent; ?>
<!-- ISI -->

<!-- LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog login-edit">
    <div class="loginmodal-container">
      <h1>Login to Your Account</h1><br>
      <form>
        <input type="text" name="user" placeholder="Email">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
      </form>
          
      <div class="login-help">
        <a href="#">Forgot Password</a>
      </div>
    </div>
  </div>
</div>
<!-- ===END=== -->

</body>
</html>