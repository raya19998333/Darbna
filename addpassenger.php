<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Register'])){
    
    $PName = $_POST["PName"];
    $Phone = $_POST["Phone"];
    $address = $_POST["address"];
    $Email = $_POST["email"];
    $Gender = $_POST["Gender"];
    $age = $_POST["age"];
    $CivilNo = $_POST["CivilNo"];
    $Nationality = $_POST["Nationality"];
    $Birthday = $_POST["Birthday"];
    $job = $_POST["job"];
    $password_hash = $_POST["password_hash"];

    // Check if the email already exists in the database
    $check_query = "SELECT * FROM passenger_info WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) > 0) {
        $_SESSION["message"] = "Sorry, this email is already registered.";
        header("Location: PassengerReigster.php");
        exit();
    }

    // Omit PassengerID from the INSERT statement
    $sql = "INSERT INTO passenger_info (PName, Phone, address, Email, Gender, Age, CivilNo, Nationality, Birthday, job, password_hash)
    VALUES ('$PName', '$Phone', '$address', '$Email', '$Gender', '$age', '$CivilNo', '$Nationality', '$Birthday', '$job', '$password_hash')";

    $result = mysqli_query($conn, $sql);

    if($result){
        $last_id = $conn->insert_id;
        $_SESSION["message"] = "Thanks! You have been successfully added to the system. Last inserted ID: ".$last_id;
        header("Location: PassengerReigster.php");
    } else {
        $_SESSION["message"] = "Failed to add to the system. Error: ".mysqli_error($conn);
        header("Location: PassengerReigster.php");
    }
}
?>

