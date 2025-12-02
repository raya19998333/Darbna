<?php
session_start();
include 'dbconnect.php';

if(isset($_POST['Update'])){
    // Get form data
    $appointments_id = $_POST['appointments_id'];
    $passenger_id = $_POST['passenger_id'];
    $from = $_POST['from'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $to = $_POST['to'];

    // Prepare SQL statement with placeholders
    $sql = "UPDATE appointments SET passenger_id = ?, `from` = ?, `date` = ?, `time` = ?, `to` = ? WHERE appointments_id = ?";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param('issssi', $passenger_id, $from, $date, $time, $to, $appointments_id);

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['state'] = "Update successful.";
            // Redirect to AppoinmentReports.php
            header("Location: AppoinmentReports.php");
            exit(); // Make sure to exit after redirecting
        } else {
            $_SESSION['message'] = "Update failed. Error: " . $stmt->error;
            // Redirect to adminUpdateAppointment.php
            header("Location: adminUpdateAppointment.php");
            exit(); // Exit after redirecting
        }

        // Close the statement
        $stmt->close();
    } else {
        $_SESSION['message'] = "Update failed. Error: " . $conn->error;
        // Redirect to adminUpdateAppointment.php
        header("Location: adminUpdateAppointment.php");
        exit(); // Exit after redirecting
    }

    // Close the connection
    $conn->close();
}   
?>
