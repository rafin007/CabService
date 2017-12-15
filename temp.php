<?php require_once "../core/employee_service.php"; ?>
<?php require_once "../core/customer_service.php"; ?>
<?php require_once "../core/validation_service.php"; ?>

<?php

    session_start();
    $errorMessage="";
    if($_SERVER[REQUEST_METHOD]=="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!getCustomerByUsername($username) && !getEmployeeByUsername($username)){
            $errorMessage += "<p>Invalid username or password!</p>";
        }

        if(empty($username) || empty($password)){
            $errorMessage += "<p>Username or password cannot be empty</p>";
        }
        else if(!empty($username) && !empty($password)){
            if(checkPerson($username)==="cus"){
                $person = customerLogin($username, $password);
                $_SESSION['id'] = $person['id'];
                echo "<h1>Customer</h1>";
            }
            else if (checkPerson($username)==="emp") {
                $person = employeeLogin($username, $password)
                $_SESSION['id'] = $person['id'];
                echo "<h1>Employee</h1>";
            }
        }
    }
?>
