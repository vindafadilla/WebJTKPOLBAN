<?php

class User
{	
	function konek_db() 
	{ 

		global $mysqli;
		$mysqli = new mysqli("localhost","root","","login");

		//mengecek jika terjadi gagal koneksi
		if(mysqli_connect_errno()) {
		    echo "Error: Could not connect to database. ";
		    exit;
		}
	} 

	// fungsi untuk mengecek session 
	function cek_session($nama_ses) 
	{ 
		// jika session kosong 
		if(!isset($_SESSION[$nama_ses])) 
		return false; // kembalikan nilai false 
		else
		// jika tidak kosong 
		return true;// kemblikan nilai true 
	} 

	// fungsi untuk login 
	function login($username, $password, $db) 
	{ 
		
		$sql="SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD='$password'";
		$result = $db->query($sql);
		// cek baris yang dikembalikan 
		if(mysqli_num_rows($result) == 0) // kembalikan nilai true 
		return false;
		else {
			$role = mysqli_fetch_array($result);
			$_SESSION['role'] = $role['ROLE'];
			return true;
		}
	} 

	// fungsi untuk membuat password secara acak 
	// digunakan untuk mengirim password pada form lupa password 


	// fungsi untuk logout (menghapus session) 
	function logout($nama_ses) 
	{ 
		// jika session kosong 
		if(!isset($_SESSION[$nama_ses])) 
		return false; // kembalikan false 
		else
		{ 
			// jika tidak kosong hancurkan session tersebut 
			unset($_SESSION[$nama_ses]); 
			session_destroy(); 
			return true;// kembalikan nilai true 
		} 
	}
}
?>