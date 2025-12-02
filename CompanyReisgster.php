<?php 
session_start();?>
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
  <style>
    body {
  max-width: 1200px;
  margin: 0 auto;
  color: rgb(0, 0, 0);
  font-family: 'Helvetica Neue', Helvetica, Tahoma, Arial, sans-serif;
}
input, button {
  font-size: 16px;
  border: none;
  width: 100%;
  outline: 0;
  font-family: 'Helvetica Neue', Helvetica, Tahoma, Arial, sans-serif;
  padding: 10px 14px;
  border-radius: 7px;
  color: #ffffff28;
  cursor: pointer;
}



button {
  background: transparent;
  border: 2px solid rgba(255,255,255,0.2);
  color: rgba(255,255,255,0.45);
  font-weight: bold;
}

  </style>
</head>
<body style="background-color: rgba(207, 210, 200, 0.79);"  >
  <section >
    
<form class='shadow-lg' style="text-align: center;background-color: rgba(255, 255, 255, 0.518);margin-top: 120px;padding: 30px;border-radius: 30px;" method="POST" action="addcompany.php">
    <br><br><br>
    <img src="images/o.png" width="150px" height="140px">
    <h1 class="display-3">Register </h1>
    <div class="row">
        <div class="col-md-12">

        <?php   if(isset($_SESSION['state']))
                {
                    echo '<div class="offcanvas offcanvas-start show text-bg-warning" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">';
                    echo  '<div class="offcanvas-header">';
                    echo '<h5 class="offcanvas-title" id="offcanvasDarkLabel">Notification</h5>';
                    echo  '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvasDark" aria-label="Close"></button>';
                    echo '</div>';
                    echo '<div class="offcanvas-body">'; 
                    echo "<p  class='btn btn-dark btn-lg'>".$_SESSION['state']."</p>";
                    unset($_SESSION['state']);
                 
                    echo '</div>';
                    echo '</div>';
                   
                }?>

        </div>
    </div>
    <div class="row">

        <!--Grid column-->
       

        <!--Grid column-->
       <div class="col-md-6">
            <div class="md-form mb-0"><label for="name" class="">Company name</label>
                <input type="text" id="name" name="Company_Name" class="form-control" minlength="0" maxlength="30" required>
                
            </div>
        </div>
         <div class="col-md-6">
                <div class="md-form mb-0"><label for="name" class="">Phone</label>
                    <input type="number"  id="Phone" name="Phone" class="form-control" minlength="0" maxlength="8" required>
                    
                </div>
            </div>
        <!--Grid column-->  
         </div>

        <div class="row">

    <div class="col-md-4">
              <div class="md-form mb-0"><label for="text" class="">Address</label>
                  <input type="text" name="Address" class="form-control" minlength="0" maxlength="20" required>
                  
              </div>
          </div>
          <div class="col-md-4">
                <div class="md-form mb-0"><label for="name" class="">Fax</label>
                    <input type="number"  name="Fax" class="form-control" minlength="0" maxlength="12" required>
                    
                </div>
            </div>
            <div class="col-md-4">
              <div class="md-form mb-0"><label for="text" class="">Transport Number</label>
                  <input type="number"  class="form-control" name="Transport_Number" minlength="0" maxlength="20" required>
                  
              </div>
          </div>
            </div>
          <div class="row"> 
            <!--Grid column--><div class="col-md-6">
          <div class="md-form mb-0"><label for="text" class="">Email</label>
              <input type="Email"  class="form-control" name="Email" minlength="0" maxlength="30" required>
              
          </div>
      </div>
      
        <div class="col-md-6">
                        <div class="md-form mb-0"><label for="name" class="">Password</label>
                            <input type="Password"  name="Password" class="form-control" minlength="0" maxlength="8" required>
                            
                        </div>
                    </div>
            </div>    
            <!--Grid column-->
    
            <!--Grid column-->
           
         
          
                </div></div><br><br><br><br><input type="submit" class="btn btn-warning btn-lg" value="Register" name="Register">
            </div>
           
            
</form>
</section><br><br>
</body>
<script>
    document.getElementById('Phone').addEventListener('input', function (e) {
        var maxDigits = 8;
        var input = e.target;
        if (input.value.length > maxDigits) {
            input.value = input.value.slice(0, maxDigits);
        }
    });
</script>