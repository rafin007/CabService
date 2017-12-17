<?php  require_once (realpath(dirname(__FILE__)."/../data/rides_data_access.php")); ?>
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

    function getRideByCustomerName($name){
        return getRideByCustomerNameDB($name);
    }

    function getRideByDriverName($name){
        return getRideByDriverNameDB($name);
    }

    function getRideByDate($date){
        return getRideByDateDB($date);
    }

    function getRideByPickup($location){
        return getRideByPickupDB($location);
    }

    function getRideByDrop($location){
        return getRideByDropDB($location);
    }

?>
