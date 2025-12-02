<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $CompanyID=$_POST['CompanyID'];
   $Company_Name=$_POST["Company_Name"];
   $Phone=$_POST["Phone"];
   $Address=$_POST["Address"];  
   $Fax=$_POST["Fax"];
   $Transport_Number=$_POST["Transport_Number"];
   $Email=$_POST["Email"];
   $Password=$_POST["Password"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE companytransport_info SET  Company_Name='$Company_Name',
     Phone='$Phone',
     
      Address='$Address',
      Fax='$Fax',
      Transport_Number='$Transport_Number',
      Email='$Email',
      Password='$Password' WHERE CompanyID=$CompanyID";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION["state"] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: ComaniesTransportList.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdateCompany.php");
        exit(); // Exit after redirecting
    }
}   
?>
