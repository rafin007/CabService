<?php require_once (realpath(dirname(__FILE__) ."/data_access.php")); ?>

<?php

	function createEmployeeDB($employee){

	}

	function deleteEmployeeDB($id){

	}

	function updateEmployeeDB($id){

	}

	function getAllEmployeeDB(){

	}

	function getEmployeeByIdDB($id){
		$sql = "SELECT * FROM employee WHERE id = '$id'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function getEmployeeByUsernameDB($username){
		$sql = "SELECT * FROM employee WHERE username = '$username'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function checkEmployeeLoginDB($username, $password){
		$status = false;
		$sql = "SELECT * FROM employee WHERE username = '$username' AND password = '$password'";
		$result = executeSQL($sql);
		//$row = mysqli_fetch_array($result);
		if($result->num_rows){
			$status = true;
		}
		return $status;
	}

?>
