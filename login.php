<?php 
	session_start();
	include('user.login.php');
	$user = new User();
	$user->konek_db();
	if($user->login($_POST['user'], $_POST['pass'], $mysqli)){
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['pass'] = $_POST['pass'];
		$a = isset($_SESSION['role']) ? $_SESSION['role'] : null;
		switch ($a) {
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
	else{
		echo "<script>alert('username atau password tidak terdaftar'); location.href = 'index.php' ; </script>";
		// header("location:index.php");		
	}
 ?>