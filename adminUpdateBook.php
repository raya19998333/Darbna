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
               
                <form class="mx-1 mx-md-4" method="POST" action="aaaUpdateBook.php"> 
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Booking ID</label>
                     <input type="text" class="form-control" value="<?php echo htmlspecialchars($_GET['booking_id'] ?? '', ENT_QUOTES); ?>" name="booking_id" placeholder="">


                    </div>
                  </div>

   <div class="row">             
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Full Name:</label>
    <input type="text" name="name" class="form-control" required>
  </div>
    <div class="col-md-8">
    <label for="inputZip" class="form-label">Passenger Id:</label>
    <input type="text" name="passenger_id" value="<?php echo htmlspecialchars($_GET['passenger_id'] ?? '', ENT_QUOTES); ?>" class="form-control" required>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Trip Id:</label>
    <input type="text" name="Trip_id" value="<?php echo htmlspecialchars($_GET['Trip_id'] ?? '', ENT_QUOTES); ?>" class="form-control" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($_GET['email'] ?? '', ENT_QUOTES); ?>" class="form-control"  required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">City:</label>
    <input type="text" class="form-control" name="city" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label"> Vichel Number</label>
    <input type="text" class="form-control" name="vichel_number" required>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Phone:</label>
    <input type="number" class="form-control" name="phone" placeholder="99999999" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Location:</label>
    <input type="text" class="form-control" name="location" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Date of Trip:</label>
    <input type="date" class="form-control" name="date" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Type of Trip:</label>
    <select class="form-select" aria-label="Default select example" name="trip_type" required>
      <option selected>Type Of Trip</option>
      <option value="Special Trip">Special Trip</option>
      <option value="Common Trip">Common Trip</option>
     
    </select><br><br><br>
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
