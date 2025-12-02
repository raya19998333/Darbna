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
  <title>Darban</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
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
<body >
  <script src="script.js"></script> 
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
                <a class="nav-link" href="passengerVichel.php">Common Trips</a>
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
            <form class="d-flex" >
  <input class="form-control me-2" id="idsearch" type="text" placeholder="Search" aria-label="Search">
  <button class="btn btn-dark" onclick="search();" type="button">Search</button>
  <p>   &nbsp </p>
              
              <?php
            $url = "index.php";
            echo "<a href='$url' <button class='btn btn-warning' onclick='location.href= $url'>logout </button></a>";?>
     </form>
          </div>
        </div>
      </nav>
</header>
<?php 
include_once('dbconnect.php');
$sql="SELECT * FROM passenger_info";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($query);
?>
<!--Console-->
<section style="padding:40px;padding-top:100px;"> 
  <div class="row">
    <div class="col-md-7">
<h1 class="display-5" style="margin-top:100px"><span><?php echo $result["PName"];?></span> , Welcome to our trail! Let us take you on a fun and safe trip to your favorite destination.</h1>

</div>
<div class="col-md-5">
<img src="images/Welcome-bro.png" style="height: 450px;width: 462px;">
</div>
</div>
  
 

  
  
  
  <!--row2-->
<br><br>  <br><br>  <br><br><br><br><br>
  <div class="row " >
    <div class="col-md-6">


        <div class="card ">
          <h5 class="card-header"> Our services</h5>
          <div class="card-body">
            <h5 class="card-title">Owner Vhicle</h5>
            <p class="card-text" id="p">passengers can book/purchase tickets in the said app. Oppositely, people looking for 
              a way to help them navigate to their destination can find the right route in real time. One important 
              feature of the app is that travelers can use the app to report or provide feedback and complaints regarding their experiences, 
              any violations by drivers or transport companies and give ratings. .</p>
            <a href="passengerTrip.php" class="btn btn-primary" >Register</a>
          </div> 
       
        </div>
    </div>

 



    
    <div class="col-md-6">
 
      <div class="card">
        <h5 class="card-header"> Our services</h5>
        <div class="card-body">
          <h5 class="card-title">Passengers and travelers</h5>
          <p class="card-text" id='p'>it also helps bus owners find customers more quickly and provides 
            more accurate customer information. Through this system, it may lead to reducing the purchase of 
            cars and saving money because the team will be given relevant information on their transportation needs easily. .</p><br>
          <a href="passengerTrip.php"  class="btn btn-primary">Register</a>
        </div> 
      </div>
    </div>
  </div><!--end colm-row2-->

</section>
  <!-- info section -->
<br><br><br>
  <section class="info_section layout_padding2" id="s" style="background-color: rgba(58, 60, 37, 0.845);color: rgb(215, 215, 171);">
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
      
      
</body>
</html>