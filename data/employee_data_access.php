<?php require_once (realpath(dirname(__FILE__) ."/data_access.php")); ?>

<?php

	function createEmployeeDB($name, $username, $password, $email, $phone, $salary, $type, $gender){
		$date = date('Y-m-d');
		$sql = "INSERT INTO employee (id, name, username, password, email, phone, salary, type, gender, join_date, rating) VALUES (null, '$name', '$username', '$password', '$email', '$phone', '$salary', '$type', '$gender', '$date', 0)";
		$result = executeSQL($sql);
		return $result;
	}

	function deleteEmployeeDB($id){

	}

	function updateEmployeeDB($id){

	}

	function getAllEmployeeDB(){
		$sql = "SELECT id, name, email, phone FROM employee";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $result;
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
