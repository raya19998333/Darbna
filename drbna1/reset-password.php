<?php
//Resert of passenger

include_once('dbconnect.php');
if(isset($_REQUEST['pwdrst']))
{
  $email = $_REQUEST['email'];
  $pwd = $_POST['pwd'];
  $cpwd =$_POST['cpwd'];
  if($pwd == $cpwd)
  {
    $sql="UPDATE passenger_info SET password_hash='$pwd' where Email='$email'";
    $reset_pwd = mysqli_query($conn,$sql);
    if($reset_pwd>0)
    {
      $msg = 'Your password updated successfully <a href="passengerlogin.php">Click here</a> to login';
    }
    else
    {
      $msg = "Error while updating password.";
    }
  }
  else
  {
    $msg = "Password and Confirm Password do not match";
  }
}

if($_GET['secret'])
{
  $email = base64_decode($_GET['secret']);
  $check_details = mysqli_query($conn,"SELECT Email FROM passenger_info where Email='$email'");
  $res = mysqli_num_rows($check_details);
  if($res>0)
    { 
    
    ?>
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
   
  </div><!-- Section: Design Block -->
  <section class="text-center text-lg-start" style="text-align:center;">
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
    
    
      <div class="row g-0 align-items-center">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <div class="card cascading-right " style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              margin-left:430px;
              margin-right:430px;
              ">
            <div class="card-body p-5 s text-center "><img src="images/o.png" style="height: 120px;width: 130px;">
              <h2 class="display-6 mb-5">Reset Password</h2>
              
                <!-- 2 column grid layout with text inputs for the first and last names -->
<div>
  </div>
<form method="post" action="">
<input type="hidden" name="email" value="<?php echo $email; ?>"/>
      

<div class="form-group">
       <label for="pwd">Password</label>
       <input type="password" name="pwd" id="pwd" placeholder="Enter Password" required 
       data-parsley-type="pwd" data-parsley-trigg
       er="keyup" class="form-control" minlength="0"  maxlength="8"/>
      </div>

      <div class="form-group">
       <label for="cpwd">Confirm Password</label>
       <input type="password" name="cpwd" id="cpwd" placeholder="Enter Confirm Password" required data-parsley-type="cpwd" minlength="0"  maxlength="8" data-parsley-trigg
       er="keyup" class="form-control"/>
      </div>
<br>
      <div class="form-group">
       <input type="submit" id="login" name="pwdrst" value="Reset Password" class="btn btn-warning" />
       </div>
       
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
  <?php } } ?>
</body>
</html>

