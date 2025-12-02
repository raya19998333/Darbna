<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['Login'])){
    $Email = $_POST['Email'];
    $password_hash = $_POST['password_hash'];

    $sql = "SELECT * FROM passenger_info WHERE Email='$Email' AND password_hash='$password_hash'";
    
    // Execute the query
    $result = $conn->query($sql);

 

    // Check the number of rows returned
    $count = $result->num_rows;

    if ($count == 1) {
        header("Location: passengerhome.php");
        
    } else {
        // Handle invalid login
         $_SESSION["state"]="Invaild username or password";
        header("Location:passengerlogin.php");
    }
}
?>
