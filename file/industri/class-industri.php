<?php 
	include('../../user.login.php');
	class Industri extends User {
		var $nama;
		var $identitas;
		var $role;

		function set_data_industri($username, $password, $db){
			$sql = "SELECT NAMA, industri.IDENTITAS, ROLE FROM user INNER JOIN industri ON user.USERNAME = industri.EMAIL WHERE user.USERNAME = '$username' AND user.PASSWORD = '$password'";
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