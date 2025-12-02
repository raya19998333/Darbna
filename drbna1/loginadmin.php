<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    
    // Execute the query
    $result = $conn->query($sql);

 

    // Check the number of rows returned
    $count = $result->num_rows;

    if ($count == 1) {
        header("Location: adminPassenger.php");
        
    } else {
        // Handle invalid login
         $_SESSION["state4"]="Invaild username or password";
        header("Location:adminlogin.php");
    }
}
?>
