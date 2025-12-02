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
               
                <form class="mx-1 mx-md-4" method="POST" action="aaaUpdateAppointment.php"> 
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Appointments id</label>
                     <input type="text" class="form-control" value="<?php echo htmlspecialchars($_GET['appointments_id'] ?? '', ENT_QUOTES); ?>" name="appointments_id" placeholder="">


                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0"> <label class="form-label" for="form3Example1c">ID Passenger:</label>
                          <input type="text" name="passenger_id" value="<?php echo htmlspecialchars($_GET['passenger_id'] ?? '', ENT_QUOTES); ?>" class="form-control" minlength="4" maxlength="8" required />
                         
                        </div>
                      </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      
                      <div class="form-outline flex-fill mb-0"><label class="form-label"  minlength="2" maxlength="20" required for="form3Example4c">Place:</label>
                        <input type="text" class="form-control" name="from" />
                        
                      </div>
                    </div>
   <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0"><label class="form-label" >Date</label>
                          <input type="date" name="date" class="form-control" />
                          
                        </div>
                      </div>
                     
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0"><label class="form-label" for="form3Example4c">Time</label>
                          <input type="time" name="time" class="form-control" />
                          
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0"><label class="form-label" for="form3Example4c">TO</label>
                          <input type="text" name="to" class="form-control" />
                          
                        </div>
                      </div>

                 
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-warning btn-lg" value="Update" name="Update" >
                    
                  
                  </div>
</form>
               

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7  align-items-center order-1 order-lg-2">
 <div> 
             
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
