<?php  require_once (realpath(dirname(__FILE__)."/../data/rides_data_access.php")); ?>
<?php

    //Mandatory
    function createRide($ride){
        return createRideDB($ride);
    }

    function deleteRide($id){
        return deleteRideDB($id);
    }

    function updateRide($id){
        return updateRideDB($id);
    }


    function getRideById($id){
        return getRideByIdDB($id);
    }


    function getAllRide(){
        return getAllRideDB();
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

    function getRideByDriverId($id){
        return getRideByDriverIdDB($id);
    }



    //Driver's completed
    function getRideByCustomerNameDriver($name, $id){
        return getRideByCustomerNameDriverDB($name, $id);
    }

    function getRideByDateDriver($date, $id){
        return getRideByDateDriverDB($date, $id);
    }

    function getRideByPickupDriver($location, $id){
        return getRideByPickupDriverDB($location, $id);
    }

    function getRideByDropDriver($location, $id){
        return getRideByDropDriverDB($location, $id);
    }


    //Pending
    function getAllRidePending(){
        return getAllRidePendingDB();
    }

    function getRideByDatePending($date){
        return getRideByDatePendingDB($date);
    }

    function getRideByPickupPending($location){
        return getRideByPickupPendingDB($location);
    }

    function getRideByDropPending($location){
        return getRideByDropPendingDB($location);
    }

    function getRideByCustomerNamePending($name){
        return getRideByCustomerNamePendingDB($name);
    }

    function getFareByRideId($id){
        return getFareByRideIdDB($id);
    }


    //Queued
    function getQueuedRideByDriverId($id){
        return getQueuedRideByDriverIdDB($id);
    }

    function updateRideToQueued($fareId, $employeeId){
        return updateRideToQueuedDB($fareId, $employeeId);
    }

?>
