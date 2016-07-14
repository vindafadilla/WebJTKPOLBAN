<?php
/********************************************************** 
** Nama File....: class-dosen.php *** 
** Penulis......: Teguh *** 
** Tanggal......: 08-05-2016 *** 
** Penjelasan...: Kumpulan fungsi untuk forum *** 
***********************************************************/ 
// cegah pengaksesan langsung dari browser 
 include('../../../class-general.php');
 //include('../inc/class-berita.php');


class Tatausaha extends UserData {
	// fungsi untuk mengkoneksikan dengan MySQL server 

	var $nama;
	var $kelas;
	var $image_path;
	// select data diri

	


	function insert_prestasi($judulBerita,$isiBerita,$tgl,$foto, $admin, $db){
	$sql = "INSERT INTO `prestasi`(`USERNAME`, `JUDUL_PRESTASI`, `PRESTASI`, `TANGGAL`, `PHOTO`) VALUES ('$admin','$judulBerita', '$isiBerita', '$tgl', '$foto');";
	// $sql ="INSERT INTO `prestasi`(`ID_PRETASI`, `NAMA_PRESTASI`, `TGL_DIRAIH`, `JENIS_PRESTASI`, `WILAYAH`, `PERINGKAT`, `KETERANGAN`, `IMAGE_PATH`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])"
		$result =$db->query($sql);

		if (!$result) {
			echo "gagal query"."INSERT INTO `prestasi`(`USERNAME`, `JUDUL_PRESTASI`, `PRESTASI`, `TANGGAL`, `PHOTO`) VALUES ('$admin','$judulBerita', '$isiBerita', '$tgl', '$foto');";
		} else {
			echo header("location:../admin.php?content=managePrestasi.php");
		}	
	}

	function validasi_status($validasi, $db){
		$sql = "UPDATE `industri` SET `STATUS_VALIDASI`='1' WHERE `ID_INDUSTRI`='$validasi';";
	
		$result =$db->query($sql);

		if (!$result) {
			echo "gagal query"."UPDATE `industri` SET `STATUS_VALIDASI`='1' WHERE `ID_INDUSTRI`='$validasi';";
		} else {
			echo "berhasil";
		}	
	}
	
	function edit_prestasi($idPrestasi,$judulPrestasi,$isiPrestasi,$tgl,$foto, $admin, $db){
		$sql = "UPDATE `prestasi` SET `USERNAME`='$admin',`JUDUL_PRESTASI`='$judulPrestasi',`PRESTASI`='$isiPrestasi',`TANGGAL`='$tgl',`PHOTO`='$foto' WHERE `ID_PRESTASI`='$idPrestasi';";
		$result =$db->query($sql);

		if (!$result) {
			echo "gagal query"."UPDATE `prestasi` SET `USERNAME`='$admin',`JUDUL_PRESTASI`='$judulPrestasi',`PRESTASI`='$isiPrestasi',`TANGGAL`='$tgl',`PHOTO`='$foto' WHERE `ID_PRESTASI`='$idPrestasi';";
		} else {
			header("location:../admin.php?content=managePrestasi.php");
		}
	}

	function delete_prestasi($ID_PRESTASI,$db){
		$sql = "DELETE FROM `prestasi` WHERE `ID_PRESTASI`='$ID_PRESTASI';";
		
        $result = $db->query($sql);
        if($result)header("location:../admin.php?content=managePrestasi.php");
        else echo "DELETE FROM `prestasi` WHERE `ID_PRESTASI`='$ID_PRESTASI';";
	}

	function insert_berita($judulBerita,$isiBerita,$tgl,$foto, $admin, $db){
		$sql = "INSERT INTO `berita`(`USERNAME`, `JUDUL_BERITA`, `BERITA`, `TANGGAL`, `PHOTO`) VALUES ('$admin','$judulBerita', '$isiBerita', '$tgl', '$foto');";
		$result =$db->query($sql);

		if (!$result) {
			echo "gagal query"."INSERT INTO `berita`(`USERNAME`, `JUDUL_BERITA`, `BERITA`, `TANGGAL`, `PHOTO`) VALUES ('$admin','$judulBerita', '$isiBerita', '$tgl', '$foto');";
		} else {
			echo header("location:../admin.php?content=manageBerita.php");
		}

	}

