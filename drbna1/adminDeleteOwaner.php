<?php
session_start();

include 'dbconnect.php'; // Make sure to include your database connection file

if(isset($_POST['delete'])){
    $OwnerID = $_POST['OwnerID'];
    $sql = "DELETE FROM owner_info  WHERE OwnerID='$OwnerID'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if the deletion was successful
    if($result){
        
        $_SESSION["state"] = "Delete Owner Private with ID $OwnerID";
        header("Location: PrivateOwnerList.php");
    }
    
  
}
?>