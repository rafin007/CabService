<?php require_once "../data/employee_data_access.php" ?>

<?php

    function createEmployee($employee){
        return createEmployeeDB($employee);
    }

    function deleteEmployee($id){
        return deleteEmployeeDB($id);
    }

    function updateEmployee($id){
        return updateEmployeeDB($id);
    }

    function getAllEmployee(){
        return getAllEmployeeDB();
    }

    function getEmployeeById($id){
        return getEmployeeByIdDB($id);
    }

    function getEmployeeByUsername($username){
		return getEmployeeByUsernameDB($username);
	}

    function employeeLogin($username, $password){
        return employeeLoginDB($username, $password);
    }

?>
