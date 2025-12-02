<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['Send'])){


    $passenger_number=$_POST["passenger_number"];
    $location=$_POST["location"];
    $vehicle_type=$_POST["vehicle_type"];
    $transportation_place=$_POST["transportation_place"];
    $time=$_POST["time"];
    $date=$_POST["date"];
    $day=$_POST["day"];
    $price=$_POST["price"];
    
 $sql = "INSERT INTO special_trip (passenger_number, location, vehicle_type, transportation_place, time, date, day, price) 
    VALUES ( '$passenger_number', '$location', '$vehicle_type', '$transportation_place', '$time', '$date' , '$day', '$price')";
    $resul=mysqli_query($conn , $sql);

    if($resul){
      $last_id =$conn->insert_id;
      $_SESSION["state"]= 'Thank you for end your special Trip! We are happy to have you as a member of our system. We look forward to providing you with a great experience.Your Trip ID is :'.$last_id;
        header("Location: OwnerTime.php");        
    }
    else{
      $_SESSION["state"]= 'Sorry, the system was unable to send information using the information provided. Please try again . Check '.$conn->error;
      header("Location:OwnerTime.php");
   
    }}
?>