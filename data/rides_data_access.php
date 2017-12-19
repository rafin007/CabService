<?php  require_once (realpath(dirname(__FILE__)."/data_access.php")); ?>

<?php

	//Mandatory
	function createRideDB($ride){

	}

	function deleteRideDB($id){

	}

	function updateRideDB($id){

	}


	function getRideByIdDB($id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE rides_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		var_dump($rides);
		return $rides;
	}

	function getAllRideDB(){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerNameDB($name){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE customer.name LIKE '$name%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDriverNameDB($name){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.name LIKE '$name%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDateDB($date){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE date LIKE '$date%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupDB($location){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE pickup_point LIKE '$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropDB($location){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE drop_point LIKE '$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}




	//Driver's completed
	function getRideByDriverIdDB($id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerNameDriverDB($name, $id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND customer.customer_full_name LIKE '%$name%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDateDriverDB($date, $id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND date LIKE '%$date%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupDriverDB($location, $id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND pickup_point LIKE '%$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropDriverDB($location, $id){
		$sql = "SELECT rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND drop_point LIKE '%$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}



	//Pending rides
	function getAllRidePendingDB(){
		$sql = "SELECT rides.rides_id, rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerNamePendingDB($name){
		$sql = "SELECT rides.rides_id, rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE customer.customer_full_name LIKE '%$name%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDatePendingDB($date){
		$sql = "SELECT rides.rides_id, rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE date LIKE '%$date%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupPendingDB($location){
		$sql = "SELECT rides.rides_id, rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE pickup_point LIKE '%$location%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropPendingDB($location){
		$sql = "SELECT rides.rides_id, rides.journey_type, rides.pickup_point, rides.drop_point, rides.distance, rides.fare, rides.date, rides.status, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE drop_point LIKE '%$location%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getFareByRideIdDB($id){
		$sql = "SELECT rides.*, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE rides_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	//Queued
	function getQueuedRideByDriverIdDB($id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Queued'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function updateRideToQueuedDB($fareId, $employeeId){
		$sql = "UPDATE rides SET status = 'Queued', employee_id = '$employeeId' WHERE rides_id = '$fareId'";
		$result = executeSQL($sql);
		return $result;
	}

?>
