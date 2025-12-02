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
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                <form class="mx-1 mx-md-4" method="POST" action="addpassenger.php"> 
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Full Name</label>
                      <input type="text"  class="form-control" name="PName" placeholder="" required>

                    </div>
                  </div>

                   <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="name" class="">Phone</label>
                      <input type="number" id="Phone" name="Phone" class="form-control" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="name" class="">Address</label>
                      <input type="text" id="address" name="address" class="form-control" required>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Email</label>
                      <input type="text" name="email" placeholder="Email" class="form-control" required>
                    </div>
                  </div>
                 
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Gender</label>
                      <select class="form-control" name="Gender" required><option>Female</option>
                      <option>Male</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="name" class="">Age</label>
                      <input type="number" id="na" name="Age" class="form-control" required>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Civil Number</label>
                      <input type="number"  class="form-control" name="CivilNo" required>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Nationality</label>
                      <input type="text"  class="form-control" name="Nationality" required>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="" >Birthday</label>
                      <input type="date"  class="form-control" name="Birthday" required>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Jop</label>
                      <input class="form-control" type="text" name="job" required>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  
                    <div class="form-outline flex-fill mb-0"><label class="form-label" for="form3Example4c">Password</label>
                      <input type="password"  class="form-control" name="password_hash" required />
                      
                    </div>
                  </div>

               

                 

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-warning btn-lg" value="Register" name="Register" >Register</button>
                    
                  
                  </div>

               

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7  align-items-center order-1 order-lg-2">
 <div>  <?php  
                if(isset($_SESSION['message']))
                {
                    echo "<button  class='btn btn-dark btn-lg'>".$_SESSION['message']."</button>";
                    unset($_SESSION['message']);
                }
                ?> </div>
                <img src="images/o.png"
                  class="img-fluid" alt="Sample image">
             </form>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section></body>
<script>
    document.getElementById('Phone').addEventListener('input', function (e) {
        var maxDigits = 8;
        var input = e.target;
        if (input.value.length > maxDigits) {
            input.value = input.value.slice(0, maxDigits);
        }
    });
    document.getElementById('na').addEventListener('input', function (e) {
        var maxDigits = 2;
        var input = e.target;
        if (input.value.length > maxDigits) {
            input.value = input.value.slice(0, maxDigits);
        }
    });
</script>

</html>