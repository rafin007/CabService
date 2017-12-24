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

    //<-----------------Insights----------------->
    //Fares
    function getRideToday($date){
        return getRideTodayDB($date);
    }
    function getRideWeek($sevenDays, $currentDate){
        return getRideWeekDB($sevenDays, $currentDate);
    }
    function getRideMonth($lastMonth, $currentDate){
        return getRideMonthDB($lastMonth, $currentDate);
    }


    //Revenue
    function getRevenueToday($date){
        return getRevenueTodayDB($date);
    }
    function getRevenueSevenDays($sevenDays, $currentDate){
        return getRevenueSevenDaysDB($sevenDays, $currentDate);
    }
    function getRevenueMonth($lastMonth, $currentDate){
        return getRevenueMonthDB($lastMonth, $currentDate);
    }

    //Mileage
    function getMileageToday($date){
        return getMileageTodayDB($date);
    }
    function getMileageSevenDays($sevenDays, $currentDate){
        return getMileageSevenDaysDB($sevenDays, $currentDate);
    }
    function getMileageMonth($lastMonth, $currentDate){
        return getMileageMonthDB($lastMonth, $currentDate);
    }

?>