	function edit_berita($idBerita,$judulBerita,$isiBerita,$tgl,$foto, $admin, $db){
		$sql = "UPDATE `berita` SET `USERNAME`='$admin',`JUDUL_BERITA`='$judulBerita',`BERITA`='$isiBerita',`TANGGAL`='$tgl',`PHOTO`='$foto' WHERE `ID_BERITA`='$idBerita';";
		$result =$db->query($sql);

		if (!$result) {
			echo "gagal query"."INSERT INTO `berita`(`USERNAME`, `JUDUL_BERITA`, `BERITA`, `TANGGAL`, `PHOTO`) VALUES ('$admin','$judulBerita', '$isiBerita', '$tgl', '$foto');";
		} else {
			echo header("location:../admin.php?content=manageBerita.php");
		}
	}

	function delete_berita($ID_BERITA,$db){
		
		$sql = "DELETE FROM `berita` WHERE `ID_BERITA`='$ID_BERITA';";
		
        $result = $db->query($sql);
        if($result) header("location:../admin.php?content=manageBerita.php");
        else echo "DELETE FROM `berita` WHERE `ID_BERITA`='$ID_BERITA';";
	}

	function edit_datadiri($IMAGE_PATH, $NAMA_TU,$USERNAME,$PASSWORD,$db){
		$ID_TU=$USERNAME;
		$sql = "UPDATE `tatausaha` SET `NAMA_TU`='$NAMA_TU',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD',`IMAGE_PATH`='$IMAGE_PATH' WHERE `ID_TU`='$ID_TU';";
		
        $result = $db->query($sql);
        if($result) echo " Data berhasil dimasukkan ke database";
        else echo "UPDATE `tatausaha` SET `NAMA_TU`='$NAMA_TU',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD',`IMAGE_PATH`='$IMAGE_PATH' WHERE `ID_TU`='$ID_TU';";
	}

	function insert_absensidosen($ID_DOSEN,$JUMLAH_HADIR,$JUMLAH_ALFA, $db){
		
		$sql = "INSERT INTO `kehadiran_dosen`(`ID_DOSEN`, `JUMLAH_HADIR`, `JUMLAH_ALFA`) VALUES ('$ID_DOSEN','$JUMLAH_HADIR','$JUMLAH_ALFA');";
		
        $result = $db->query($sql);
        if($result) header("location:../admin.php?content=manageKehadiranDosen.php");
        else echo "INSERT INTO `kehadiran_dosen`(`ID_DOSEN`, `JUMLAH_HADIR`, `JUMLAH_ALFA`) VALUES ('$ID_DOSEN','$JUMLAH_HADIR','$JUMLAH_ALFA');";
	}

	function insert_absensimahasiswa($ID_MHS,$SEMESTER,$SAKIT,$IZIN,$ALFA, $db){

		$sql = "INSERT INTO `kehadiran_mhs`(`ID_MHS`, `SEMESTER`, `SAKIT`, `IZIN`, `ALFA`) VALUES ('$ID_MHS','$SEMESTER','$SAKIT','$IZIN','$ALFA');";
		
        $result = $db->query($sql);
        if($result) header("location:../admin.php?content=manageKehadiranMahasiswa.php");
        else echo "INSERT INTO `kehadiran_mhs`(`ID_MHS`, `SEMESTER`, `SAKIT`, `IZIN`, `ALFA`) VALUES ('$ID_MHS','$SEMESTER','$SAKIT','$IZIN','$ALFA');";

	}

