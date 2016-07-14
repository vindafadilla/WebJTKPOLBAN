<?php 
$id_beasiswa = $_POST['idbeasiswa'];
$judul_beasiswa = $_POST['judulbeasiswa'];
$kuota_beasiswa = $_POST['kuotabeasiswa'];
$isi_beasiswa = $_POST['isibeasiswa'];
$tgl_mulai_beasiswa = $_POST['tglmulaibeasiswa'];
$tgl_akhir_beasiswa = $_POST['tglakhirbeasiswa'];

$fileName = $_FILES['filebeasiswa']['name']; //get the file name
$fileSize = $_FILES['filebeasiswa']['size']; //get the size
$fileError = $_FILES['filebeasiswa']['error']; //get the error when upload
if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
$move = move_uploaded_file($_FILES['filebeasiswa']['tmp_name'], '../semua/file/'.$fileName); //save image to the folder
}

$result = mysql_query("INSERT INTO `beasiswa` (`idbeasiswa`, `judulbeasiswa`, `kuotabeasiswa`, `isibeasiswa`, `tglmulaibeasiswa`, `tglakhirbeasiswa`, `filebeasiswa`) VALUES ('$id_beasiswa','$jenis_beasiswa','$judul_beasiswa','$kuota_beasiswa', '$isi_beasiswa', '$tgl_mulai_beasiswa' ,'$tgl_akhir_beasiswa', '../semua/file/$fileName')");

if($result){
	echo "<meta http-equiv='refresh' content='0; url=industri.php'>";
}
else {
	echo "Gagal entry";
	echo "<br>'$id_beasiswa','$judul_beasiswa','$kuota_beasiswa', '$isi_beasiswa', '$tgl_mulai_beasiswa' ,'$tgl_akhir_beasiswa', '../semua/file/$fileName'";
} ?>