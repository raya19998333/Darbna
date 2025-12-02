<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['Login'])){
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM owner_info WHERE Email='$Email' AND Password='$Password'";
    
    // Execute the query
    $result = $conn->query($sql);

 

    // Check the number of rows returned
    $count = $result->num_rows;

    if ($count == 1) {
        header("Location: Ownerhome.php");
        
    } else {
        // Handle invalid login
         $_SESSION["state"]="Invaild username or password";
        header("Location:Ownerlogin.php");
    }
}
?>
