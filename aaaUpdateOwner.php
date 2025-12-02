<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
   $OwnerID=$_POST['OwnerID'];

   $OName=$_POST["OName"];
   $Address=$_POST["Address"];
   $Email=$_POST["Email"];
   $Gender=$_POST["Gender"];
   $Phone=$_POST["Phone"];

   $Age=$_POST["Age"];
   $Birthday=$_POST["Birthday"];
   $Licensenumber=$_POST["Licensenumber"];
   $Password=$_POST["Password"];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE owner_info SET  OName='$OName',
     Phone='$Phone',
     Address='$Address', 
      Email='$Email',
       Gender='$Gender',
       Phone='$Phone',
       Age='$Age',
       Birthday='$Birthday', 
       Licensenumber='$Licensenumber',
       Password='$Password' WHERE OwnerID=$OwnerID";

    // Execute the statement
    $resul=mysqli_query($conn , $sql);
    
    if($resul){
        $_SESSION["state"] = "Update successful.";
        // Redirect to adminUpdatePassenger.php
        header("Location: PrivateOwnerList.php");
        exit(); // Make sure to exit after redirecting
    } else {
        $_SESSION["message"] = "Update failed. Error: ".$conn->error;
       

        header("Location: adminUpdatePOwner.php");
        exit(); // Exit after redirecting
    }
}   
?>
