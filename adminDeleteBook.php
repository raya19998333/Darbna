<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $booking_id = $_POST['booking_id'];
    $sql = "DELETE FROM booking  WHERE booking_id='$booking_id'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Book with ID $booking_id";
        header("Location: BooksReports.php");
    }
    
  
}
?>