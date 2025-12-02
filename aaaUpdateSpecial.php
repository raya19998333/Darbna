<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $trip_id=$_POST['trip_id'];
   $passenger_number=$_POST["passenger_number"];
   $location=$_POST["location"];
   $vehicle_type=$_POST["vehicle_type"];
   $transportation_place=$_POST["transportation_place"];
   $time=$_POST["time"];
   $date=$_POST["date"];
   $day=$_POST["day"];
   $price=$_POST["price"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE special_trip SET   passenger_number='$passenger_number',
     location='$location',
     vehicle_type='$vehicle_type', 
     transportation_place='$Email',
     time='$time',
     date='$date',
     day='$day',
     price='$price'
     WHERE trip_id=$trip_id";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION['state'] = "Update successful.";
      
        header("Location: ListofTrips.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateSpecialTrip.php");
        exit(); // Exit after redirecting
    }
}   
?>
