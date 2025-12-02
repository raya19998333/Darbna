<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $payment_id= $_POST['payment_id'];
    $sql = "DELETE FROM payment WHERE payment_id='$payment_id'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    
        
        $_SESSION["state2"] = "Delete Payment with ID $payment_id";
        header("Location: PaymentReports.php");
    
    
  
}
?>
