

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="login.css">
  <title>Hello, world!</title>
</head>
<?php
include('navbar2.php');
?>

<body>
<section id="log">

  <div class="container-fluid login" style="background-image: linear-gradient(to right, #b9b4f3 , #fadae7); min-height: 40.8rem;">
    <div class="row">
      <div class="box">
      <?php

       if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
          {
    echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
    unset($_SESSION['status']);
         }
        ?>
        <h3>Login <span style="opacity: 0.5;">or</span> Signup</h3>
        <form action="logincode.php" method="POST">
        <div class="input-group mt-4 mb-4">
          <span class="input-group-text" id="basic-addon1">+91</span>
          <input type="integer" class="form-control" placeholder="Mobile Number" aria-label="phnum"
            aria-describedby="basic-addon1">
        </div>
        <p class="mb-4">By continuing, I agree to the <span> <a href="tearms/tearms.php"> Term of Use </a></span>& <span> <a
              href="PrivacyPage/privacy.php">Privacy Policy
            </a></span></p>
        <div class="d-grid gap-2">
        <button  class="btn login-btn" name="login_btn" type="submit">CONTINUE</button>
          <!-- <button class="btn login-btn" type="button">CONTINUE</button> -->
        </div>
        <p class="help mt-3">Have trouble logging in? <span id="hideLogin"> Get Help</span></p>
        <img style="width: 50%; margin-left: 176px; margin-top: 50px;" src="log.png" alt="">
      </div>
    </div>
  </div>

  <div class="container-fluid gethelp" style="background-image: linear-gradient(to right, #b9b4f3 , #fadae7); min-height: 40.8rem;">
    <div class="row">
      <div class="box">
        <i style="position: relative; top: -67px;" class="fa fa-long-arrow-left" id="hideGetHelp" aria-hidden="true"></i>
        <div class="input-group mt-2 mb-4 px-2">
          <i class="fa fa-user-secret" style="font-size:50px;" aria-hidden="true"></i>
        </div>
        <h3 class="px-2 mb-0">Account Assistance</h3>
        <p class="px-2" style="opacity: 0.5;">Let us know what issue you are facing?</p>
        <p class="px-2 mb-1">I forgot my password <span style="float: right;"><i style="color: black;" data-bs-toggle="collapse"
          data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample"
          class="fa fa-angle-down" aria-hidden="true"></i>
      </span></p>
    <div class="collapse" id="collapseExample1">
      <div class="card card-body">
        <h3 class="mb-0 reset-btn" style="font-size: 25px;">Reset Password</h3>
        <p style="opacity: 0.5; font-size: 15px; margin-bottom: 0;">Enter your email or mobile number, we will send a link to reset your password</p>
        <div class="input-group mt-4 mb-4">
          <input type="integer" class="form-control" placeholder="Email or Mobile Number" aria-label="phnum"
            aria-describedby="basic-addon1">
        </div>
        <div class="d-grid gap-2">
          <button class="btn" type="button" style="color: #fff;border-radius: 0;">Send Link</button>
        </div>
      </div>
    </div>
    <hr>
    <p class="px-2 mb-1 ">I can't reset my password <span style="float: right;"><i style="color: black;" data-bs-toggle="collapse"
          data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"
          class="fa fa-angle-down" aria-hidden="true">
        </i></span></p>
    <div class="collapse" id="collapseExample2">
      <div class="card card-body">
        <h3 class="mb-0 reset-btn" style="font-size: 25px;">I cannot reset my Password</h3>
        <p style="opacity: 0.5; font-size: 15px; margin-bottom: 0;">Enter the mobile number associated with Ishtore Account</p>
        <div class="input-group mt-4 mb-4">
          <input type="integer" class="form-control" placeholder="Mobile Number" aria-label="phnum"
            aria-describedby="basic-addon1">
        </div>
        <div class="d-grid gap-2">
          <button class="btn" type="button">Continue</button>
        </div>
      </div>
    </div>
    <hr>
    <p class="px-2 mb-1 ">I don't remember my email or mobile <span style="float: right;"><i style="color: black;"
          data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false"
          aria-controls="collapseExample" class="fa fa-angle-down" aria-hidden="true"></i></span></p>
    <div class="collapse" id="collapseExample3">
      <div class="card card-body">
        <h3 class="mb-0 reset-btn" style="font-size: 25px;">I don't remember my email or mobile number</h3>
        <p style="opacity: 0.5; font-size: 15px; margin-bottom: 0;">ANY OTHER ISSUE CONTACT US</p>
        <div style="height: 66px; background-color: rgb(0, 0, 0); border-radius: 5px; margin-top: 29px;">
          <p style="text-align: center; margin: auto;" class="customer-btn">Customer Care Number</p>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="index.js"></script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <script>
      // Get the modal
      var modal = document.getElementById("myModal1");
  
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn1");
  
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close1")[0];
  
      // When the user clicks the button, open the modal 
      btn.onclick = function () {
        modal.style.display = "block";
      }
  
      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      }
  
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
</body>

</html>