<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Send'])){
    $company_id=$_POST["company_id"];
    $station=$_POST["station"];
    $transportation_place=$_POST["transportation_place"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    $day=$_POST["day"];
    $price=$_POST["price"];
    $massage=$_POST["massage"];

    // Check if any field is empty
    if(empty($company_id) || empty($station) || empty($transportation_place) || empty($date) || empty($time) || empty($day) || empty($price)){
        $_SESSION["state"] = 'Sorry, the system was unable to send information using the information provided. Please try again.';
        header("Location: companyTrips.php");
        exit();
    }

    $check_query = "SELECT * FROM companytransport_info WHERE companyID = '$company_id'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) > 0){
        $sql = "INSERT INTO common_trips (company_id, station, transportation_place, date, time, day, price, massage) 
                VALUES ('$company_id', '$station', '$transportation_place', '$date', '$time', '$day', '$price', '$massage')";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            $last_id = $conn->insert_id;
            $_SESSION["state"] = 'Thank you for your end your Common Trip! We are happy to have new Trip. We look forward to providing you with a great experience. Your trip id is: '.$last_id;
            header("Location: companyTrips.php");
            exit();
        }
    } else {
        $_SESSION["state"] = "Sorry, but that is an invalid ID";
        header("Location: companyTrips.php");
        exit();
    }
} 
?>

