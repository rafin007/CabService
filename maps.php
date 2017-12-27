<?php
if(isset($_GET['pickup']) && isset($_GET['dropoff'])) {
    print_r(file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=". urlencode($_GET['pickup']) ."&destinations=". urlencode($_GET['dropoff']) ."&key=AIzaSyDgyWJzC2OPDMmnGIfQcAU2ICHAL-hTjFQ"));
    //print_r(file_get_contents("https://maps.googleapis.com/maps/api/directions/json?origin=".$_GET['pickup']."&destination=".$_GET['dropoff']."&key=AIzaSyDgyWJzC2OPDMmnGIfQcAU2ICHAL-hTjFQ"));

}
?>
