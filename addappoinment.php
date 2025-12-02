<?php
session_start();
include 'dbconnect.php';

if(isset($_POST["submit"])){

    $passenger_id = $_POST["passenger_id"];
    $from = $_POST["from"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $to = $_POST["to"];

    if(empty($passenger_id) || empty($from) || empty($date) || empty($time) || empty($to)){
        $_SESSION["state"] = 'Sorry, the system was unable to submit information using the information provided. Please try again.';
        header("Location: passengerappoiment.php");
        exit();
    }

    $check_query = "SELECT * FROM passenger_info WHERE PassengerID = '$passenger_id'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) >0){

    // Prepare the SQL statement
    $sql = "INSERT INTO appointments (passenger_id, `from`, `date`, `time`, `to`) 
            VALUES ('$passenger_id', '$from', '$date', '$time', '$to')";

    // Execute the SQL statement
    $result = mysqli_query($conn, $sql);

    if($result){
        // Get the last inserted ID
        $last_id = $conn->insert_id;
        $_SESSION["state"] = "The appointment has been sent. Your appointment ID is $last_id";
        header("Location: passengerappoiment.php");
        exit(); // Make sure to exit after redirecting
    }
    else{
        $_SESSION["state"] = "The appointment has not been sent because ".$conn->error;
        header("Location: passengerappoiment.php");
        exit(); // Make sure to exit after redirecting
    }
} else{
    $_SESSION["state"] = "Sorry but that is Invalid ID";
    header("Location: passengerappoiment.php");
    exit();
}
}
?>