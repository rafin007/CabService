<?php

    function executeSQL($sql){

        $conn = mysqli_connect("localhost", "root", "", "cab_service", 3306);
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        return $result;
    }
?>
