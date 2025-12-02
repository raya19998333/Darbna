<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $CompanyID = $_POST['CompanyID'];
    $sql = "DELETE FROM companytransport_info  WHERE CompanyID='$CompanyID'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Company with ID $CompanyID";
        header("Location: ComaniesTransportList.php");
    }
    
  
}
?>