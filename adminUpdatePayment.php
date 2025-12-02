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
                <div class="row">
                <?php  
                if(isset($_SESSION["message"]))
                {
                    echo "<button  class='btn btn-dark btn-lg'>".$_SESSION['message']."</button>";
                    unset($_SESSION["message"]);
                }
                ?>
               </div>
                <form class="mx-1 mx-md-4" method="POST" action="aaaUpdatePayment.php"> 
                    <div class="row">
                        <div class="col-md-6">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Payment ID</label>
                     <input type="text" class="form-control" value="<?php echo htmlspecialchars($_GET['payment_id'] ?? '', ENT_QUOTES); ?>" name="payment_id" placeholder="">


                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0"><label for="text" class="">Passenger ID</label>
                     <input type="text" class="form-control" value="<?php echo htmlspecialchars($_GET['PassengerID'] ?? '', ENT_QUOTES); ?>" name="PassengerID" placeholder="">


                    </div>
                  </div>
            </div>
            </div>
            <div class="row">
                  <div class="col-md-6">
      <label for="cc-expiration">Booking Id:</label>
      <input type="text"  value="<?php echo htmlspecialchars($_GET['booking_id'] ?? '', ENT_QUOTES); ?>" name="booking_id" class="form-control" minlength="0"  maxlength="8" placeholder="" >
      
    </div>

    <div class="col-md-6">
      <label for="cc-expiration">Total amount</label>
      <input type="number"  name="payment_amount" class="form-control" minlength="0" maxlength="11" placeholder="" >
      
    </div>
            </div>
            <div class="row">
<div class="col-md-12">
    <label  class="form-label">Card of Payment:</label>
    <select class="form-select" aria-label="Default select example"  name="CardofPayment" >
      <option selected>Credit card</option>
      <option value="1">Debit card</option>
      <option value="2">PayPal</option>
    </select>
  </div>
</div>
<div class="row">
    

          <div class="col-md-12">
            <label for="cc-name">Name on card</label>
            <input type="text" name="Name_on_card" class="form-control" minlength="0" maxlength="20"  placeholder="Full name as displayed on card" >   
         </div>

    <div class="row">
          <div class="col-md-12 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="number" class="form-control" name="Credit_card_number" minlength="0" maxlength="20" placeholder="" >
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
    </div>

        <div class="row">

          <div class="col-md-4 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="number" class="form-control" name="Expiration" minlength="0" maxlength="5" placeholder="" >
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="number" class="form-control" name="CVC" minlength="0" maxlength="3" placeholder="" >
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="cc-cvv">Date</label>
            <input type="Date" class="form-control" name="Date" placeholder="" >
         
            </div>
            </div>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-warning btn-lg" value="Update" name="Update" >
                    
                  
                  </div>

               

             </div>
             <br><br>
              <div class="col-md-10 col-lg-6 col-xl-7  align-items-center order-1 order-lg-2">

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
