<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['Pay'])){

    $payment_id=NULL;
    $PassengerID=$_POST['PassengerID'];
    $booking_id=$_POST["booking_id"];
    $payment_amount=$_POST["payment_amount"];
    $CardofPayment=$_POST["CardofPayment"];
    $Name_on_card=$_POST["Name_on_card"];
    $Credit_card_number=$_POST["Credit_card_number"];
    $Expiration=$_POST["Expiration"];
    $CVC=$_POST["CVC"];
    $Date=$_POST["Date"];
  

 
 $sql = "INSERT INTO payment(payment_id,PassengerID ,booking_id,payment_amount, CardofPayment,Name_on_card,Credit_card_number,Expiration,CVC,Date) 
    VALUES ('$payment_id','$PassengerID', '$booking_id','$payment_amount','$CardofPayment','$Name_on_card','$Credit_card_number','$Expiration','$CVC','$Date')";
   $resul=mysqli_query($conn , $sql);
   
   if($resul){
        $last_id =$conn->insert_id;
       $_SESSION["state"]="The payment has been reserved. Your Payment ID is: ".$last_id;
       header("Location: passengerPayment.php");
   }
   else{
       $_SESSION["state"]="The payment not  has been reserved because ".$conn->error;
       header("Location: passengerPayment.php");
   }
}
?>