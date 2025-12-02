<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $notificationID=$_POST['notificationID'];
   $PassengerID=$_POST["PassengerID"];
   $Time=$_POST["Time"];
   $NumberVehicle=$_POST["NumberVehicle"];
   $Place=$_POST["Place"];
   $TripID=$_POST["TripID"];
   $BookingID=$_POST["BookingID"];
   $Phone=$_POST["Phone"];
  

    // Prepare SQL statement with placeholders
    $sql = "UPDATE notification SET PassengerID='$PassengerID',
     Time='$Time',
     NumberVehicle='$NumberVehicle', 
    
      Place='$Place',
      TripID='$TripID',
      BookingID='$BookingID',
      Phone='$Phone' WHERE notificationID=$notificationID";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION["state"] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: adminNotification.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateNotify.php");
        exit(); // Exit after redirecting
    }
}   
?>