	function edit_absensimahasiswa($ID_KEHADIRAN_MHS,$ID_BUKU_BESAR, $ID_MHS,$ID_SEMESTER,$SAKIT,$IZIN_,$ALFA, $db){
		$sql = "UPDATE `kehadiran_mhs` SET `ID_BUKU_BESAR`='$ID_BUKU_BESAR',`ID_MHS`='$ID_MHS',`ID_SEMESTER`='$ID_SEMESTER',`SAKIT`='$SAKIT',`IZIN_`='$IZIN_',`ALFA`='$ALFA' WHERE `ID_KEHADIRAN_MHS`='$ID_KEHADIRAN_MHS';";
		
        $result = $db->query($sql);
        if($result) echo " Data berhasil dimasukkan ke database"."UPDATE `kehadiran_mhs` SET `ID_BUKU_BESAR`='$ID_BUKU_BESAR',`ID_MHS`='$ID_MHS',`ID_SEMESTER`='$ID_SEMESTER',`SAKIT`='$SAKIT',`IZIN_`='$IZIN_',`ALFA`='$ALFA' WHERE `ID_KEHADIRAN_MHS`='$ID_KEHADIRAN_MHS';";
        else echo "UPDATE `kehadiran_mhs` SET `ID_BUKU_BESAR`='$ID_BUKU_BESAR',`ID_MHS`='$ID_MHS',`ID_SEMESTER`='$ID_SEMESTER',`SAKIT`='$SAKIT',`IZIN_`='$IZIN_',`ALFA`='$ALFA' WHERE `ID_KEHADIRAN_MHS`='$ID_KEHADIRAN_MHS';";
	}

	function delete_absensimahasiswa($ID_KEHADIRAN_MHS,$db){
		$sql = "DELETE FROM `kehadiran_mhs` WHERE `ID_KEHADIRAN_MHS`='$ID_KEHADIRAN_MHS';";
		$result = $db->query($sql);
        if($result) echo " Data berhasil dihapus ke database";
        else echo "DELETE FROM `mahasiswa` WHERE `ID_KEHADIRAN_MHS`='$ID_KEHADIRAN_MHS';";
	}

	function registrasi_dosen($IMAGE_PATH, $NAMA_DOSEN,$USERNAME,$PASSWORD,$EMAIL, $db){
		
		$sql = "INSERT INTO `dosen`(`ID_DOSEN`, `NAMA_DOSEN`, `USERNAME`, `PASSWORD`, `EMAIL`, `IMAGE_PATH`) VALUES ('$USERNAME','$NAMA_DOSEN','$USERNAME','$PASSWORD','$EMAIL','$IMAGE_PATH');";
		
        $result = $db->query($sql);
        if($result) header("location:admin.php?content=manageKehadiranDosen.php");
        else echo "INSERT INTO `dosen`(`ID_DOSEN`, `NAMA_DOSEN`, `USERNAME`, `PASSWORD`, `EMAIL`, `IMAGE_PATH`) VALUES ('$USERNAME','$NAMA_DOSEN','$USERNAME','$PASSWORD','$EMAIL','$IMAGE_PATH');";
        //header("location:dosen.php?a=view_berita");
	}

	function registrasi_mahasiswa($IMAGE_PATH, $NAMA_MHS,$USERNAME,$PASSWORD,$KELAS,$TEMPAT_LAHIR,$TANGGAL_LAHIR,$NOTELP,$ANGKATAN,$JENIS_KELAMIN,$ALAMAT, $db){
		$sql = "INSERT INTO `mhs`(`ID_MHS`, `USERNAME`, `NAMA_MHS`, `KELAS`, `ANGKATAN`, `TEMPAT_LAHIR_MHS`, `TANGGAL_LAHIR_MHS`, `JENIS_KELAMIN`, `ALAMAT_MHS`, `NO_TELP_MHS`, `PHOTO`) VALUES ('$USERNAME','$USERNAME','$NAMA_MHS','$KELAS','$ANGKATAN','$TEMPAT_LAHIR','$TANGGAL_LAHIR','$JENIS_KELAMIN','$ALAMAT','$NOTELP','$IMAGE_PATH');";
		
        $result = $db->query($sql);
        if($result) header("location:admin.php?content=manageKehadiranMahasiswa.php");
        else echo "INSERT INTO `mhs`(`ID_MHS`, `USERNAME`, `NAMA_MHS`, `KELAS`, `ANGKATAN`, `TEMPAT_LAHIR_MHS`, `TANGGAL_LAHIR_MHS`, `JENIS_KELAMIN`, `ALAMAT_MHS`, `NO_TELP_MHS`, `PHOTO`) VALUES ('$USERNAME','$USERNAME','$NAMA_MHS','$KELAS','$ANGKATAN','$TEMPAT_LAHIR','$TANGGAL_LAHIR','$JENIS_KELAMIN','$ALAMAT','$NOTELP','$IMAGE_PATH');";
	}

