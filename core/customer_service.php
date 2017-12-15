<?php require_once "../data/customer_data_access.php" ?>
<?php

    function createCustomer($customer){
        return createCustomerDB($customer);
    }

    function deleteCustomer($id){
        return deleteCustomerDB($id);
    }

    function updateCustomer($id){
        return updateCustomerDB($id);
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

    function customerLogin($username, $password){
        return customerLoginDB($username, $password);
    }

?>
