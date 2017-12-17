<?php require_once (realpath(dirname(__FILE__) ."/data_access.php")); ?>

<?php

	function createEmployeeDB($name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender){
		$date = date('Y-m-d');
		$sql = "INSERT INTO employee (id, name, employee_full_name, username, password, email, phone, salary, type, gender, join_date, rating) VALUES (null, '$name', '$fullname', '$username', '$password', '$email', '$phone', '$salary', '$type', '$gender', '$date', 0)";
		$result = executeSQL($sql);
		return $result;
	}

	function deleteEmployeeDB($id){

	}

	function updateEmployeeDB($id){

	}

	function getAllEmployeeDB(){
		$sql = "SELECT * FROM employee";
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

	function getEmployeeByNameDB($name){
		$sql = "SELECT * FROM employee WHERE name = '$name'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getEmployeeByEmailDB($email){
		$sql = "SELECT * FROM employee WHERE email = '$email'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getEmployeeByTypeDB($type){
		$sql = "SELECT * FROM employee WHERE type = '$type'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getEmployeeBySalaryDB($salary){
		$sql = "SELECT * FROM employee WHERE CAST(salary AS DECIMAL) = CAST('$salary' AS DECIMAL)";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getEmployeeByUsernameDB($username){
		$sql = "SELECT * FROM employee WHERE username = '$username'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $person;
	}

	function getEmployeeByUsernamePersonDB($username){
		$sql = "SELECT * FROM employee WHERE username = '$username'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
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

	function employeeSearchDB($value, $filter){
		$sql = "SELECT * FROM employee WHERE ".$filter." = '$value'";
		$result = executeSQL($sql);
		while(($row = mysqli_fetch_assoc($result))!=null){
			$person[] = $row;
		}
		return $person;
	}

?>
