<?php 
	include('../../user.login.php');
	class Alumni extends User {
		var $nama;
		var $identitas;
		var $role;

		function set_data_alumni($username, $password, $db){
			$sql = "SELECT NAMA, alumni.IDENTITAS, ROLE FROM user INNER JOIN alumni ON user.USERNAME = alumni.NIM WHERE user.USERNAME = '$username' AND user.PASSWORD = '$password'";
			$result = $db->query($sql);

			$user = $result->fetch_assoc();
			$this->nama = $user['NAMA'];
			$this->identitas = $user['IDENTITAS'];
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