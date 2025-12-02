<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $appointments_id=$_POST['appointments_id'];
   $passenger_id = $_POST["passenger_id"];
   $place = $_POST["place"];
   $date = $_POST["date"];
   $time = $_POST["time"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE appointments SET  passenger_id='$passenger_id',
     place='$place',
     date='$date', 
     time='$time'
       WHERE appointments_id=$appointments_id";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION['state'] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: AppoinmentReports.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateAppointment.php");
        exit(); // Exit after redirecting
    }
}   
?>
