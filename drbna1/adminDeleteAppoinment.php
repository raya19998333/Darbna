<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $appointments_id = $_POST['appointments_id'];
    $sql = "DELETE FROM appointments  WHERE appointments_id='$appointments_id'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Appoinment with ID $appointments_id";
        header("Location: AppoinmentReports.php");
    }
    
  
}
?>