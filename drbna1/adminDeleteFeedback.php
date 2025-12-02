<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $feedback_id = $_POST['feedback_id'];
    $sql = "DELETE FROM feedback  WHERE feedback_id='$feedback_id'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Feedback with ID $feedback_id";
        header("Location: FeedbacksReports.php");
    }
    
  
}
?>