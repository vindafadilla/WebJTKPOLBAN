<!DOCTYPE html>
<html>
<head>
  <title>Jurusan Teknik Komputer dan Informatika POLBAN</title>
  <?php include 'panggil.php' ?>
</head>

<?php 
if(!isset($_GET['content'])){
  $vcontent = "dashboard.php";
}
else{
  $vcontent = $_GET['content'];
}
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-atas" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <form class="navbar-form" style="width: 225px;" role="search">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search Mahasiswa">
                         <span class="input-group-btn">
                             <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                             </button>
                         </span>
                     </div>
                 </form>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Vinda Fadilla <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            

            <!-- SIDE BAR -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="profile">
                          <img class="img-responsive img-profile" src="image/img.jpg">
                    </li>
                    <li class="sidebar-profile-edit">
                      <ul class="identity-profile">
                          <li class="text-center">
                            <b>Vinda Fadilla</b>
                          </li>
                          <li class="text-center">
                            <i>Administrator Alumni</i>
                          </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="alumni2.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-desktop"></i> Info Lowongan Kerja  </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Forms <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="alumni2.php?content=<?php echo "inputloker.php"?>">Lowongan Kerja</a>
                            </li>
                            <li>
                                <a href="#">Beasiswa</a>
                            </li>
                            <li>
                                <a href="alumni2.php?content=<?php echo "tracer-study.php"?>">Tracer Study</a>
                            </li>
                            <li>
                                <a href="#">Saran</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="alumni2.php?content=<?php echo "edit-data.php"?>"><i class="fa fa-fw fa-edit"></i> Edit Data</a>
                    </li>
                </ul>
            </div>
            <!-- SIDE BAR -->
        </nav>

        <!-- ISI -->
        <div id="page-wrapper">

            <?php include $vcontent; ?>

        </div>
        <!-- /#page-wrapper -->
        <!-- ISI -->

        <!-- FOOTER -->
        <div class="navbar-fixed-bottom sub-footer-edit">
            <div class="copyright text-center">
              &copy; Day 2016 by <a target="_blank" href="#">Kelompok Rony</a>.All Rights Reserved.
            </div>
        </div>
        <!-- FOOTER -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>