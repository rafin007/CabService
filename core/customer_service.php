<?php require_once (realpath(dirname(__FILE__) ."/../data/customer_data_access.php")); ?>
<?php

    function createCustomer($customer){
        return createCustomerDB($customer);
    }

    function deleteCustomer($id){
        return deleteCustomerDB($id);
    }

    function updateCustomer($id, $name, $fullName, $username, $password, $email, $phone, $gender){
        return updateCustomerDB($id, $name, $fullName, $username, $password, $email, $phone, $gender);
    }

    function getAllCustomer(){
        return getAllCustomerDB();
    }

    function getCustomerById($id){
        return getCustomerByIdDB($id);
    }

    function getCustomerByUsername($username){
		return getCustomerByUsernameDB($username);
	}

    function getCustomerByUsernamePerson($username){
		return getCustomerByUsernamePersonDB($username);
	}

    function getCustomerByName($name){
		return getCustomerByNameDB($name);
	}

    function getCustomerByEmail($email){
		return getCustomerByEmailDB($email);
	}

    function getCustomerByJoinDate($date){
		return getCustomerByJoinDateDB($date);
	}

    function getCustomerByReview($review){
		return getCustomerByReviewDB($review);
	}

    function checkCustomerLogin($username, $password){
        return checkCustomerLoginDB($username, $password);
    }

?>