	function edit_dosen($ID_DOSEN, $IMAGE_PATH, $NAMA_DOSEN,$USERNAME,$PASSWORD,$EMAIL, $db){
		$sql = "UPDATE `dosen` SET `NAMA_DOSEN`='$NAMA_DOSEN',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD', `EMAIL`='$EMAIL',`IMAGE_PATH`='$IMAGE_PATH' WHERE `ID_DOSEN`='$ID_DOSEN';";
		
        $result = $db->query($sql);
        if($result) echo " Data berhasil dimasukkan ke database";
        else echo "UPDATE `dosen` SET `NAMA_DOSEN`='$NAMA_DOSEN',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD', `EMAIL`='$EMAIL',`IMAGE_PATH`='$IMAGE_PATH' WHERE `ID_DOSEN`='$ID_DOSEN';";
	}

	function edit_mahasiswa($ID_MHS,$IMAGE_PATH, $NAMA_MHS,$USERNAME,$PASSWORD,$ID_KELAS,$TEMPAT_LAHIR,$TANGGAL_LAHIR,$ASAL_SEKOLAH,$ANGKATAN,$JURUSAN,$PRODI, $db){
		echo "masuk";
		$sql = "UPDATE `mahasiswa` SET `ID_KELAS`='$ID_KELAS',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD',`NAMA_MHS`='$NAMA_MHS',`TANGGAL_LAHIR`='$TANGGAL_LAHIR',`TEMPAT_LAHIR`='$TEMPAT_LAHIR',`ASAL_SEKOLAH`='$ASAL_SEKOLAH',`IMAGE_PATH`='$IMAGE_PATH',`ANGKATAN`='$ANGKATAN,',`JURUSAN`='$JURUSAN',`PRODI`='$PRODI' WHERE `ID_MHS`='$ID_MHS';";
		
        $result = $db->query($sql);
        if($result) echo " Data berhasil dimasukkan ke database"."UPDATE `mahasiswa` SET `ID_KELAS`='$ID_KELAS',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD',`NAMA_MHS`='$NAMA_MHS',`TANGGAL_LAHIR`='$TANGGAL_LAHIR',`TEMPAT_LAHIR`='$TEMPAT_LAHIR',`ASAL_SEKOLAH`='$ASAL_SEKOLAH',`IMAGE_PATH`='$IMAGE_PATH',`ANGKATAN`='$ANGKATAN,',`JURUSAN`='$JURUSAN',`PRODI`='$PRODI' WHERE `ID_MHS`='$ID_MHS';";
        else echo "UPDATE `mahasiswa` SET `ID_KELAS`='$ID_KELAS',`USERNAME`='$USERNAME',`PASSWORD`='$PASSWORD',`NAMA_MHS`='$NAMA_MHS',`TANGGAL_LAHIR`='$TANGGAL_LAHIR',`TEMPAT_LAHIR`='$TEMPAT_LAHIR',`ASAL_SEKOLAH`='$ASAL_SEKOLAH',`IMAGE_PATH`='$IMAGE_PATH',`ANGKATAN`='$ANGKATAN,',`JURUSAN`='$JURUSAN',`PRODI`='$PRODI' WHERE `ID_MHS`='$ID_MHS';";
	}

	function delete_dosen($ID_DOSEN,$db){
		$sql = "DELETE FROM `dosen` WHERE `ID_DOSEN`='$ID_DOSEN';";
		
        $result = $db->query($sql);
        if($result) echo " Data berhasil dihapus ke database";
        else echo "DELETE FROM `dosen` WHERE `ID_DOSEN`='$ID_DOSEN';";
	}

	function delete_mahasiswa($ID_MHS,$db){
		$sql = "DELETE FROM `mahasiswa` WHERE `ID_MHS`='$ID_MHS';";
		$result = $db->query($sql);
        if($result) echo " Data berhasil dihapus ke database";
        else echo "DELETE FROM `mahasiswa` WHERE `ID_MHS`='$ID_MHS';";
	}

}

?> 