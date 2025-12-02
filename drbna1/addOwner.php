<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Register'])){
    $OName = $_POST["OName"];
    $Address = $_POST["Address"];
    $Email = $_POST["Email"];
    $Gender = $_POST["Gender"];
    $Phone = $_POST["Phone"];
    $Age = $_POST["Age"];
    $Birthday = $_POST["Birthday"];
    $Licensenumber = $_POST["Licensenumber"];
    $Password = $_POST["Password"];

    // Check if email already exists
    $check_query = "SELECT * FROM owner_info WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);
    
    if(mysqli_num_rows($check_result) > 0) {
        $_SESSION["state6"] = "Sorry, this email is already registered.";
        header("Location: OwnerRegister.php");
        exit();
    }

    // Insert owner information if email doesn't exist
    $sql = "INSERT INTO owner_info (OName, Address, Email, Gender, Phone, Age, Birthday, Licensenumber, Password) 
            VALUES ('$OName', '$Address', '$Email', '$Gender', '$Phone', '$Age', '$Birthday', '$Licensenumber', '$Password')";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        $last_id = $conn->insert_id;
        $_SESSION["state6"] = "Thank you for registering. Your ID is: ".$last_id;
        header("Location: OwnerRegister.php");
    } else {
        $_SESSION["state6"] = "Sorry, there was an error during registration: ".$conn->error;
        header("Location: OwnerRegister.php");
    }
}
?>
