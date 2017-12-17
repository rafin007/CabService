<?php  require_once (realpath(dirname(__FILE__)."/data_access.php")); ?>

<?php

	function createRideDB($ride){

	}

	function deleteRideDB($id){

	}

	function updateRideDB($id){

	}

	function getAllRideDB(){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByIdDB($id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE rides_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	function getRideByCustomerNameDB($name){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE customer.name = '$name'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDriverNameDB($name){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.name = '$name'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDateDB($date){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE date = '$date'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupDB($location){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE pickup_point = '$location'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropDB($location){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE drop_point = '$location'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

?>
