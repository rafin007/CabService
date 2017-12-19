<?php  require_once (realpath(dirname(__FILE__)."/data_access.php")); ?>

<?php

	function createCustomerDB($customer){

	}

	function deleteCustomerDB($id){

	}

	function updateCustomerDB($id){

	}

	function getAllCustomerDB(){
		$sql = "SELECT * FROM customer";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $result;
	}

	function getCustomerByIdDB($id){
		$sql = "SELECT * FROM customer WHERE id = $id";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		return $person;
	}

	function getCustomerByNameDB($name){
		$sql = "SELECT * FROM customer WHERE name LIKE '$name%'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getCustomerByEmailDB($email){
		$sql = "SELECT * FROM customer WHERE email LIKE '$email%'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getCustomerByJoinDateDB($date){
		$sql = "SELECT * FROM customer WHERE join_date LIKE '$date%'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getCustomerByReviewDB($review){
		$sql = "SELECT * FROM customer WHERE CAST(review AS DECIMAL) = CAST('$review' AS DECIMAL)";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function getCustomerByUsernameDB($username){
		$sql = "SELECT * FROM customer WHERE username = '$username'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $person;
	}

	function getCustomerByUsernamePersonDB($username){
		$sql = "SELECT * FROM customer WHERE username LIKE '$username%'";
		$result = executeSQL($sql);
		$person = mysqli_fetch_assoc($result);
		//var_dump($person);
		return $result;
	}

	function checkCustomerLoginDB($username, $password){
		$sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
		$status = false;
		$result = executeSQL($sql);
		//$row = mysqli_fetch_object($result);
		if($result->num_rows){
			$status = true;
		}
		return $status;
	}

?>
