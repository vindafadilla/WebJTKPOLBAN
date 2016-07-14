<?php 
$id_lowongan = date('ymdgis');
$posisi_lowongan = $_POST['posisilowongan'];
$gaji_lowongan = $_POST['gajilowongan'];
$tempat_lowongan = $_POST['tempatlowongan'];
$isi_lowongan = $_POST['isilowongan'];
$tgl_mulai_lowongan = $_POST['tglmulailowongan'];
$tgl_akhir_lowongan = $_POST['tglakhirlowongan'];

$fileName = $_FILES['fotolowongan']['name']; //get the file name
$fileSize = $_FILES['fotolowongan']['size']; //get the size
$fileError = $_FILES['fotolowongan']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
$move = move_uploaded_file($_FILES['fotolowongan']['tmp_name'], '../semua/image/'.$fileName); //save image to the folder
}

$result = mysql_query("INSERT INTO `lowongan` (`idlowongan`, `posisilowongan`, `gajilowongan`, `tempatlowongan`, `isilowongan`, `tglmulailowongan`, `tglakhirlowongan`, `fotolowongan`) VALUES ('$id_lowongan','$posisi_lowongan','$gaji_lowongan', '$tempat_lowongan', '$isi_lowongan', '$tgl_mulai_lowongan' ,'$tgl_akhir_lowongan', '../semua/image/$fileName')");

if($result){
	echo "<meta http-equiv='refresh' content='0; url=industri.php'>";
}
else {
	echo "Gagal entry";
	echo "<br>'$id_lowongan','$jenis_lowongan','$judul_lowongan', '$isi_lowongan', '$tgl_mulai_lowongan' ,'$tgl_akhir_lowongan', '../semua/image/$fileName'";
} ?>