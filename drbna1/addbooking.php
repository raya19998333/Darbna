<?php
session_start();
include 'dbconnect.php';
require('tcpdf/tcpdf.php');

if(isset($_POST['Book'])){

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

    if(empty($name) || empty($passenger_id) || empty($Trip_id) || empty($email) || empty($city)|| empty($vichel_number) || empty($phone) || empty($location)|| empty($date) || empty($trip_type)){
      $_SESSION["state"] = 'Sorry, the system was unable to submit information using the information provided. Please try again.';
      header("Location: passengerbook.php");
      exit();
  }


    $check_query = "SELECT * FROM passenger_info WHERE PassengerID = '$passenger_id'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) > 0){

        $sql = "INSERT INTO booking (name, passenger_id,Trip_id,email,city,vichel_number,phone,location,date,trip_type) 
                VALUES ( '$name','$passenger_id','$Trip_id','$email','$city','$vichel_number','$phone','$location','$date','$trip_type')";
        $result = mysqli_query($conn , $sql);

        if($result){
            $last_id =$conn->insert_id;
            $_SESSION["state"]="The ticket has been booked successfully. You will receive a message from the responsible party with details about payment and arrangements for your trip.<br> Your booking ID is :".$last_id;
            header("Location: passengerbook.php");
        }
    } else {
        $_SESSION["state"] = "Sorry, but that is an invalid ID";
        header("Location: passengerbook.php");
        exit();
    }
} else {
    $_SESSION["state"] = "Sorry, Please ensure that you complete all the information required to complete the booking process. May be id in database" . $conn->error;
    header("Location: passengerbook.php");
}
?>

