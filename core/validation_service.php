<?php require_once "../data/employee_data_access.php"; ?>
<?php require_once "../data/customer_data_access.php"; ?>
<?php require_once "../data/validation_data_access.php"; ?>

<?php

    function checkPerson($username){
        $nameArray = explode("-", $username);
        if(count($nameArray)===2){
            $result = $nameArray[0];
            return $result;
        }
    }

?>
