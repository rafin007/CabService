<?php require_once(realpath(dirname(__FILE__) . '/../data/employee_data_access.php')); ?>

<?php

    function createEmployee($name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender){
        return createEmployeeDB($name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender);
    }

    function deleteEmployee($id){
        return deleteEmployeeDB($id);
    }

    function updateEmployee($id, $name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender){
        return updateEmployeeDB($id, $name, $fullname, $username, $password, $email, $phone, $salary, $type, $gender);
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

    function getEmployeeByUsernamePerson($username){
		return getEmployeeByUsernamePersonDB($username);
	}

    function getEmployeeByName($name){
		return getEmployeeByNameDB($name);
	}

    function getEmployeeByEmail($email){
		return getEmployeeByEmailDB($email);
	}

    function getEmployeeBySalary($salary){
		return getEmployeeBySalaryDB($salary);
	}

    function getEmployeeByType($type){
		return getEmployeeByTypeDB($type);
	}

    function checkEmployeeLogin($username, $password){
        return checkEmployeeLoginDB($username, $password);
    }

    function employeeSearch($value, $filter){
        return employeeSearchDB($value, $filter);
    }

    function updateEmployeePassword($password, $id){
        return updateEmployeePasswordDB($password, $id);
    }
?>
