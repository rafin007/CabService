<?php require_once (realpath(dirname(__FILE__) ."/data_access.php")); ?>

<?php

	function createEmployeeDB($name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender){
		$date = date('Y-m-d');
		$sql = "INSERT INTO employee (id, name, employee_full_name, username, password, email, phone, salary, type, gender, join_date, rating) VALUES (null, '$name', '$fullname', '$username', '$password', '$email', '$phone', '$salary', '$type', '$gender', '$date', 0)";
		$result = executeSQL($sql);
		return $result;
	}

	function deleteEmployeeDB($id){
		$sql = "DELETE FROM employee WHERE id = '$id'";
		$result = executeSQL($sql);
		return $result;
	}

	function updateEmployeeDB($id, $name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender){
		$sql = "UPDATE employee SET name = '$name', employee_full_name = '$fullname', username = '$username', password = '$password', email = '$email', phone = '$phone', salary = '$salary', type = '$type', gender = '$gender' WHERE id = '$id'";
		$result = executeSQL($sql);
		return $result;
	}

	function getAllEmployeeDB(){
		$sql = "SELECT * FROM employee";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $result;
	}

	function getAllDriverDB(){
		$sql = "SELECT * FROM employee WHERE type = 'Driver'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $result;
	}

	function getAllAdminDB(){
		$sql = "SELECT * FROM employee WHERE type = 'Admin'";
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
		$sql = "SELECT * FROM employee WHERE name LIKE '$name%'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getEmployeeByEmailDB($email){
		$sql = "SELECT * FROM employee WHERE email LIKE '$email%'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getEmployeeByTypeDB($type){
		$sql = "SELECT * FROM employee WHERE type LIKE '$type%'";
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
		$sql = "SELECT * FROM employee WHERE username LIKE '$username%'";
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

	function updateEmployeePasswordDB($password, $id){
		$sql = "UPDATE employee SET password = '$password' WHERE id = '$id'";
		$result = executeSQL($sql);
		return $result;
	}

	function updateEmployeeProfileDB($id, $name, $fullname, $username, $email, $phone, $gender){
		$sql = "UPDATE employee SET name = '$name', employee_full_name = '$fullname', username = '$username', email = '$email', phone = '$phone', gender = '$gender' WHERE id = '$id'";
		$result = executeSQL($sql);
		return $result;
	}

	function uniqueEmployeeUsernameDB($username){
		$sql = "SELECT * FROM employee WHERE username = '$username'";
		$result = executeSQL($sql);
		return $result;
	}
?>
