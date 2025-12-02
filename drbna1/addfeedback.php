<?php
session_start();
include 'dbconnect.php';

if(isset($_POST["submit"])){

    $passenger_id=$_POST["passenger_id"];
    $type_transport=$_POST["type_transport"];
    $feedback_text=$_POST["feedback_text"];

    if(empty($passenger_id) || empty($type_transport) || empty($feedback_text)){
        $_SESSION["state"] = 'Sorry, the feedbackhas not been sent check the info.';
        header("Location: passengerEvalution.php");
        exit();
    }

    $check_query = "SELECT * FROM passenger_info WHERE PassengerID = '$passenger_id'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) >0){

    $sql ="INSERT INTO feedback(passenger_id,type_transport,feedback_text) 
    VALUES ('$passenger_id','$type_transport' ,'$feedback_text')";
    $resul=mysqli_query($conn , $sql);

    if($resul){
        $last_id =$conn->insert_id;
        $_SESSION["state"]="The feedback has been sent";
        header("Location: passengerEvalution.php");
    }
    else{
        $_SESSION["state"]="The feedbackhas not been sent check the info. Check".$conn->error;
        header("Location: passengerEvalution.php");
        exit();
    }
    
} else{
    $_SESSION["state"] = "Sorry but that is Invalid ID";
    header("Location: passengerEvalution.php");
    exit();
}
}

?>