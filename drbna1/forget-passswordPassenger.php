<?php session_start() ?>
<!--FORGET PASSWORD-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Darbna</title>
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
 <div class="container-fluid all  p-3 mb-5 bg-body-tertiary rounded">
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
    <?php 
    include_once('dbconnect.php');
    if (isset($_REQUEST['Send'])){
      $email = $_REQUEST['Email'];
      $sql="SELECT Email FROM passenger_info WHERE Email='$email'";
  $check_email = mysqli_query($conn,$sql);
  $res = mysqli_num_rows($check_email);
  if($res>0)
  {
    $message = '<div>
     <p><b>Hello!</b></p>
     <p>You are recieving this email because we recieved a password reset request for your account.</p>
     <br>
     <p><button class="btn btn-primary"><a href="http://localhost/drbna/reset-password.php?secret='.base64_encode($email).'">Reset Password</a></button></p>
     <br>
     <p>If you did not request a password reset, no further action is required.</p>
    </div>';
    }
  
    include "mailer.php";
    
    $email = $email; 
  
    $mail->IsSMTP();
    $mail->SMTPAuth = true;                 
    $mail->SMTPSecure = "tls";      
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587; 
    $mail->Username = "rayaalamri90@gmail.com";   //Enter your username/emailid
    $mail->Password = "jjsoueyspfpcllub";   //Enter your password
    $mail->FromName = "Darbna";
    $mail->AddAddress($email);
    $mail->Subject = "Reset Password";
    $mail->isHTML( TRUE );
    $mail->Body =$message;
    if($mail->send())
    {
      $msg = "We have e-mailed your password reset link!";
    }
    
    else
    {
      $msg = "We can't find a user with that email address";
    }
    }
  
    
    ?>
    <div class="container py-4 ">
      <div class="row g-0 align-items-center">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              align-text:center;
              margin-left:300px;
              margin-right:300px;
              ">
            <div class="card-body p-5 s text-center "><img src="images/o.png" style="height: 120px;width: 130px;">
              <h2 class="display-6 mb-5">Forget Password</h2>
              
                <!-- 2 column grid layout with text inputs for the first and last names -->
               
             
                <form method="post" action="">
             
              
                <div class=" mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Email</label>
                    <input type="Email" name="Email" class="form-control"  required>
                  </div>
                  </div>
        
  
                <!-- Checkbox --><br><br>
                
              <button class="btn btn btn-dark btn-lg px-5"  type="submit" value="Send" name="Send">Send</button><br> 
              <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
            </form>
  
                <!-- Register buttons -->
                
    
            </div>
          </div>
        </div>
  
        
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->