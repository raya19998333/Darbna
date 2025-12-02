<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $PassengerID = $_POST['PassengerID'];
    $sql = "DELETE FROM passenger_info  WHERE PassengerID='$PassengerID'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Passenger with ID $PassengerID";
        header("Location: adminPassenger.php");
    }
    
  
}
?>