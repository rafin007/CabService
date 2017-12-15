<?php require_once "../data/rides_data_access.php" ?>
<?php

    function createRide($ride){
        return createRideDB($ride);
    }

    function deleteRide($id){
        return deleteRideDB($id);
    }

    function updateRide($id){
        return updateRideDB($id);
    }

    function getAllRide(){
        return getAllRideDB();
    }

    function getRideById($id){
        return getRideByIdDB($id);
    }

?>
