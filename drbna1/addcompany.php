<?php 
session_start();
include 'dbconnect.php';

if(isset($_POST['Register'])){
    $Company_Name = $_POST["Company_Name"];
    $Phone = $_POST["Phone"];
    $Address = $_POST["Address"];  
    $Fax = $_POST["Fax"];
    $Transport_Number = $_POST["Transport_Number"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    
    // Check if the email already exists in the database
    $check_query = "SELECT * FROM companytransport_info WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);
    
    if(mysqli_num_rows($check_result) > 0) {
        // If email exists, show a message indicating that the email is already in use
        $_SESSION["state"] = "Sorry, this email is already registered.";
        header("Location: CompanyReisgster.php");
        exit();
    }

    // Proceed with registration if email is not in use
    $sql = "INSERT INTO companytransport_info (Company_Name, Phone, Address, Fax, Transport_Number, Email, Password) 
            VALUES ('$Company_Name', '$Phone', '$Address', '$Fax', '$Transport_Number', '$Email', '$Password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $last_id = $conn->insert_id;
        $_SESSION["state"] = "Congratulations! You have successfully completed the registration process.<br>Your ID is: $last_id<br><a href='companyLogin.php'>GO TO LOGIN</a>";
        header("Location: CompanyReisgster.php");
    } else {
        $_SESSION["state"] = "Sorry, the system was unable to complete your registration process. Please check the entered data and try again. Error: ".mysqli_error($conn);
        header("Location: CompanyReisgster.php");
    }
}
?>

