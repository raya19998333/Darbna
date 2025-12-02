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
    
<form style="text-align: center;background-color: rgba(255, 255, 255, 0.518);margin-top: 12px;padding: 30px;border-radius: 50% 20% / 10% 40%;" method="POST" class="shadow-lg " action="addOwner.php">

    <img src="images/o.png" width="150px" height="140px">
    <h1 class="display-4">Register </h1>
    <div class="row"> <div class="col-md-12">
    <?php  
                if(isset($_SESSION['state6']))
                {
                    echo "<button  class='btn btn-dark'>".$_SESSION['state6']."</button>";
                    unset($_SESSION['state6']);
                }
                ?></div>


        <!--Grid column-->
    <div class="col-md-6">
            <div class="md-form mb-0"><label for="name" class="">Owner Full name</label>
                <input type="text" name="OName"  minlength="0" maxlength="20" class="form-control" placeholder="  " required>
                
            </div>
        </div>

        <div class="col-md-6">
          <div class="md-form mb-0"><label for="text" class="">Address</label>
              <input type="text"  minlength="0" maxlength="18" class="form-control" name="Address" placeholder="  " required>
              
          </div>
      </div>
              </div></div>
        <!--Grid column-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-4">
                <div class="md-form mb-0"><label for="name" class="">Email</label>
                    <input type="Email"  minlength="0" maxlength="40" id="name" name="Email" class="form-control" required>
                    
                </div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-5">
                <div class="md-form mb-0"><label for="text" class="">Gender</label>
                    <select class="form-control" name="Gender"><option>Female</option>
                    <option>Male</option>
                    </select>
                    
                </div>
            </div>
            <div class="col-md-3">
              <div class="md-form mb-0"><label class="">Phone</label>
              <input type="number" id="Phone" name="Phone" class="form-control" required>
                  
              </div>
          </div></div>

          <div class="row">

            <!--Grid column-->
          
            <!--Grid column-->
    <div class="col-md-6">
              <div class="md-form mb-0"><label for="text" class="">Age</label>
                  <input type="number" id="age" name="age" class="form-control" required>
                  
              </div>
          </div>
            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0"><label for="text" class="">Birthday</label>
                   <input class="form-control" type="date" name="Birthday" required>
                    
                </div></div>
                
                <div class="col-md-7">
                    <div class="md-form mb-0"><label for="text" class="">License Number</label>
                       <input class="form-control" type="number"  minlength="0" maxlength="10" name="Licensenumber" required>
                        
                    </div></div>
                    <div class="col-md-5">
                      <div class="md-form mb-0"><label for="text" class="">Password</label>
                         <input class="form-control" type="password"  minlength="0" maxlength="8" name="Password" required>
                          
                      </div></div>
                      

      
                    <br><br><br><br> <input type="submit" class="btn btn-warning btn-lg" value="Register" name="Register">
            </div>
           
            
</form>
</section><br><br>
</section></body>
<script>
    document.getElementById('Phone').addEventListener('input', function (e) {
        var maxDigits = 8;
        var input = e.target;
        if (input.value.length > maxDigits) {
            input.value = input.value.slice(0, maxDigits);
        }
    });
    document.getElementById('age').addEventListener('input', function (e) {
        var maxDigits = 2;
        var input = e.target;
        if (input.value.length > maxDigits) {
            input.value = input.value.slice(0, maxDigits);
        }
    });
</script>
</body>