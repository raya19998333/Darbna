<?php
require('tcpdf/tcpdf.php');

$booking_id=$_POST["booking_id"];
    $name=$_POST["name"];
    $passenger_id=$_POST["passenger_id"];
    $Trip_id=$_POST["Trip_id"];
    $email=$_POST["email"];
    $city=$_POST["city"];
    $vichel_number=$_POST["vichel_number"];
    $phone=$_POST["phone"];
    $location=$_POST["location"];
    $date=$_POST["date"];
    $trip_type=$_POST["trip_type"];

$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', true);

$pdf->SetTitle('Certificate of Completion');

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 24);
$pdf->writeHTML
("
<style>
*{
  text-align: center;
}
</style>
<h1> Certificate of Completion </h1>
<p> This certifies that </p>
<h2> $name </h2>
<p> has successfully completed the </p>
<h2>$passenger_id </h2>
<p>  $Trip_id </p>
<p>  $email </p>
<p> $booking_id </p>
<p>  $city </p>
<p> $phone </p>
<p>  $location </p>
<p>  $date </p>
<p>$trip_type</p>
");

$pdf->Output($name.'-'.$passenger_id.'-'.'certificate.pdf', 'D');
