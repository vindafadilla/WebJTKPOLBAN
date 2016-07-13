
<?php
    include('class-tatausaha.php');
    $tatausaha = new Tatausaha(); 
    $tatausaha->konek_db();
    // if(eregi('login.php', $_SERVER['PHP_SELF'])) 
    // exit('Error: Akses ditolak.');
    // include('inc/class-tatausaha.php');
    // $dosen = new Dosen(); 
    // $dosen->konek_db();
    // session_start();
    // if(!$dosen->cek_session('dosen')) 
    // { 
    //     header("Location:../login.php?a=login_tatausaha");
    //     // echo "login dulu</h1>\n";
    //     // echo "<a href='../login.php?a=login_dosen'>di sini</a>";
    //     exit();
    // }
        
?>

<?php

    $a = isset($_GET['a']) ? $_GET['a'] : null;
    switch ($a) {
        
        case 'statusValidasi':
            $validasi=$_GET['id'];
            $tatausaha->validasi_status($validasi, $mysqli);
            break;

        case 'insertPrestasi':
            $judulBerita = $_POST['judulinfo'];
            // $judulBerita = $_POST['judulBerita'];
            $isiBerita = $_POST['info'];
            $tgl = $_POST['tgl'];
            $namaFoto = $_FILES['namafilefoto']['name'];
            $admin ='141511063';

// echo $idBerita." ".$judulBerita." ".$isiBerita." ".$namafoto;

            move_uploaded_file($_FILES['namafilefoto']['tmp_name'],"../../../image/prestasi/".$_FILES['namafilefoto']['name']);
            $foto=$namaFoto;

            $tatausaha->insert_prestasi($judulBerita,$isiBerita,$tgl,$foto, $admin, $mysqli);

            break;

        case 'editPrestasi':
        	$idPrestasi= $_POST['ID_PRESTASI'];
            $judulPrestasi = $_POST['judulinfo'];
            // $judulBerita = $_POST['judulBerita'];
            $isiPrestasi = $_POST['info'];
            $tgl = $_POST['tgl'];
            $namaFoto = $_FILES['namafilefoto']['name'];
            $admin ='141511063';

// echo $idBerita." ".$judulBerita." ".$isiBerita." ".$namafoto;

            move_uploaded_file($_FILES['namafilefoto']['tmp_name'],"../../../image/prestasi/".$_FILES['namafilefoto']['name']);
            $foto=$namaFoto;

            $tatausaha->edit_prestasi($idPrestasi,$judulPrestasi,$isiPrestasi,$tgl,$foto, $admin, $mysqli); 	
            break;  
        case 'deletePrestasi':
       		$ID_PRESTASI=$_GET['id'];
       		echo "$ID_PRESTASI";
            $tatausaha->delete_prestasi($ID_PRESTASI,$mysqli);
            
           	break;
        
        case 'insertBerita':
            $judulBerita = $_POST['judulinfo'];
            // $judulBerita = $_POST['judulBerita'];
            $isiBerita = $_POST['info'];
            $tgl = $_POST['tgl'];
            $namaFoto = $_FILES['namafilefoto']['name'];
            $admin ='141511063';

// echo $idBerita." ".$judulBerita." ".$isiBerita." ".$namafoto;

            move_uploaded_file($_FILES['namafilefoto']['tmp_name'],"../../../image/berita/".$_FILES['namafilefoto']['name']);
            $foto=$namaFoto;

            $tatausaha->insert_berita($judulBerita,$isiBerita,$tgl,$foto, $admin, $mysqli);
            break;  

        case 'editBerita':
        	$idBerita= $_POST['ID_BERITA'];
            $judulBerita = $_POST['judulinfo'];
            // $judulBerita = $_POST['judulBerita'];
            $isiBerita = $_POST['info'];
            $tgl = $_POST['tgl'];
            $namaFoto = $_FILES['namafilefoto']['name'];
            $admin ='141511063';

// echo $idBerita." ".$judulBerita." ".$isiBerita." ".$namafoto;

            move_uploaded_file($_FILES['namafilefoto']['tmp_name'],"../../../image/berita/".$_FILES['namafilefoto']['name']);
            $foto=$namaFoto;

            $tatausaha->edit_berita($idBerita,$judulBerita,$isiBerita,$tgl,$foto, $admin, $mysqli); 	
            break;  

       case 'deleteBerita':
       		$ID_BERITA=$_GET['id'];
       		echo "$ID_BERITA";
            $tatausaha->delete_berita($ID_BERITA,$mysqli);
            
           	break;    

        case 'inputPrestasi':
            include "inputPrestasi.php";
            break;

        case 'dataDiri':
            include "dataDiri.php";
            break;

        case 'editDataDiri':
            include "editDataDiri.php";
            break;

        case 'updateDataDiri':
            
            $IMAGE_PATH=$_FILES['IMAGE_PATH']['name'];
            $IMAGE_PATHTEMP=$_FILES['IMAGE_PATH']['type'];
            $NAMA_TU=$_POST['NAMA_TU'];
            $USERNAME=$_POST['USERNAME'];
            $PASSWORD=$_POST['PASSWORD'];
            
            move_uploaded_file($_FILES['IMAGE_PATH']['tmp_name'],"../images/dosen/".$IMAGE_PATH);
            $tatausaha->edit_datadiri($IMAGE_PATH, $NAMA_TU,$USERNAME,$PASSWORD,$mysqli);
            break;

        case 'manageAbsensi':
            include "manageAbsensi.php";
            break;

        case 'inputAbsensi':
            include "inputAbsensi.php";
            break;

        case 'inputAbsensiDosen':
            # code...
            break;

        case 'insertAbsensiDosen':
            $ID_DOSEN=$_POST['ID_DOSEN'];
            $JUMLAH_HADIR=$_POST['MASUK'];
            $JUMLAH_ALFA=$_POST['ALFA'];
           
            $tatausaha->insert_absensidosen($ID_DOSEN,$JUMLAH_HADIR,$JUMLAH_ALFA, $mysqli);
            break;

        case 'manageAbsensiMahasiswa':
            include "manageAbsensiMahasiswa.php";
            break;

        case 'inputAbsensiMahasiswa':
            include "inputAbsensiMahasiswa.php";
            break;

        case 'insertAbsensiMahasiswa':
            // $ID_KEHADIRAN_MHS=$_POST['ID_KEHADIRAN_MHS'];
            
            $ID_MHS=$_POST['ID_MHS'];
            $SEMESTER=$_POST['SEMESTER'];
            $SAKIT=$_POST['SAKIT'];
            $IZIN=$_POST['IZIN'];
            $ALFA=$_POST['ALFA'];
           
            $tatausaha->insert_absensimahasiswa($ID_MHS,$SEMESTER,$SAKIT,$IZIN,$ALFA, $mysqli);
            break;

        case 'editAbsensiMahasiswa':
            include "editAbsensiMahasiswa.php";
            break;

        case 'updateAbsensiMahasiswa':
            $ID_KEHADIRAN_MHS=$_POST['ID_KEHADIRAN_MHS'];
            $ID_BUKU_BESAR=$_POST['ID_BUKU_BESAR'];
            $ID_MHS=$_POST['ID_MHS'];
            $ID_SEMESTER=$_POST['ID_SEMESTER'];
            $SAKIT=$_POST['SAKIT'];
            $IZIN_=$_POST['IZIN'];
            $ALFA=$_POST['ALFA'];
           
            $tatausaha->edit_absensimahasiswa($ID_KEHADIRAN_MHS,$ID_BUKU_BESAR,$ID_MHS,$ID_SEMESTER,$SAKIT,$IZIN_,$ALFA, $mysqli);
            break;

        case 'deleteAbsensiMahasiswa':
            $ID_KEHADIRAN_MHS=$_GET['id'];
            $tatausaha->delete_absensimahasiswa($ID_KEHADIRAN_MHS,$mysqli);
            break;

        case 'detailAbsensiMahasiswa':
            $id=$_GET['id'];
            
            $query = "SELECT * FROM `kehadiran_mhs` WHERE `ID_KEHADIRAN_MHS`='$id';";
                
            $tatausaha->konek_db();
            $result = mysqli_query($mysqli,$query);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- <form action="tatausaha.php?a=updateMahasiswa" method="POST"  enctype="multipart/form-data"> -->
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Buku Besar</div>
                <div class="col-md-10"><?php echo $row['ID_BUKU_BESAR'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">NIM</div>
                <div class="col-md-10"><?php echo $row['ID_MHS'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Semester</div>
                <div class="col-md-10"><?php echo $row['ID_SEMESTER'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Sakit</div>
                <div class="col-md-10"><?php echo $row['SAKIT'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Izin</div>
                <div class="col-md-10"><?php echo $row['IZIN_'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Alfa</div>
                <div class="col-md-10"><?php echo $row['ALFA'];?></div>
            </div>
            
                <!-- </form> -->
            


                <?php
            }
            break;

        case 'manageBukuBesar':
            include "manageBukuBesar.php";
            break;

        case 'manageUser':
            include "manageUser.php";
            break;

        case 'registrasiUser':
            include "registrasiUser.php";
            
            break;

        case 'registrasiDosen':

            $IMAGE_PATH=$_FILES['IMAGE_PATH']['name'];
            $IMAGE_PATHTEMP=$_FILES['IMAGE_PATH']['type'];
            $NAMA_DOSEN=$_POST['NAMA_DOSEN'];
            $USERNAME=$_POST['USERNAME'];
            $PASSWORD=$_POST['PASSWORD'];
            $EMAIL=$_POST['EMAIL'];
            move_uploaded_file($_FILES['IMAGE_PATH']['tmp_name'],"../images/dosen/".$IMAGE_PATH);
            $tatausaha->registrasi_dosen($IMAGE_PATH, $NAMA_DOSEN,$USERNAME,$PASSWORD,$EMAIL, $mysqli);


            break;
        
        case 'registrasiMahasiswa':
            $USERNAME=$_POST['USERNAME'];
            $NAMA_MHS=$_POST['NAMA_MHS'];
            $PASSWORD=$_POST['PASSWORD'];
            $ANGKATAN=$_POST['ANGKATAN'];
            $KELAS=$_POST['KELAS'];
            $TEMPAT_LAHIR=$_POST['TEMPAT_LAHIR'];
            $TANGGAL_LAHIR=$_POST['TANGGAL_LAHIR'];
            $JENIS_KELAMIN=$_POST['JENIS_KELAMIN'];
            $ALAMAT=$_POST['ALAMAT'];
            $NOTELP=$_POST['NOTELP'];
            $IMAGE_PATH=$_FILES['namafilefoto']['name'];
            $IMAGE_PATHTEMP=$_FILES['namafilefoto']['type'];
            move_uploaded_file($_FILES['namafilefoto']['tmp_name'],"../../../image/mahasiswa/".$IMAGE_PATH);
            $tatausaha->registrasi_mahasiswa($IMAGE_PATH, $NAMA_MHS,$USERNAME,$PASSWORD,$KELAS,$TEMPAT_LAHIR,$TANGGAL_LAHIR,$NOTELP,$ANGKATAN,$JENIS_KELAMIN,$ALAMAT, $mysqli);
            break;

        case 'editDosen':
            include "editDosen.php";
            break;

        case 'updateDosen':
            $ID_DOSEN=$_POST['ID_DOSEN'];
            $IMAGE_PATH=$_FILES['IMAGE_PATH']['name'];
            $IMAGE_PATHTEMP=$_FILES['IMAGE_PATH']['type'];
            $NAMA_DOSEN=$_POST['NAMA_DOSEN'];
            $USERNAME=$_POST['USERNAME'];
            $PASSWORD=$_POST['PASSWORD'];
            $EMAIL=$_POST['EMAIL'];
            move_uploaded_file($_FILES['IMAGE_PATH']['tmp_name'],"../images/dosen/".$IMAGE_PATH);
            $tatausaha->edit_dosen($ID_DOSEN,$IMAGE_PATH, $NAMA_DOSEN,$USERNAME,$PASSWORD,$EMAIL,$mysqli);
            break;

            case 'editMahasiswa':
                include "editMahasiswa.php";
                break;

        case 'updateMahasiswa':
            $ID_MHS=$_POST['ID_MHS'];
            $IMAGE_PATH=$_FILES['IMAGE_PATH']['name'];
            $IMAGE_PATHTEMP=$_FILES['IMAGE_PATH']['type'];
            $NAMA_MHS=$_POST['NAMA_MHS'];
            $USERNAME=$_POST['USERNAME'];
            $PASSWORD=$_POST['PASSWORD'];
            $ID_KELAS=$_POST['ID_KELAS'];
            $TEMPAT_LAHIR=$_POST['TEMPAT_LAHIR'];
            $TANGGAL_LAHIR=$_POST['TANGGAL_LAHIR'];
            $ASAL_SEKOLAH=$_POST['ASAL_SEKOLAH'];
            $ANGKATAN=$_POST['ANGKATAN'];
            $JURUSAN=$_POST['JURUSAN'];
            $PRODI=$_POST['PRODI'];
            move_uploaded_file($_FILES['IMAGE_PATH']['tmp_name'],"../images/mahasiswa/".$IMAGE_PATH);
            $tatausaha->edit_mahasiswa($ID_MHS,$IMAGE_PATH, $NAMA_MHS,$USERNAME,$PASSWORD,$ID_KELAS,$TEMPAT_LAHIR,$TANGGAL_LAHIR,$ASAL_SEKOLAH,$ANGKATAN,$JURUSAN,$PRODI, $mysqli);
            break;

        case 'deleteDosen':
            $ID_DOSEN=$_GET['id'];
            echo "$ID_DOSEN";
            $tatausaha->delete_dosen($ID_DOSEN,$mysqli);
            break;

        case 'deleteMahasiswa':
            $ID_MHS=$_GET['id'];
            $tatausaha->delete_mahasiswa($ID_MHS,$mysqli);
            break;

        case 'detailDosen':
            $id=$_GET['id'];
            // include "detailDosen.php?id=$ID_DOSEN";

            $query = "SELECT * FROM `dosen` WHERE `ID_DOSEN`='$id';";
                
            $tatausaha->konek_db();
            $result = mysqli_query($mysqli,$query);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- <form action="tatausaha.php?a=updateDosen" method="POST"  enctype="multipart/form-data"> -->
                    <div class="col-md- image-profile">
                        <img src="../images/dosen/<?php echo $row['IMAGE_PATH'];?>" width="300px">
                    </div>
                    <div style="padding-bottom: 10px" class="col-md-12">
                        <div class="col-md-2" style="padding-top: 10px;">Nama</div>
                        <div class="col-md-10"><?php echo $row['NAMA_DOSEN'];?></div>
                    </div>
                    <div style="padding-bottom: 10px" class="col-md-12">
                        <div class="col-md-2" style="padding-top: 10px;">Username</div>
                        <div class="col-md-10"><?php echo $row['USERNAME'];?></div>
                    </div>
                    <div style="padding-bottom: 10px" class="col-md-12">
                        <div class="col-md-2" style="padding-top: 10px;">Password</div>
                        <div class="col-md-10"><?php echo $row['PASSWORD'];?></div>
                    </div>
                    <div style="padding-bottom: 10px" class="col-md-12">
                        <div class="col-md-2" style="padding-top: 10px;">E-mail</div>
                        <div class="col-md-10"><?php echo $row['EMAIL'];?></div>
                    </div>
                <!-- </form> -->
            


                <?php
            }

            break;

        case 'detailMahasiswa':
            $id=$_GET['id'];
            // include "detailMahasiswa.php?id=$ID_MHS";

            $query = "SELECT * FROM `mahasiswa` WHERE `ID_MHS`='$id';";
                
            $tatausaha->konek_db();
            $result = mysqli_query($mysqli,$query);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- <form action="tatausaha.php?a=updateMahasiswa" method="POST"  enctype="multipart/form-data"> -->
            <div class="col-md- image-profile">
                <img src="../images/mahasiswa/<?php echo $row['IMAGE_PATH'];?>" width="300px">
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Nama</div>
                <div class="col-md-10"><?php echo $row['NAMA_MHS'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Username</div>
                <div class="col-md-10"><?php echo $row['USERNAME'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Password</div>
                <div class="col-md-10"><?php echo $row['PASSWORD'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Kelas</div>
                <div class="col-md-10"><?php echo $row['ID_KELAS'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Tempat Lahir</div>
                <div class="col-md-10"><?php echo $row['TEMPAT_LAHIR'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Tanggal Lahir</div>
                <div class="col-md-10"><?php echo $row['TANGGAL_LAHIR'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Asal Sekolah </div>
                <div class="col-md-10"><?php echo $row['ASAL_SEKOLAH'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Angkatan</div>
                <div class="col-md-10"><?php echo $row['ANGKATAN'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Jurusan</div>
                <div class="col-md-10"><?php echo $row['JURUSAN'];?></div>
            </div>
            <div style="padding-bottom: 10px" class="col-md-12">
                <div class="col-md-2" style="padding-top: 10px;">Prodi</div>
                <div class="col-md-10"><?php echo $row['PRODI'];?></div>
            </div>
                <!-- </form> -->
            


                <?php
            }
            
            break;

        
    }

?>

