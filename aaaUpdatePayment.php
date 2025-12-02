<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
    $payment_id=$_POST['payment_id'];
    $PassengerID = $_POST['PassengerID'];
    $booking_id = $_POST["booking_id"];
    $payment_amount = $_POST["payment_amount"];
    $CardofPayment = $_POST["CardofPayment"];
    $Name_on_card = $_POST["Name_on_card"];
    $Credit_card_number = $_POST["Credit_card_number"];
    $Expiration = $_POST["Expiration"];
    $CVC = $_POST["CVC"];
    $Date = $_POST["Date"];


    // Prepare SQL statement with placeholders
    $sql = "UPDATE payment SET  PassengerID='$PassengerID',
     booking_id='$booking_id',
     payment_amount='$payment_amount', 
     CardofPayment='$CardofPayment',
     Name_on_card='$Name_on_card',
     Credit_card_number='$Credit_card_number',
     Expiration='$Expiration',
     CVC='$CVC', 
     Date='$Date' WHERE payment_id='$payment_id'";

    // Execute the statement
    $result=mysqli_query($conn , $sql);
     
    if($result){
        $_SESSION["state2"] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: PaymentReports.php");
        exit(); // Make sure to exit after redirecting
    }  else{
        $_SESSION["message"] = "Sorry, this email is already registered.";
        header("Location: aaaUpdatePayment.php");
        exit();
}   
}
?>
