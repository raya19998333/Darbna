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
               
                <form class="mx-1 mx-md-4" method="POST" action="aaaUpdateOwner.php"> 
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Owner ID</label>
                     <input type="text" class="form-control" value="<?php echo htmlspecialchars($_GET['OwnerID'] ?? '', ENT_QUOTES); ?>" name="OwnerID" placeholder="">


                    </div>
                  </div>

    <!--Grid column-->
    <div class="row">
        <div class="col-md-6"> 
            <div class="md-form mb-0"><label for="name" class="">Owner Full name</label>
                <input type="text" name="OName"  minlength="0" maxlength="20" class="form-control" placeholder="  " >
                
            </div>
        </div>

        <div class="col-md-6">
        
          <div class="md-form mb-0"><label for="text" class="">Address</label>
              <input type="text"  minlength="0" maxlength="18" class="form-control" name="Address" placeholder="  " >
              
          </div>
      </div>
              </div></div>
        <!--Grid column-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-4">
                <div class="md-form mb-0"><label for="name" class="">Email</label>
                    <input type="Email"   value="<?php echo htmlspecialchars($_GET['Email'] ?? '', ENT_QUOTES); ?>" minlength="0" maxlength="40" id="name" name="Email" class="form-control" >
                    
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
              <input type="number" id="Phone" name="Phone" class="form-control" >
                  
              </div>
          </div></div>

          <div class="row">

            <!--Grid column-->
          
            <!--Grid column-->
    <div class="col-md-6">
              <div class="md-form mb-0"><label for="text" class="">Age</label>
                  <input type="number"  class="form-control"  minlength="0" maxlength="3" name="Age" >
                  
              </div>
          </div>
            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0"><label for="text" class="">Birthday</label>
                   <input class="form-control" type="date" name="Birthday" >
                    
                </div></div>
                
                <div class="col-md-7">
                    <div class="md-form mb-0"><label for="text" class="">License Number</label>
                       <input class="form-control" type="number"  minlength="0" maxlength="10" name="Licensenumber" >
                        
                    </div></div>
                    <div class="col-md-5">
                      <div class="md-form mb-0"><label for="text" class="">Password</label>
                         <input class="form-control"  value="<?php echo htmlspecialchars($_GET['Password'] ?? '', ENT_QUOTES); ?>" type="password"  minlength="0" maxlength="8" name="Password">
                          
                      </div></div>
                 
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-warning btn-lg" value="Update" name="Update" >
                    
                  
                  </div>

               

              </div>
              <br><br>
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
