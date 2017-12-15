<?php require_once "data_access.php" ?>

<?php

    function checkLoginDB($username, $password){
        $status = false;
        $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
        $result = executeSQL($sql);
        $row = mysqli_fetch_array($result);
        if($result->num_rows){
            $status = true;
        }
        //$person = mysqli_fetch_assoc($result);
        //var_dump($row);
        echo $row['name'];
        return $status;
    }

?>
