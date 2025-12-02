<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $PassengerID=$_POST['PassengerID'];
    $PName = $_POST["PName"];
    $Phone = $_POST["Phone"];
    $address = $_POST["address"];
    $Email = $_POST["Email"];
    $Gender = $_POST["Gender"];
    $Age = $_POST["Age"];
    $CivilNo = $_POST["CivilNo"];
    $Nationality = $_POST["Nationality"];
    $Birthday = $_POST["Birthday"];
    $job = $_POST["job"];
    $password_hash = $_POST["password_hash"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE passenger_info SET  PName='$PName',
     Phone='$Phone',
      address='$address', 
      Email='$Email',
       Gender='$Gender',
        Age='$Age',
         CivilNo='$CivilNo',
          Nationality='$Nationality', 
          Birthday='$Birthday',
           job='$job', 
           password_hash='$password_hash' WHERE PassengerID=$PassengerID";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION["message"] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: adminUpdatePassenger.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdatePassenger.php");
        exit(); // Exit after redirecting
    }
}   
?>
