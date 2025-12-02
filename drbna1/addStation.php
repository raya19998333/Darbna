<?php 
session_start();
include 'dbconnect.php';
if(isset($_POST['send'])){


    $CompanyName=$_POST["CompanyName"];
    $TripID=$_POST["TripID"];
    $Placesoftransportation=$_POST["Placesoftransportation"];  
    $PassengerID=$_POST["PassengerID"];
    $Time=$_POST["Time"];
    $Date=$_POST["Date"];
    $Day=$_POST["Day"];
    $PlaceStation=$_POST["PlaceStation"];

    if(empty($CompanyName) || empty($TripID) || empty($Placesoftransportation) || empty($PassengerID) || empty($Time) || empty($Date) || empty($Day) || empty($PlaceStation)) {
      $_SESSION["state"] = 'Sorry, the Trip could not be notified due to incomplete information requested.';
      header("Location: companyNotificaion.php");
      exit();
  }
    $check_query = "SELECT * FROM passenger_info WHERE PassengerID = '$PassengerID'";
    $check_result = mysqli_query($conn, $check_query);
    if(mysqli_num_rows($check_result) >0){


 $sql = "INSERT INTO station (CompanyName, TripID,Placesoftransportation,PassengerID,Time, Date, Day,PlaceStation) 
    VALUES ('$CompanyName', '$TripID' ,'$Placesoftransportation','$PassengerID','$Time', '$Date',   '$Day','$PlaceStation')";
    $resul=mysqli_query($conn , $sql);

  if($resul){
   $last_id =$conn->insert_id;
   $_SESSION["state"]="The Trip  has been submitted successfully, please ensure that the team is ready to achieve the best results. The station ID is :".$last_id;
   header("Location: companyNotificaion.php");
}
else{
   $_SESSION["state"]="Sorry, the Trip could not be notified due to incomplete information requested. Please review and complete the information to complete the submission process. check".$conn->error;
   header("Location: companyNotificaion.php");
   exit();
}

} else{
$_SESSION["state"] = "Sorry but that is Invalid passenger ID";
header("Location: companyNotificaion.php");
exit();

}
}

?>