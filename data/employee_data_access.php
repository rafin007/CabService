<?php require_once "data_access.php"; ?>

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
		$sql = "SELECT * FROM employee WHERE id = $id";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function getEmployeeByUsernameDB($username){
		$sql = "SELECT * FROM employee WHERE username = $username";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function employeeLoginDB($username, $password){
		$sql = "SELECT * FROM employee WHERE username = $username AND password = $password";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

?>
