<?php 
	include('../../user.login.php');
	class Mahasiswa extends User {
		var $nama;
		var $identitas;
		var $role;
		var $nim;

		function set_data_mhs($username, $password, $db){
			$sql = "SELECT NAMA, mahasiswa.NIM, ROLE, NIM FROM user INNER JOIN mahasiswa ON user.USERNAME = mahasiswa.NIM WHERE user.USERNAME = '$username' AND user.PASSWORD = '$password'";
			$result = $db->query($sql);

			$user = $result->fetch_assoc();
			$this->nama = $user['NAMA'];
			$this->identitas = $user['NIM'];
			$this->role = $user['ROLE'];
			$this->nim = $user['NIM'];
		}

		function get_nama(){
			return $this->nama;
		}

		function get_identitas(){
			return $this->identitas;
		}

		function get_role(){
			return $this->role;
		}

		function get_nim(){
			return $this->nim;
		}
	}
 ?>