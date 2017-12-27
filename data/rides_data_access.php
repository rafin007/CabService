<?php  require_once (realpath(dirname(__FILE__)."/data_access.php")); ?>

<?php

	//Mandatory
	function createRideDB($id, $type, $jtype, $paddress, $daddress, $date, $time, $fare, $distance){
		$sql = "INSERT INTO rides (rides_id, customer_id, employee_id, journey_type, pickup_point, drop_point, cab_type, date, time, distance, fare, status) VALUES (null, '$id', null, '$jtype', '$paddress', '$daddress', '$type', '$date', '$time', '$distance', '$fare', 'Pending')";
		$result = executeSQL($sql);
		return $result;
	}

	function deleteRideDB($id){
		$sql = "DELETE FROM rides WHERE rides_id = '$id'";
		$result = executeSQL($sql);
		return $result;
	}

	function updateRideDB($id){
		$sql = "UPDATE rides SET status = 'Completed' WHERE rides_id = '$id'";
		$result = executeSQL($sql);
		return $result;
	}


	function getRideByIdDB($id){
		$sql = "SELECT rides.*, customer.*, employee.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE rides_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	function getAllRideDB(){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerIdFullDB($id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE customer.id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerNameDB($name){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE customer.name LIKE '%$name%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDriverNameDB($name){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.name LIKE '%$name%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDateDB($date){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE date LIKE '%$date%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupDB($location){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE pickup_point LIKE '%$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropDB($location){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE drop_point LIKE '%$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}



	//customer search
	function getRideByDriverNameCustomerDB($name, $id){
		$sql = "SELECT rides.*, customer.*, employee.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.name LIKE '%$name%' AND customer_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDateCustomerDB($date, $id){
		$sql = "SELECT rides.*, customer.*, employee.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE date LIKE '%$date%' AND customer.id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupCustomerDB($location, $id){
		$sql = "SELECT rides.*, customer.*, employee.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE pickup_point LIKE '%$location%' AND customer.id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropCustomerDB($location, $id){
		$sql = "SELECT rides.*, customer.*, employee.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE drop_point LIKE '%$location%' AND customer.id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}



	//Driver's completed
	function getRideByDriverIdDB($id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerNameDriverDB($name, $id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND customer.customer_full_name LIKE '%$name%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDateDriverDB($date, $id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND date LIKE '%$date%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupDriverDB($location, $id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND pickup_point LIKE '%$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropDriverDB($location, $id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE employee.id = '$id' AND status = 'Completed' AND drop_point LIKE '%$location%'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}



	//Pending rides
	function getAllRidePendingDB(){
		$sql = "SELECT rides.*, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByCustomerNamePendingDB($name){
		$sql = "SELECT rides.*, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE customer.customer_full_name LIKE '%$name%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDatePendingDB($date){
		$sql = "SELECT rides.*, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE date LIKE '%$date%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByPickupPendingDB($location){
		$sql = "SELECT rides.*, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE pickup_point LIKE '%$location%' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getRideByDropPendingDB($location){
		$sql = "SELECT rides.*, customer.customer_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE drop_point LIKE '%$location%' AND status = 'Pending'";
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


	//<--------------------Insights--------------------->
	//Fares
	function getRideTodayDB($date){
		$sql = "SELECT * FROM rides WHERE date = '$date' AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}
	function getRideWeekDB($sevenDays, $currentDate){
		$sql = "SELECT * FROM rides WHERE (date BETWEEN '$sevenDays' AND '$currentDate') AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}
	function getRideMonthDB($lastMonth, $currentDate){
		$sql = "SELECT * FROM rides WHERE (date BETWEEN '$lastMonth' AND '$currentDate') AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	//Revenue
	function getRevenueTodayDB($date){
		$sql = "SELECT sum(fare) FROM rides WHERE date = '$date' AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}
	function getRevenueSevenDaysDB($sevenDays, $currentDate){
		$sql = "SELECT sum(fare) FROM rides WHERE (date BETWEEN '$sevenDays' AND '$currentDate') AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}
	function getRevenueMonthDB($lastMonth, $currentDate){
		$sql = "SELECT sum(fare) FROM rides WHERE (date BETWEEN '$lastMonth' AND '$currentDate') AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	//Mileage
	function getMileageTodayDB($date){
		$sql = "SELECT sum(distance) FROM rides WHERE date = '$date' AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}
	function getMileageSevenDaysDB($sevenDays, $currentDate){
		$sql = "SELECT sum(distance) FROM rides WHERE (date BETWEEN '$sevenDays' AND '$currentDate') AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}
	function getMileageMonthDB($lastMonth, $currentDate){
		$sql = "SELECT sum(distance) FROM rides WHERE (date BETWEEN '$lastMonth' AND '$currentDate') AND status = 'Completed'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	//other
	function getRideByCustomerIdDB($id){
		$sql = "SELECT rides.*, customer.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE customer_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getAmountByCustomerIdDB($id){
		$sql = "SELECT sum(fare) FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE customer_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	function getRideByEmployeeIdDB($id){
		$sql = "SELECT rides.*, employee.* FROM rides INNER JOIN employee ON rides.employee_id = employee.id WHERE employee_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getAmountByEmployeeIdDB($id){
		$sql = "SELECT sum(fare) FROM rides INNER JOIN employee ON rides.employee_id = employee.id WHERE employee_id = '$id'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	function getCustomerRidePendingDB($id){
		$sql = "SELECT rides.*, customer.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE customer.id = '$id' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}

	function getPendingRideByIdDB($id){
		$sql = "SELECT rides.*, customer.* FROM rides INNER JOIN customer ON rides.customer_id = customer.id WHERE rides_id = '$id' AND status = 'Pending'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $rides;
	}

	function getCustomerQueuedRideDB($id){
		$sql = "SELECT rides.*, customer.customer_full_name, employee.employee_full_name FROM rides INNER JOIN customer ON rides.customer_id = customer.id INNER JOIN employee ON rides.employee_id = employee.id WHERE customer.id = '$id' AND status = 'Queued'";
		$result = executeSQL($sql);
		$rides = mysqli_fetch_assoc($result);
		return $result;
	}
?>
