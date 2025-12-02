<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $feedback_id=$_POST['feedback_id'];
   $passenger_id=$_POST["passenger_id"];
   $type_transport=$_POST["type_transport"];
   $feedback_text=$_POST["feedback_text"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE feedback SET  passenger_id='$passenger_id',
     type_transport='$type_transport',
     feedback_text='$feedback_text'
    WHERE feedback_id=$feedback_id";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION['state'] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: FeedbacksReports.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateFeedback.php");
        exit(); // Exit after redirecting
    }
}   
?>