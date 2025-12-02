<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $StationID = $_POST['StationID'];
    $sql = "DELETE FROM station  WHERE 	StationID='$StationID'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete station with ID $StationID";
        header("Location: adminStation.php");
    }
    
  
}
?>