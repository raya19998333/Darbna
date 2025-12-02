<?php session_start() ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Darban</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="shortcut icon" href="images/o.png" type="">
  <link rel="stylesheet" href="style.css">
</head>
  <body>
 <div class="container-fluid all  bg-body-tertiary rounded">
  <div class="row">
    <div class="col-md-12 n">

  </div>
  </div><!-- Section: Design Block -->
  <section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    
    <div class="container py-4 ">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5  text-center "><img src="images/o.png" style="height: 120px;width: 130px;">
              <h2 class="display-6 mb-5">Log in</h2>
              
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  
                  
                </div>
  
                <!-- Email input -->
                <form method="post" action="loginOwner.php">
                <div class="row"><div class="col-md-12">
                    <?php  
                    

                if(isset($_SESSION['state']))
                {
                  
                    echo "<button  class='btn btn-danger bg-subtle'>".$_SESSION['state']."</button>";
                    unset($_SESSION['state']);
                }
              
                ?></div></div>
              
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Email</label>
                    <input type="Email"  minlength="0" maxlength="40" id="name" name="Email" class="form-control" required>
                  </div>
                  </div>
                <!-- Password input -->
                <div class="form-outline flex-fill mb-0"><label class="form-label" for="form3Example4c">Password</label>
                <input class="form-control"  minlength="0" maxlength="8" type="password" name="Password" required>
                      
                      
                    </div>
  
                <!-- Checkbox --><br><br>
                
              <button class="btn btn btn-dark btn-lg px-5"  type="submit" value="Login" name="Login">Login</button><br> 
            
            </form>
  
                <!-- Register buttons -->
                <div class="text-center">
                  <p>If you don't have account? <a href="OwnerRegister.php">Register</a></p>
                       
                </div>
                <div class="text-left">
                  <a href="forget-passwordOwner" ><p>Forget Password</p></a>
              </div>
    
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="images/login.png" class="w-100 "
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->