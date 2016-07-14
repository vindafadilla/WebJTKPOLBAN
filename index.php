<?php 
  session_start();
  if(isset($_SESSION['role'])){
    switch ($_SESSION['role']) {
      case 'mahasiswa':
        header("location:file/mahasiswa/mahasiswa.php");
        break;
      
      case 'dosen':
        header("location:file/dosen/dosen.php");
        break;

      case 'alumni':
        header("location:file/alumni/alumni.php");
        break;

      case 'admin':
        header("location:file/admin/admin.php");
        break;

      case 'industri':
        header("location:file/industri/industri.php");
        break;
    }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Jurusan Teknik Komputer dan Informatika POLBAN</title>
</head>

<?php include 'panggil.php' ?>

<?php 
if(!isset($_GET['content'])){
  $vcontent = "home.php";
}
else{
  $vcontent = $_GET['content'];
}
?>

<body>

<!-- NAVBAR ATAS -->
  <nav class="navbar navbar-inverse navbar-atas">
    <div class="container-fluid">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="view-login.php" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
<!-- ===END=== -->

<!-- JUMBOTRON -->
<div class="garisoren">&nbsp</div>

  <div class="jumbotron-edit">
    <img src="image/jtk.png"> 
  </div>

<div class="garisoren">&nbsp</div>
<!-- ===END=== -->

<!-- NAVBAR BAWAH -->
  <nav class="navbar navbar-inverse navbar-bawah">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbar1">
         <ul class="nav navbar-nav">
             <li class="active"><a href="index.php">Home</a></li>
             <li>
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang JTK
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="index.php?content=<?php echo "tentang_jtk/visidanmisi.php"?>">Profile, Visi, dan Misi</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/riwayatsingkat.php"?>">Riwayat Singkat</a></li>
                 <li><a href="#">Struktur Organisasi</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/fasilitas.php"?>">Fasilitas</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/reputasi.php"?>">Reputasi</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/kompetensi.php"?>">Kompetensi Lulusan</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/produk.php"?>">Produk</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/hasilpenelitian.php"?>">Hasil Penelitian</a></li>
                 <li><a href="index.php?content=<?php echo "tentang_jtk/tenagakependidikan.php"?>">Tenaga Kependidikan</a></li>
               </ul>
             </li>
             <li class="">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Program Studi
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="index.php?content=<?php echo "program_studi/d3.php"?>">D3 Teknik Informatika</a></li>
                 <li><a href="index.php?content=<?php echo "program_studi/d4.php"?>">D4 Teknik Informatika</a></li>
               </ul>
             </li>
             <li><a href="#">Kumpulan Peraturan</a></li> 
             <li><a href="index.php?content=<?php echo "kontak.php"?>">Kontak</a></li> 
         </ul>

         <!-- add search form -->
         <form class="navbar-form navbar-right" role="search">
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
    </div>
  </nav>
<!-- ===END=== -->
<div class="row jarak-konten">
  <div class="col-sm-3">
    <div class="panel panel-oren">
      <div class="panel-heading">Kategori</div>
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item"><a href="index.php?content=<?php echo "berita.php"?>"> Berita</a></li>
          <li class="list-group-item"><a href="index.php?content=<?php echo "prestasi.php"?>"> Prestasi Mahasiswa</a></li>
        </ul>
      </div>
    </div>

    <div class="panel panel-oren">
      <div class="panel-heading">Facebook JTK</div>
      <div class="panel-body"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fjtkpolban&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="458" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
    </div>
  </div>
  <!-- ISI -->
  <?php include $vcontent; ?>
  <!-- ISI -->
  <div class="col-sm-2"> 
    <div class="panel panel-oren">
      <div class="panel-heading">Prestasi Mahasiswa</div>
      <div class="panel-body">
          <div id="prestasi" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="image/c1.png">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="item">
              <img src="image/c2.png">
              <div class="carousel-caption">
              </div>
            </div>
          
            <div class="item">
              <img src="image/c3.png">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="item">
              <img src="image/c4.png">
              <div class="carousel-caption">
              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#prestasi" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#prestasi" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <div class="panel panel-oren">
      <div class="panel-heading">Gallery</div>
      <div class="panel-body">
        <div id="gallery" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="image/c5.png">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="item">
              <img src="image/c6.png">
              <div class="carousel-caption">
              </div>
            </div>
          
            <div class="item">
              <img src="image/c7.png">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="item">
              <img src="image/c1.png">
              <div class="carousel-caption">
              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#gallery" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#gallery" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->
<div class="garisoren">&nbsp</div>
<footer class="footer-edit">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <h4>Akreditasi Program Studi</h4>
        </div>
        <table class="table table-bordered">
          <tbody class="text-center">
            <tr>
              <td colspan="2"> Prodi D3 Teknik Informatika</td>
            </tr>
            <tr>
              <td><strong style="font-size:25px;">A</strong></td>
              <td>terakreditasi tahun 2013<br>berlaku hingga 19-10-2018</td>
            </tr>
          </tbody>
        </table>

        <table class="table table-bordered">
          <tbody class="text-center">
            <tr>
              <td colspan="2"> Prodi D4 Teknik Informatika</td>
            </tr>
            <tr>
              <td><strong style="font-size:25px;">B</strong></td>
              <td>terakreditasi tahun 2012<br>berlaku hingga 29-06-2017</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div class="col-md-3">
        <div class="text-center">
          <h4>Kontak</h4>
        </div>
        <p>Jurusan Teknik Komputer dan Informatika<br>Politeknik Negeri Bandung<br><br>Jl. Gegerkalong Hilir, Ds. Ciwaruga Kotak Pos 1234 Bandung 40012<br><br>Telepon (022) 2013789<br>Fax. (022)2013789<br>email polban@polban.ac.id</p>
      </div>
      

      <div class="col-md-3">
        <div class="text-center">
          <h4>Link Eksternal</h4>
        </div>
        <div class="warna-link-footer"> 
          <b><a href="#">HIMPUNAN MAHASISWA KOMPUTER</a><br>
          <a href="#">PORTAL AKADEMIK POLBAN</a><br>
          <a href="#">KEMAHASISWAAN POLBAN</a><br>
          <a href="#">PMDK POLBAN</a><br>
          <a href="#">SMB POLBAN</a><br>
          <a href="#">JPAC POLBAN</a><br>
          <a href="#">APTIKOM</a></b>
        </div>
      </div>

      <div class="col-md-3">
        <div class="text-center">
          <h4>Receiving email update</h4>
        </div>
        <p>By subscribing to our mailing list you'll always stay up to date with the lastest news form JTK POLBAN. We will never resell or repurpose your address. Thank you.</p>
        <form class="form-inline">
          <input type="email" class="form-control form-edit" size="20">
          <button type="button" class="btn btn-danger">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</footer>

<div class="sub-footer sub-footer-edit">
  <div class="container">
    <div class="row">      
      <div class="text-center">
        <div class="copyright">
          &copy; Day 2016 by <a target="_blank" href="#">Kelompok Rony</a>.All Rights Reserved.
        </div>
      </div>            
    </div>
  </div>        
</div>
<!-- ===END=== -->

<!-- LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog login-edit">
    <div class="loginmodal-container">
      <h1>Login to Your Account</h1><br>
      <form action="login.php" method="post">
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