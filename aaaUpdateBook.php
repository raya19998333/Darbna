aaaUpdateBook.php<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $booking_id=$_POST['booking_id'];
    
   $name=$_POST["name"];
   $passenger_id=$_POST["passenger_id"];
   $Trip_id=$_POST["Trip_id"];
   $email=$_POST["email"];
   $city=$_POST["city"];
   $vichel_number=$_POST["vichel_number"];
   $phone=$_POST["phone"];
   $location=$_POST["location"];
   $date=$_POST["date"];
   $trip_type=$_POST["trip_type"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE booking SET  name='$name',
     passenger_id='$passenger_id',
     Trip_id='$Trip_id', 
     email='$email',
     city='$city',
     vichel_number='$vichel_number',
     phone='$phone',
     location='$location', 
     date='$date',
     trip_type='$trip_type' WHERE booking_id=$booking_id";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION['state'] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: BooksReports.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateBook.php");
        exit(); // Exit after redirecting
    }
}   
?>
