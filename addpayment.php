<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Pay'])){
    $PassengerID = $_POST['PassengerID'];
    $booking_id = $_POST["booking_id"];
    $payment_amount = $_POST["payment_amount"];
    $CardofPayment = $_POST["CardofPayment"];
    $Name_on_card = $_POST["Name_on_card"];
    $Credit_card_number = $_POST["Credit_card_number"];
    $Expiration = $_POST["Expiration"];
    $CVC = $_POST["CVC"];
    $Date = $_POST["Date"];

    if(empty($PassengerID) || empty($booking_id) || empty($payment_amount) || empty($CardofPayment) || empty($Name_on_card) || empty($Credit_card_number) || empty($Expiration) || empty($CVC) || empty($Date)){
        $_SESSION["state"] = 'Sorry, the system was unable to submit information using the provided data. Please try again.';
        header("Location: passengerPayment.php");
        exit();
    }

    $check_query = "SELECT * FROM passenger_info WHERE PassengerID = '$PassengerID'";
    $check_result = mysqli_query($conn, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        $sql = "INSERT INTO payment(PassengerID, booking_id, payment_amount, CardofPayment, Name_on_card, Credit_card_number, Expiration, CVC, Date) 
                VALUES ('$PassengerID', '$booking_id', '$payment_amount', '$CardofPayment', '$Name_on_card', '$Credit_card_number', '$Expiration', '$CVC', '$Date')";
        $result = mysqli_query($conn, $sql);
   
        if($result){
            $last_id = $conn->insert_id;
            $_SESSION["state"] = "The payment has been reserved. Your Payment ID is: ".$last_id;
            header("Location: passengerPayment.php");
        } else {
            $_SESSION["state"] = "Failed to reserve the payment. Error: ".mysqli_error($conn);
            header("Location: passengerPayment.php");
        }
    } else {
        $_SESSION["state"] = "Invalid Passenger ID";
        header("Location: passengerPayment.php");
        exit();
    }
}
?>
