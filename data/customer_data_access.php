<?php require_once "data_access.php"; ?>

<?php

	function createCustomerDB($customer){

	}

	function deleteCustomerDB($id){

	}

	function updateCustomerDB($id){

	}

	function getAllCustomerDB(){

	}

	function getCustomerByIdDB($id){
		$sql = "SELECT * FROM customer WHERE id = $id";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function getCustomerByUsernameDB($username){
		$sql = "SELECT * FROM customer WHERE username = $username";
		$result = executeSQL($sql);
		var_dump($result);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function customerLoginDB($username, $password){
		$sql = "SELECT * FROM customer WHERE username = $username AND password = $password";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

?>
