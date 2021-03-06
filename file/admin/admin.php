<!DOCTYPE html>

<?php 
    session_start();
    if($_SESSION['role'] != 'admin'){
        header("location:../../index.php");
    }
    include('class-admin.php');
    if(isset($_GET['logout'])){
        $user = new Admin();    
        $user->logout('role');
        header("location:admin.php");
    }
    $user = new Admin();
    $user->konek_db();
    $user->set_data_admin($_SESSION['user'], $_SESSION['pass'], $mysqli);
?>

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
                         <input type="text" class="form-control" placeholder="Search...">
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
                            <a href="admin.php?logout=1"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            

            <!-- SIDE BAR -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="profile">
                          <img class="img-profile" src="image/seohyun-yearbook-photo.jpg">
                    </li>
                    <li class="sidebar-profile-edit">
                      <ul class="identity-profile">
                          <li class="text-center">
                            <b>Vinda Fadilla</b>
                          </li>
                          <li class="text-center">
                            <i>Administrator</i>
                          </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="admin.php?content=<?php echo "dashboard.php"?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Kategori <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="admin.php?content=<?php echo "manageBerita.php"?>"><i class="fa fa-fw fa-newspaper-o"></i> Berita</a>
                            </li>
                            <li>
                                <a href="admin.php?content=<?php echo "managePrestasi.php"?>"><i class="fa fa-fw fa-trophy"></i> Prestasi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-edit"></i> Manage Absensi <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                        	<li>
                                <a href="admin.php?content=<?php echo "manageKehadiranMahasiswa.php"?>"><i class="fa fa-fw fa-table"></i> Kehadiran Mahasiswa</a>
                            </li>
                            <li>
                                <a href="admin.php?content=<?php echo "manageKehadiranDosen.php"?>"><i class="fa fa-fw fa-table"></i> Kehadiran Dosen</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="admin.php?content=<?php echo "manageUser.php"?>"><i class="fa fa-fw fa-calendar"></i> Manage User</a>
                    </li>

                    <li>
                        <a href="admin.php?content=<?php echo "calendaracademic.php"?>"><i class="fa fa-fw fa-calendar"></i> Calendar Academic</a>
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

        

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#datatabel').DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                dayClick: function() {
                    alert('a day has been clicked!');
                }
            });
        });
    </script>

    <script>
      function goBack(){
        window.history.back();
      }
    </script>

    <script type="text/javascript">
      tinymce.init({
        selector : 'textarea'
      });
    </script>

</body>

</html>