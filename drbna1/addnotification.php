<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['send'])) {
    $PassengerID=$_POST["PassengerID"];
    $Time=$_POST["Time"];
    $NumberVehicle=$_POST["NumberVehicle"];
    $Place=$_POST["Place"];
    $TripID=$_POST["TripID"];
    $BookingID=$_POST["BookingID"];
    $Phone=$_POST["Phone"];

    if(empty($PassengerID) || empty($Time) || empty($NumberVehicle) || empty($Place) || empty($TripID) || empty($BookingID) || empty($Phone)) {
        $_SESSION["state"] = 'Sorry, The notification was not sent. Check ';
        header("Location: ownerNotification.php");
        exit();
    }

    $check_query = "SELECT * FROM passenger_info WHERE PassengerID = '$PassengerID'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) > 0) {
        $sql = "INSERT INTO notification (PassengerID, Time, NumberVehicle, Place, TripID, BookingID, Phone) 
                VALUES ('$PassengerID', '$Time', '$NumberVehicle', '$Place', '$TripID', '$BookingID', '$Phone')";
        $result = mysqli_query($conn, $sql);
    
        if($result) {
            $last_id = $conn->insert_id;
            $_SESSION["state"] = "This notification has been sent.";
            header("Location: ownerNotification.php");
        } else {
            $_SESSION["state"] = "The notification was not sent. Check ".$conn->error;
            header("Location: ownerNotification.php");
        }
    } else {
        $_SESSION["state"] = "Sorry, but that is an invalid ID.";
        header("Location: ownerNotification.php");
        exit();
    }
}
?>
