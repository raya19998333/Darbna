<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $trip_id=$_POST['trip_id'];
   $company_id=$_POST["company_id"];
   $station=$_POST["station"];
   $transportation_place=$_POST["transportation_place"];
   $date=$_POST["date"];
   $time=$_POST["time"];
   $day=$_POST["day"];
   $price=$_POST["price"];
   $massage=$_POST["massage"];
   

    // Prepare SQL statement with placeholders
    $sql = "UPDATE common_trips  SET company_id='$company_id',
     station='$station',
     
     transportation_place='$transportation_place',
     date='$date',
     time='$time',
     day='$day',
     price='$price', 
     massage='$massage' WHERE trip_id=$trip_id";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION["state"] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: CommonReports.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateCommon.php");
        exit(); // Exit after redirecting
    }
}   
?>
