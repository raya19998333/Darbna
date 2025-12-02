<?php session_start() ?><!DOCTYPE html>
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

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
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


     <!--new -->
     <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <h3 class="display-6"><img src="images/o.png" style="height: 60ox;width: 65px;">Darbna</h3>
           
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h3 class="display-6"><img src="images/o.png" style="height: 60ox;width: 65px;">Darbna</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item ">
                        <a class="nav-link " href="adminPassenger.php" role="button"  aria-expanded="false">
                          List of Passenger
              </a></li>
              <li class="nav-item ">
                <a class="nav-link " href="PaymentReports.php" role="button"  aria-expanded="false">
                    Payments Reports
                </a></li>
            
                <li class="nav-item ">
                    <a class="nav-link " href="ListofTrips.php" role="button"  aria-expanded="false">
                        List of Special Trips
                    </a></li>
                <li class="nav-item ">
                        <a class="nav-link " href="BooksReports.php" role="button"  aria-expanded="false">
                            Books Reports
                </a></li>
                <li class="nav-item ">
                    <a class="nav-link " href="AppoinmentReports.php" role="button" aria-expanded="false">
                        Appoinment Reports
            </a></li>
            <li class="nav-item ">
                <a class="nav-link " href="FeedbacksReports.php" role="button"  aria-expanded="false">
                    Feedbacks Reports
        </a></li>
        <li class="nav-item ">
            <a class="nav-link " href="PrivateOwnerList.php" role="button"  aria-expanded="false">
                 Private Owner List
    </a></li>
    <li class="nav-item ">
        <a class="nav-link " href="ComaniesTransportList.php" role="button"  aria-expanded="false">
              Comanies Transport List
</a></li>
<li class="nav-item ">
    <a class="nav-link " href="CommonReports.php" role="button"  aria-expanded="false">
        Common Trips Reports
</a></li>
<li class="nav-item ">
    <a class="nav-link " href="adminNotification.php" role="button"  aria-expanded="false">
        List of Notifications
</a></li>
<li class="nav-item ">
    <a class="nav-link " href="adminStation.php" role="button"  aria-expanded="false">
        List of Stations
</a></li>
<form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-dark" type="submit">Search</button>
    <p>   &nbsp</p>

    <?php
            $url = "index.php";
            echo "<a href='$url' <button class='btn btn-warning' onclick='location.href= $url'>logout </button></a>";?></form>
            </div>
          </div>
        </div>
      </nav></header>
     <!--close--> 
    <!--Table 1--><br><br><br><br><br>
    <h1 class="display-1" style="text-align: center;">List Of Stations</h1>
   
       
    <div class="row"><div class="col-md-12">
                    <?php  
                    

                if(isset($_SESSION['state']))
                {
                  
                    echo "<button  class='btn btn-danger'>".$_SESSION['state']."</button>";
                    unset($_SESSION['state']);
                }
              
                ?></div></div>
           
           
           
           
           
           
          
          
           
         
       
    
            <?php
           
            include 'dbconnect.php';
            $sql="SELECT * FROM station ";
            if(!$result=$conn->query($sql)){
                die("There was an error running the query".$conn->error);
             }
             echo "<table class='table table-striped'>";
             echo "<thead><tr>";
             echo "<th>Station ID</th>";
             echo "<th>Company Name</th>";
             echo "<th>Trip ID</th>";
             echo "<th>Places of Transportation</th>";
             echo "<th>PassengerID</th>";
             echo "<th>Time</th>";
             echo "<th>Date</th>";
             echo " <th>Day</th>";
             echo " <th>Place Station</th>";
             
             
             echo " </tr></thead>";
            $i=0;
             while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo "  <tbody>";
                echo "<tr>";
                echo "<td>{$row ['StationID']}</td>";
             
            echo "<td>{$row ['CompanyName']}</td>";
            echo "<td>{$row ['TripID']}</td>";
            echo "<td>{$row ['Placesoftransportation']}</td>";
            echo "<td>{$row ['PassengerID']}</td>";
            echo "<td>{$row ['Time']}</td>";
            echo "<td>{$row ['Date']}</td>";
            echo "<td>{$row ['Day']}</td>";
            echo "<td> <a href={$row ['PlaceStation']}>Map click here</a></td>";
            ;$i=$i+1;
            
            echo "<td><a class='btn btn-dark' href='adminUpdateStation.php?StationID={$row['StationID']}&TripID={$row ['TripID']}&PassengerID={$row ['PassengerID']}'>Update</a></td>";
            

            


echo '<form action="adminDeleteStation.php" method="POST">';
            echo "<input type='hidden' name='StationID' value={$row ['StationID']}>";
            echo "<th><input type='submit' value='Delete' name='delete' class='btn btn-danger'></th>";
          echo "</form>";}
            echo "</tr>";
            
            echo "</tbody>";
             echo "</tbody>";
             echo "</table> ";
             echo "<h6 class='display-6' > The number of Passenger :$i</h6>"; ?>  
               
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
</body>