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

<!-- ISI -->
<?php include $vcontent; ?>
<!-- ISI -->

<!-- FOOTER -->
<div class="garisoren">&nbsp</div>
<footer class="footer-edit">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <h4>Akreditasi Program Studi</h4>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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