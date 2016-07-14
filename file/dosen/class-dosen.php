<?php 
	include('../../user.login.php');
	class Dosen extends User {
		var $nama;
		var $identitas;
		var $role;

		function set_data_dosen($username, $password, $db){
			$sql = "SELECT NAMA, dosen.NIP, ROLE FROM user INNER JOIN dosen ON user.USERNAME = dosen.NIP WHERE user.USERNAME = '$username' AND user.PASSWORD = '$password'";
			$result = $db->query($sql);

			$user = $result->fetch_assoc();
			$this->nama = $user['NAMA'];
			$this->identitas = $user['NIP'];
			$this->role = $user['ROLE'];
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
	}
 ?>