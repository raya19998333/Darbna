<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/o.png" type="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Darbna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .card {
            width: calc(100% - 20px); /* 50% width for each card with margin */
            margin-right: 20px; 
            margin-left: 20px;/* Adjust margin between cards */
            margin-bottom: 10px; /* Adjust margin bottom */
            float: left; /* Float the cards to left */
        }
        .card:last-child {
            margin-right: 0; /* Remove margin from the last card */
        }
        @media (max-width: 768px) {
            .card {
                width: calc(100% - 20px); /* Full width for each card with margin on smaller screens */
            }
        }
       
    </style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="icon" type="image" href="o.png"  />
<link rel="stylesheet" href="style.css">
  <title> Darbna</title>

  <!-- bootstrap core css -->
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
  </html>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<body>
   
  <header>

    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/o.png" style="height: 60ox;width: 65px;">Darbna</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="passengerhome.php">home</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="passengerTrip.php">Private trips</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link"  href="passengerVichel.php">Common Trips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="passengerNotification.php">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="passengerStations.php">Stations</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="passengerappoiment.php">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="passengerEvalution.php">Feedback</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark" type="submit">Search</button>
            <p>   &nbsp </p>
            <?php
            $url = "index.php";
            echo "<a href='$url' <button class='btn btn-warning' onclick='location.href= $url'>logout </button></a>";?>
      </div>
    </nav>
</header><br><br><br><br>
     <!--close--> 
    <!--Table 1-->
    <br><br><br>
    <h1 class="display-6" style="text-align: center;">Stations of common Trips for passenger transport companies</h1>
  <br><br>
<?php
    include 'dbconnect.php';
    $sql="SELECT * FROM station ";
    if(!$result=$conn->query($sql)){
        die("There was an error running the query".$conn->error);
    }
?>

<div class="card-container">
<?php
    $count = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if ($count % 3 == 0) {
            echo '<div class="row">';
        }
        echo '<div class="col">';
        echo '<div class="card text-center">';
        echo '<div class="card-header">';
        echo "{$row['CompanyName']}";
        echo "</div>";
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>Station ID :{$row['StationID']}</h5>";
        echo "<h5 class='card-title'>Place of Transportation:{$row['Placesoftransportation']}</h5>";
        echo "<h5 class='card-title'>Trip ID:{$row['TripID']}</h5>";
        echo "<h5 class='card-title'>Passenger ID:{$row['PassengerID']}</h5>";
        echo "<h5 class='card-title'>Place of Station:<a href={$row['PlaceStation']} >Click here</a></h5>";
        
        echo '<br>';
        $url = "passengerbook.php";
        
        echo '</div>';
        echo '<div class="card-footer text-muted">';
        echo "{$row['Date']}, {$row['Time']} on {$row['Day']}";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        $count++;
        if ($count % 3 == 0) {
            echo '</div>';
        }
    }
?>
</div>
<br><br><br><br><br>

<section class="info_section layout_padding2" style="background-color: rgba(58, 60, 37, 0.845);color: rgb(215, 215, 171);">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_contact">
          <h4>
            Salalah
          </h4>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Ministry of Transport, Communications and Information Technology
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call :2222222
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                admi.draban@gov.om
              </span>
            </a>
          </div>
        </div>
        <div class="info_social">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col">
        <div class="info_detail">
          <h4>
            Info
          </h4>
          <p>
            The "Darbna: An Oman Land Based Public Transportation Information Hub" is a system that aims to serve individual growth, and community growth, increase economic growth, and supply easy land transportation between cities, governorates, and outside Oman </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-2 "style="color: olivedrab;" >
        <div class="">
          <h4>
            Links
          </h4>
          <div class="info_links">
            <a class="active" href="index.html">
              Home
            </a>
            <a class="" href="about.html">
              About
            </a>
            <a class="" href="service.html">
              Services
            </a>
        
            <a class="" href="team.html">
              Team
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 info_col ">
        <h4>
          Subscribe
        </h4>
        <form action="#">
          <input type="text" placeholder="Enter email" />
          <button type="submit" class="btn btn-link">
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->


  <!-- footer section -->
  <section class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Darban</a>
        </p>
      </div>
    </section>
    <!-- footer section -->
