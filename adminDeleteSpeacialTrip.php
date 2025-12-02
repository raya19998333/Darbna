<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $trip_id = $_POST['trip_id'];
    $sql = "DELETE FROM special_trip  WHERE trip_id='$trip_id'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Speacial Trip with ID $trip_id";
        header("Location: ListofTrips.php");
    }
    
  
}
?>