<?php
session_start();

?>
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

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

<section class="vh-150" style="background-color: #eeeeee8a;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
             
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update</p>
                <?php  
                if(isset($_SESSION['message']))
                {
                    echo "<button  class='btn btn-dark btn-lg'>".$_SESSION['message']."</button>";
                    unset($_SESSION['message']);
                }
                ?>
               
                <form class="mx-1 mx-md-4" method="POST" action="aaaUpdatePStation.php"> 
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">StationID</label>
                     <input type="text" class="form-control" value="<?php echo htmlspecialchars($_GET['StationID'] ?? '', ENT_QUOTES); ?>" name="StationID" placeholder="">


                    </div>
                  </div>

 <!--Grid row-->
 <div class="row">

<div class="col-md-8">
    <div class="md-form mb-0"><label for="name" class="">Company name</label>
        <input type="text" name="CompanyName" minlength="2" maxlength="30" class="form-control" required>
        
    </div>
</div>
<div class="col-md-4">
    <div class="md-form mb-0"><label for="text" class="">Trip ID</label>
        <input type="text" name="TripID" minlength="2" maxlength="8" class="form-control" required>
        
    </div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-6">
    <div class="md-form mb-0"><label for="text" class="">Places of transportation</label>
        <input type="text" name="Placesoftransportation" class="form-control" minlength="2" maxlength="30" required>
        
    </div>
</div>
<div class="col-md-6">
  <div class="md-form mb-0"><label for="text" class="">ID passenger</label>
      <input type="text" name="PassengerID" class="form-control" minlength="2" maxlength="8" required>
      
  </div>
</div>
<!--Grid column-->

</div>
<!--Grid row-->

<!--Grid row-->
<div class="row">


<!--Grid column-->
<div class="col-md-4">

    <div class="md-form">  <label>Transportation times:</label>
       <input type="time" name="Time" class="form-control">
    </div>

</div>
<div class="col-md-5">
  <div class="md-form">  <label>Date</label>
     <input type="date" name="Date" class="form-control">
  </div>
</div>
<div class="col-md-3">
<div class="md-form">  <label>Day</label>
   <select class="form-control" name="Day">
    <option>Sunday</option>
    <option>Monday</option>
    <option>Tuesday</option>
    <option>wednesday</option>
    <option>Thursday</option>
    <option>Friday</option>
    <option>Saturday</option>
   </select>
</div>
</div>

</div>
<!--Grid row-->

<!--Grid row-->
<div class="row">

<!--Grid column-->
<div class="col-md-12">

    <div class="md-form"><label for="message">The place of Station</label>
        <input type="url" name="PlaceStation"  rows="2" class="form-control " minlength="2" maxlength="300" required>
        
    </div>

</div>
</div>
                 
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-warning btn-lg" value="Update" name="Update" >
                    
                  
                  </div>

               

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7  align-items-center order-1 order-lg-2">
 <div> 
             </form>
                  </div>

               

              </div>
              
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section></body></html>
