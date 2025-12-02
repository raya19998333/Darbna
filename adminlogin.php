<?php 
session_start();?><!DOCTYPE html>
<html lang="en">
<head>

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<div class="container py-4 ">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center "><img src="images/o.png" style="height: 120px;width: 130px;">
              <h2 class="display-6 mb-5">Log in</h2>
              
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  
                  
                </div>

    <!-- Email input -->
    <form method="post" action="loginadmin.php">
              <div class="row"><div  class="col-md-12">
                    <?php  
                    

                if(isset($_SESSION["state4"]))
                {
                  
                    echo "<button  class='btn btn-danger'>".$_SESSION["state4"]."</button>";
                    unset($_SESSION["state4"]);
                }
              
                ?></div></div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">User Name</label>
                    <input type="text" name="username" class="form-control"  required>
                  </div>
                  </div>
                <!-- Password input -->
                <div class="form-outline flex-fill mb-0"><label class="form-label" for="form3Example4c">Password</label>
                <input type="password"  class="form-control" name="password" required />
                      
                      
                    </div>
  
                <!-- Checkbox --><br><br>
                
              <button class="btn btn btn-dark btn-lg px-5"  type="submit" value="Login" name="Login">Login</button><br> 
            
            </form>
  
                <!-- Register buttons -->
               
    
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="images/about.jpg" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
</body>
</html>
