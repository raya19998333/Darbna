<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $notificationID = $_POST['notificationID'];
    $sql = "DELETE FROM notification WHERE notificationID='$notificationID'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Notification with ID $notificationID";
        header("Location: adminNotification.php");
    }
    
  
}