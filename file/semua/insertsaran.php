<?php 
$id_saran = $_POST['idsaran'];
$perihal = $_POST['perihal'];
$saran = $_POST['saran'];

// $fileName = $_FILES['fotobeasiswa']['name']; //get the file name
// $fileSize = $_FILES['fotobeasiswa']['size']; //get the size
// $fileError = $_FILES['fotobeasiswa']['error']; //get the error when upload
// if($fileSize > 0 || $fileError == 0){ //check if the file is corrupt or error
// $move = move_uploaded_file($_FILES['fotobeasiswa']['tmp_name'], '../industri/image/'.$fileName); //save image to the folder
// }

$result = mysql_query("INSERT INTO `saran` (`idsaran`, `perihal`, `saran`) VALUES ('$id_saran','$perihal','$saran')");

if($result){
	echo "<meta http-equiv='refresh' content='0; url=industri.php'>";
}
else {
	echo "Gagal entry";
	echo "<br>'$id_saran','$perihal','$saran'";
} ?>