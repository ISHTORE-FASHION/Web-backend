<!DOCTYPE html> 
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c98256b770.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="login.css">

    
    <title>Document</title>
</head>
<body>

   
    <!-- NAVBAR SECTION -->
    <section class="navbar-section">
        <div class="main-navbar">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand navmyBtn2" role='button'><img style='margin-left: 1rem;width: 20px;'src='./bar.png'></a>
                <div id="navmyModal2" class="navmodal2">
                  <div class="navmodal-content2">
                    
                    <img style='width: 100%;height: auto;' src='./11.jpg'>
                    <div class="container" style="margin-top: 2rem;">
                      <div class="row">
                        
                        <div class="col-12" style="padding-left: 1rem;font-family:'Roboto', sans-serif; ">
                          <ul class='navul' style='list-style:initial;'>
                            <li style="margin-bottom: 0.5rem;"><a style="text-decoration: none; color: black;font-size: 0.8rem;" href="profile.html">MEN</a></li>
                            <li style="margin-bottom: 0.5rem;"><a style="text-decoration: none; color: black;font-size: 0.8rem;" href="#">WOMEN</a></li>
                            <li style="margin-bottom: 0.5rem;"><a style="text-decoration: none; color: black;font-size: 0.8rem;" href="#">KIDS</a></li>
                            <li style="margin-bottom: 0.5rem;"><a style="text-decoration: none; color: black;font-size: 0.8rem;" href="#">UNISEX</a></li>
                            <li style="margin-bottom: 0.5rem;"><a style="text-decoration: none; color: black;font-size: 0.8rem;" href="#">ACCESSORIES</a></li>
                          </ul>
                         
                          <!-- <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-primary p-0"
                              style="font-size: 27px;">Login</button>
                            <button type="button" onclick="document.location='loginmodal.html'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                            Signup</button>
                          </div> -->
                        </div>
                        <ul class='navul' style="padding: 0; list-style: none; margin-top: 1.5rem;text-align: end;">
                          <li style="margin-bottom: 0.3rem;"><a style="text-decoration: none; color: grey!important;; font-size: 0.7rem;" href="#">ACCOUNT</a></li>
                          <li style="margin-bottom: 0.3rem;"><a style="text-decoration: none; color: grey!important; font-size: 0.7rem;" href="#">CONTACT US</a></li>
                          <li style="margin-bottom: 0.3rem;"><a style="text-decoration: none; color: grey!important;font-size: 0.7rem;" href="#">FAQs</a></li>
                          <li style="margin-bottom: 0.3rem;"><a style="text-decoration: none; color:grey!important;;font-size: 0.7rem;" href="#">PRIVACY</a></li>
                          <li style="margin-bottom: 0.3rem;"><a style="text-decoration: none; color: grey!important;;font-size: 0.7rem;" href="#">TERMS & CONDITIONS</a></li>
                        </ul>
                        <p style="font-size:0.9rem; text-align: center;margin: 0; margin-bottom: 0.5rem;"><a
                          style="text-decoration: none; color: #a1a0f8!important;font-size: 1rem;" href="loginmodal.html">Login</a> <span
                          style="opacity: 0.7;">/</span><a style="text-decoration: none; color:#a1a0f8!important;font-size: 1rem;"
                          href="loginmodal.html">Signup</a></p>
                        <hr style='padding:0;width: 70%; margin-bottom: 3rem;margin-right: auto; margin-left:auto; border: 2px solid #6e6cd4;'>
                      </div>
                    </div>
                  </div>
      
                </div>
                <a class="navbar-brand brand " href="#"><img src='./logo.png'></a>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navul" style="align-items: center;">
                   
                      
                
                    <li class="nav-item ">
                      <a class="nav-link" href="#"role="button" data-bs-toggle="modal"
                      data-bs-target="#navModal1">
                        WHAT'S NEW
                      </a>
                      <div class="modal fade" id="navModal1" tabindex="-1" aria-labelledby="navModal1" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-2 imgcontainer">
                                    <div class="container" style="border:2px solid black;">
                                      <img src="7.jpeg" alt="">
                                    </div>
                                    <div class="container"
                                      style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                      SHOP NOW
                                    </div>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="row">
                                      <div class="col-md-4 main">
                                        <p class="mb-0 cat"> <a href="#">New In
                                            Clothing</a></p>
                                        <p class="mb-0 cat"><a href="#">New In Active
                                            Wear</a></p>
                                        <p class="mb-0 cat"><a href="#">New In
                                            Accessories</a></p>
                                        <p class="mb-0 cat"><a href="#">New In Beauty</a>
                                        </p>
                                        <p class="mb-0 cat"><a href="#">New In Bags</a>
                                        </p>
                                        <p class="mb-0 cat"><a href="#">New IN Beach
                                            Wear</a></p>
                                        <p class="mb-0 cat"><a href="#">New IN Shoes</a>
                                        </p>
                                      </div>
                                      <div class="col-md-4 main">
                                        <p class="mb-0 subcat"><a href="#">Jeans</a></p>
                                        <p class="mb-0 subcat"><a href="#">T-Shirt</a></p>
                                        <p class="mb-0 subcat"><a href="#">Shirt</a></p>
                                        <p class="mb-0 subcat"><a href="#">Bottoms</a></p>
                                        <p class="mb-0 subcat"><a href="#">Cardigans</a></p>
                                        <p class="mb-0 subcat"><a href="#">Couple
                                            T-Shirts</a></p>
                                        <p class="mb-0 cat"><a href="#">New IN Men's
                                            Wear</a></p>
                                        <p class="mb-0 cat"><a href="#">New IN Women's
                                            Wear</a></p>
                                        <p class="mb-0 cat"><a href="#">New IN Kids's
                                            Wear</a></p>
                                        <p class="mb-0 cat"><a href="#">New IN
                                            Accessories</a></p>
                                      </div>
                                      <div class="col-md-4 main">
                                        <p class="mb-0 cat"><a href="#">New In Shoes and
                                            Accessories</a></p>
                                        <p class="mb-0 cat"><a href="#">New In
                                            BagPack</a></p>
                                        <p class="mb-0 cat"><a href="#">New In Active
                                            Wear</a></p>
                                        <p class="mb-0 cat"><a href="#">New In
                                            Nightwear</a></p>
                                        <p class="mb-0 cat"><a href="#">New In Stocks</a>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-2 imgcontainer">
                                    <div class="container" style="border:2px solid black;">
                                      <img src="7.jpeg" alt="">
                                    </div>
                                    <div class="container"
                                      style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                      SHOP NOW
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="modal"
                        data-bs-target="#navModal2">
                          MEN
                        </a>
                        <div class="modal fade" id="navModal2" tabindex="-1" aria-labelledby="navModal2" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-2 imgcontainer" style='padding: 0;'>
                                      <div class="container" style="border:2px solid black;">
                                        <img src="7.jpeg" alt="">
                                      </div>
                                      <div class="container"
                                        style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                        SHOP NOW
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="row">
                                        <div class="col-md-5 main">
                                          <p class="mb-0 cat"> <a href="#">MEN'S WEAR</a>
                                          </p>
                                          <p class="mb-0 cat"><a href="#">NEW IN</a></p>
                                          <p class="mb-0 cat"><a href="#">T-SHIRTS</a></p>
                                          <p class="mb-0 cat"><a href="#">SHIRTS</a></p>
                                          <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                                          <p class="mb-0 cat"><a href="#">ACCESSORIES</a>
                                          </p>
                                          <p class="mb-0 cat"><a href="#">PREMIUN COLLECTIONS</a></p>
                                          <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                                          <p class="mb-0 cat"><a href="#">ACTIVE WEAR</a>
                                          </p>
                                        </div>
                                        <div class="col-md-4 main">
                                          <p class="mb-0 cat"><a href="#">OUTWEAR</a></p>
                                          <p class="mb-0 subcat"><a href="#">SweatShirt</a></p>
                                          <p class="mb-0 subcat"><a href="#">Hoodies</a></p>
                                          <p class="mb-0 subcat"><a href="#">Jackets</a></p>
                                          <p class="mb-0 subcat"><a href="#">Formal Wear</a></p>
                                          <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                                          <p class="mb-0 subcat"><a href="#">Denims</a></p>
                                          <p class="mb-0 subcat"><a href="#">Shorts</a></p>
                                          <p class="mb-0 subcat"><a href="#">Formal Pants</a></p>
                                          <p class="mb-0 subcat"><a href="#">Leather Pants</a></p>
                                        </div>
                                        <div class="col-md-3 main">
                                          <p class="mb-0 cat"><a href="#"><b>TOPS</b></a></p>
                                          <p class="mb-0 subcat"><a href="#">Long Sleeve Tops</a></p>
                                          <p class="mb-0 subcat"><a href="#">Polo Tshirts</a></p>
                                          <p class="mb-0 subcat"><a href="#">Cotton Shirts</a></p>
                                          <p class="mb-0 subcat"><a href="#">Half Sleeve Tops</a></p>
                                          <p class="mb-0 cat"><a href="#">SHOP BY OCCASION</a></p>
                                          <p class="mb-0 subcat"><a href="#">Party Wear</a></p>
                                          <p class="mb-0 subcat"><a href="#">Casual Wear</a></p>
                                          <p class="mb-0 subcat"><a href="#">Street Punk</a></p>
                                          <p class="mb-0 subcat"><a href="#">Formal Wear</a></p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-2 imgcontainer">
                                      <div class="row" style="padding: 27px;">
                                        <div class="col-md-6" style="margin-top: 51px;">
                                          <h5 style="color: rgb(228, 102, 93); font-weight: bold;">BUY 2 GET 1</>
                                          <h5>FREE</h5>
                                        </div>
                                        <div class="col-md-12">
                                          <img class='spimg'src="7.jpeg" alt="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"  role="button" data-bs-toggle="modal"
                        data-bs-target="#navModal3">
                          WOMEN
                        </a>
                        <div class="modal fade" id="navModal3" tabindex="-1" aria-labelledby="navModal3" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-2 ">
                                      <div class="container wimgcontainer" style="padding:0px; margin: 6px 0px;">
                                        <img src="bombay.jpg" alt="" style="height: 120px; width: 161px;">
                                      </div>
                                      <div class="container wimgcontainer" style="padding:0px; margin: 6px 0px;">
                                        <img src="bombay.jpg" alt="" style="height: 120px; width: 161px;">
                                      </div>
                                    </div>
                                    <div class="col-md-6 wcontent">
                                      <div class="row">
                                        <div class="col-md-4 wmain">
                                          <p class="mb-0 cat"> <a href="#">WOMEN'S CLOTHING</a></p>
                                          <p class="mb-0 cat"><a href="#">DRESSES</a></p>
                                          <p class="mb-0 cat"><a href="#">BLOUSES</a></p>
                                          <p class="mb-0 cat"><a href="#">T-SHIRTS</a></p>
                                          <p class="mb-0 cat"><a href="#">SWEATSHIRTS</a></p>
                                          <p class="mb-0 cat"><a href="#">ACCESSORIES</a></p>
                                          <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                                        </div>
                                        <div class="col-md-4 main">
                                          <p class="mb-0 cat"><a href="#">SWEATERS</a></p>
                                          <p class="mb-0 subcat"><a href="#">cardigans</a></p>
                                          <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                                          <p class="mb-0 subcat"><a href="#">Pullovers</a></p>
                                          <p class="mb-0 cat"><a href="#">SWEATSHIRTS</a></p>
                                          <p class="mb-0 subcat"><a href="#">Hoddies</a></p>
                                          <p class="mb-0 subcat"><a href="#">Oversize</a></p>
                                          <p class="mb-0 cat"><a href="#">OUTWEAR</a></p>
                                          <p class="mb-0 subcat"><a href="#">Coats</a></p>
                                          <p class="mb-0 subcat"><a href="#">Jackets</a></p>
                                        </div>
                                        <div class="col-md-4 main">
                                          <p class="mb-0 cat"><a href="#">JUMPSUIT & ROMPERS</a></p>
                                          <p class="mb-0 cat"><a href="#">BLOUSES</a></p>
                                          <p class="mb-0 cat"><a href="#">TANK TOPS</a></p>
                                          <p class="mb-0 cat"><a href="#">DRESSES</a></p>
                                          <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                                          <p class="mb-0 subcat"><a href="#">Jeans</a></p>
                                          <p class="mb-0 subcat"><a href="#">Straight Pants </a></p>
                                          <p class="mb-0 subcat"><a href="#">Leather Pants</a></p>
                                          <p class="mb-0 subcat"><a href="#">Shorts</a></p>
                                          <p class="mb-0 subcat"><a href="#">Skirts</a></p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="container p-0 wimgcontainer">
                                        <h3>Shop By Style</h3>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                            <div>
                                              <p>Beachwear</p>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                            <div style="margin-left: 30px;">
                                              <p>Party</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="align-items-center">
                                              <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                              <p>Sporty</p>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                            <div style="margin-left: 20px;">
                                              <p>At Home</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"role="button" data-bs-toggle="modal"
                        data-bs-target="#navModal4">
                          KIDS
                        </a>
                        <div class="modal fade" id="navModal4" tabindex="-1" aria-labelledby="navModal4" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-2 imgcontainer">
                                      <div class="container" style="border:2px solid black;">
                                        <img src="7.jpeg" alt="">
                                      </div>
                                      <div class="container"
                                        style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                        SHOP NOW
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="row">
                                        <div class="col-md-4 main">
                                          <p class="mb-0 cat"> <a href="#">KIDS WEAR</a></p>
                                          <p class="mb-0 cat"><a href="#">VIEW ALL</a></p>
                                          <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                                          <p class="mb-0 cat"><a href="#">New In</a></p>
                                          <p class="mb-0 cat"><a href="#">TOPS</a></p>
                                          <p class="mb-0 cat"><a href="#">BOTTOM</a></p>
                                          <p class="mb-0 cat"><a href="#">New IN Shoes</a></p>
                                          <p class="mb-0 cat"><a href="#">SWEAT SHIRT</a></p>
                                        </div>
                                        <div class="col-md-4 main">
                                          <p class="mb-0 cat"><a href="#">BABY GIRL'S CLOTHING</a></p>
                                          <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                                          <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                                          <p class="mb-0 subcat"><a href="#">Dresses</a></p>
                                          <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                                          <p class="mb-0 subcat"><a href="#">Partywear</a></p>
                                          <p class="mb-0 cat"><a href="#">BABY BOY'S CLOTHING</a></p>
                                          <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                                          <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                                        </div>
                                        <div class="col-md-4 main">
                                          <p class="mb-0 cat"><a href="#">BABY'S ACCESSORIES</a></p>
                                          <p class="mb-0 subcat"><a href="#">Socks & Tights</a></p>
                                          <p class="mb-0 subcat"><a href="#">Hats & Gloves</a></p>
                                          <p class="mb-0 cat"><a href="#">SHOP BY TREND</a></p>
                                          <p class="mb-0 subcat"><a href="#">Animal Print</a></p>
                                          <p class="mb-0 subcat"><a href="#">Cartoon Print</a></p>
                                          <p class="mb-0 subcat"><a href="#">Floral</a></p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-2 imgcontainer">
                                      <div class="container" style="border:2px solid black;">
                                        <img src="7.jpeg" alt="">
                                      </div>
                                      <!-- <div class="container"
                                        style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                        SHOP NOW
                                      </div> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="modal"
                        data-bs-target="#navModal5">
                          SALE
                        </a>
                        <div class="modal fade" id="navModal5" tabindex="-1" aria-labelledby="navModal5" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-4 imgcontainer">
                                      <h3 >Brand Of The Week</h3>
                                      <img src="11.jpg" style="width: 100%;" alt="">
                                      <!-- <div class="container"
                                        style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                        SHOP NOW
                                      </div> -->
                                    </div>
                                    <div class="col-md-4 ">
                                      <div class="row">
                                        <div class="col-md-6 main">
                                          <p class="mb-0 cat"> <a href="#">KIDS WEAR</a></p>
                                          <p class="mb-0 cat"><a href="#">VIEW ALL</a></p>
                                          <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                                          <p class="mb-0 cat"><a href="#">New In</a></p>
                                          <p class="mb-0 cat"><a href="#">TOPS</a></p>
                                          <p class="mb-0 cat"><a href="#">BOTTOM</a></p>
                                          <p class="mb-0 cat"><a href="#">New IN Shoes</a></p>
                                          <p class="mb-0 cat"><a href="#">SWEAT SHIRT</a></p>
                                        </div>
                                        <div class="col-md-6 main">
                                          <p class="mb-0 cat"><a href="#">BABY GIRL'S CLOTHING</a></p>
                                          <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                                          <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                                          <p class="mb-0 subcat"><a href="#">Dresses</a></p>
                                          <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                                          <p class="mb-0 subcat"><a href="#">Partywear</a></p>
                                          <p class="mb-0 cat"><a href="#">BABY BOY'S CLOTHING</a></p>
                                          <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                                          <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4 main">
                                      <p class="cat">SPECIAL OFFERS</p>
                                      <div class="row">
                                        <div class="col-sm-6 wimgcontainer">
                                          <p class="subcat">FLAT 10% OFF</p>
                                          <img class="offerimg" src="33.jpeg" alt="">
                                          <img class="offerimg" src="33.jpeg" alt="">
                                          <img class="offerimg" src="33.jpeg" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                          <p class="subcat">FLAT 20% OFF</p>
                                          <img class="offerimg" src="33.jpeg" alt="">
                                          <img class="offerimg" src="33.jpeg" alt="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" role="button" id="navmyBtn3">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                        <div id="navmyModal3" class="navmodal3">
                          <div class="navmodal-content3" >
                            
                            <div class="container" style='margin-bottom: 2rem;'>
                              <div class="row">
                                <!-- <div class="input-group mb-3 mt-3">
                                  <i class="fa fa-search"></i>
                                   <span class="input-group-text" id="basic-addon1"></span> 
                                  <input type="text" class="form-control" placeholder="Casual Shirt" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                </div> -->
                                <div class="input-group" style='    background-color: #f2f2f2;
                                height: 3rem;
                                width: 95%;
                                margin: auto;
                                margin-top: 2rem;
                                margin-bottom: 1rem;
                                border-radius: 0.8rem;'>
                                  <i class="fa fa-search " style='margin:auto'></i>
                                  <input class='navbarinput' type="text" class="form-control" placeholder="Casual Shirt" >
                                  </div>
                                <div class="col-12" style='margin-left: 7%;'>
                                  <p style='margin-bottom: 10px;'><a class="title" href="#">SHOP BY BRAND</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Shirt By Suited</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Shirt By IDC</a> </p>
                                  <p style='margin-bottom: 10px;'><a class="subtitle" href="#">Shirt By Sukoon</a> </p>
                                  <p style='margin-bottom: 10px;' ><a class="title" href="#">SHOP BY MATERIAL</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Cotton Shirt</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Polyster Shirt</a> </p>
                                  <p style='margin-bottom: 10px;'><a class="subtitle" href="#">Polyster T-Shirt</a> </p>
                                  <p style='margin-bottom: 10px;'><a class="title" href="#">SHOP BY OCCASION</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Party Wear</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Formal Wear</a> </p>
                                  <p style='margin-bottom: 7px;'><a class="subtitle" href="#">Casual Wearsub</a> </p>
                                 
                                  <!-- <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary p-0"
                                      style="font-size: 27px;">Login</button>
                                    <button type="button" onclick="document.location='loginmodal.html'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                                    Signup</button>
                                  </div> -->
                                </div>
                               
                              </div>
                            </div>
                          </div>
              
                        </div>
                        <!-- <div class="modal searchmodal fade" id="Modal6" tabindex="-1" aria-labelledby="Modal6" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content" style='margin-left: 100%;width: 400px;'>
                              <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                                  <input type="text" class="form-control" placeholder="Casual Shirt" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                </div>
                                <div class="main search">
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </li>
                      
                  </ul>
                 
                </div>
                <div >
                    <ul class="navbar-nav navbar-2-links navul">
                        <li class="nav-item">
                            <div class="d-flex flex-row " style="align-items: center; justify-content: center;">
                              <i class="fa fa-search searchicon mobileicons" aria-hidden="true"></i>
                             <i id="navmyBtn1" style='margin-bottom: 0.7rem; margin-right: 0.1rem;' class="fa fa-user fa-2x usericon" aria-hidden="true"></i>
                             <div id="navmyModal1" class="navmodal1">
                              <div class="navmodal-content1" >
                                <span class="close1">&times;</span>
                                <br>
                                <div class="container">
                                  <div class="row">
                                    <div class="col-3 p-0">
                                      <img style="width: 100%;" src="user.png" alt="">
                                      <img style="margin-left: -20px; margin-top: 78px; width: 60%;" src="circle.png" alt="">
                                    </div>
                                    <div class="col-9">
                                      <ul class='navul'style='list-style:initial;'>
                                        <li><a style="text-decoration: none; color: black; font-size: 0.9rem;" href="profile.html">Profile</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Wallet</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Track Order</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Help</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Gift Card</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Saved Address</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Saved Cards</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Contact Us</a></li>
                                        <li><a style="text-decoration: none; color: black;font-size: 0.9rem;" href="#">Log Out</a></li>
                                      </ul>
                                      <!-- <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-outline-primary p-0"
                                          style="font-size: 27px;">Login</button>
                                        <button type="button" onclick="document.location='loginmodal.html'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                                        Signup</button>
                                      </div> -->
                                    </div>
                                    <p class="mt-3" style="text-align: center; font-size:0.9rem;  ;"><a
                                        style="text-decoration: none; color: #a1a0f8!important;font-size: 1rem;" href="loginmodal.html">Login</a> <span
                                        style="opacity: 0.7;"> or </span><a style="text-decoration: none; color:#a1a0f8!important;font-size: 1rem;"
                                        href="loginmodal.html">Signup</a></p>
                                  </div>
                                </div>
                              </div>
                  
                            </div>
                            
                            <div
                            class="iconsop"
                            role="button"
                            data-bs-toggle="modal"
                            data-bs-target="#navModal8"
                          > 
                            <i
                              class="far fa-heart mobileicons"
                              aria-hidden="true"
                              style="font-size: 1.3rem; padding-right: 10px"
                            ></i>
                            <i
                              class="fa fa-shopping-cart shopping mobileicons"
                              aria-hidden="true"
                            ></i>
                          </div>
                            <div
                              class="modal fade"
                              id="navModal8"
                              tabindex="-1"
                              aria-labelledby="exampleModalLabel"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog cart-special">
                                <div class="modal-content">
                                  <div
                                    class="modal-header"
                                    style="background-color: black"
                                  >
                                    <h5
                                      class="modal-title cart-text"
                                      id="exampleModalLabel"
                                      style="color: white"
                                    >
                                      CART
                                    </h5>
                                    <button
                                      type="button"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"
                                    >
                                      <i class="fas fa-times"></i>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row mb-2">
                                      <div class="col-sm-3">
                                        <img
                                          src="user1.jpeg"
                                          alt=""
                                          style="width: 100%"
                                        />
                                      </div>
                                      <div class="col-sm-9">
                                        <div class="container mt-2">
                                          <h4>White Cotton Tshirt</h4>
                                          <div class="quantity mx-3">
                                            <button
                                              class="plus-btn btn btn-outline-success px-3 py-1"
                                              type="button"
                                              name="button"
                                            >
                                              +
                                            </button>
                                            <input
                                              type="text"
                                              name="name"
                                              value="1"
                                              class="count-increase"
                                            />
                                            <button
                                              class="minus-btn btn btn-outline-danger px-3 py-1"
                                              type="button"
                                              name="button"
                                            >
                                              -
                                            </button>
                                            <select
                                              style="float: right; margin-top: 5px"
                                            >
                                              <option>Select Size</option>
                                              <option>XXL</option>
                                              <option>XL</option>
                                              <option>Large</option>
                                              <option>Medium</option>
                                              <option>Small</option>
                                            </select>
                                          </div>
                                          <div class="price mt-3">
                                            <p>
                                              <strike class="mx-3 modal-price1"
                                                >1299
                                              </strike>
                                              999
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr />
      
                                    <div class="row mb-2">
                                      <div class="col-sm-3">
                                        <img
                                          src="user1.jpeg"
                                          alt=""
                                          style="width: 100%"
                                        />
                                      </div>
                                           <div class="col-sm-9">
                                        <div class="container mt-2">
                                          <h4>White Cotton Tshirt</h4>
                                          <div class="quantity mx-3">
                                            <button
                                              class="plus-btn btn btn-outline-success px-3 py-1"
                                              type="button"
                                              name="button"
                                            >
                                              +
                                            </button>
                                            <input
                                              type="text"
                                              name="name"
                                              value="1"
                                              class="count-increase"
                                            />
                                            <button
                                              class="minus-btn btn btn-outline-danger px-3 py-1"
                                              type="button"
                                              name="button"
                                            >
                                              -
                                            </button>
                                            <select
                                              style="float: right; margin-top: 5px"
                                            >
                                              <option>Select Size</option>
                                              <option>XXL</option>
                                              <option>XL</option>
                                              <option>Large</option>
                                              <option>Medium</option>
                                              <option>Small</option>
                                            </select>
                                          </div>
                                          <div class="price mt-3">
                                            <p>
                                              <strike class="mx-3 modal-price1"
                                                >1299
                                              </strike>
                                              999
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr />
      
                                    <div class="row mb-2">
                                      <div class="col-sm-3">
                                        <img
                                          src="user1.jpeg"
                                          alt=""
                                          style="width: 100%"
                                        />
                                      </div>
                                      <div class="col-sm-9">
                                        <div class="container mt-2">
                                          <h4>White Cotton Tshirt</h4>
                                          <div class="quantity mx-3">
                                            <button
                                              class="plus-btn btn btn-outline-success px-3 py-1"
                                              type="button"
                                              name="button"
                                            >
                                              +
                                            </button>
                                            <input
                                              type="text"
                                              name="name"
                                              value="1"
                                              class="count-increase"
      
                                            />
                                            <button
                                              class="minus-btn btn btn-outline-danger px-3 py-1"
                                              type="button"
                                              name="button"
                                            >
                                              -
                                            </button>
                                            <select
                                              style="float: right; margin-top: 5px"
                                            >
                                              <option>Select Size</option>
                                              <option>XXL</option>
                                              <option>XL</option>
                                              <option>Large</option>
                                              <option>Medium</option>
                                              <option>Small</option>
                                            </select>
                                          </div>
                                          <div class="price mt-3">
                                            <p>
                                              <strike class="mx-3">1299 </strike> 999
                                            </p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <hr />
                                    <div class="container">
                                      <div
                                        class="modtext"
                                        style="justify-content: space-between"
                                      >
                                        <h3>Total Amount</h3>
                                        <a class="btn">Go To Cart</a>
                                      </div>
                                      <div
                                        class="modtext"
                                        style="justify-content: space-between"
                                      >
                                        <h3>1299</h3>
                                        <a class="btn">Check Out</a>
                                      </div>
                                    </div>
                                  </div>
                                  <hr />
                                  <div class="container">
                                    <div class="row">
                                      <h3>Wishlist</h3>
                                      <div class="col-sm-4 main wishlist">
                                        <img
                                          src="user1.jpeg"
                                          style="width: 100%"
                                          alt=""
                                        />
                                        <p
                                          style="text-align: center; margin-bottom: 0"
                                        >
                                          <a href="#">Skirt</a>
                                        </p>
                                        <p style="text-align: center">
                                          <a style="margin-right: 15px" href="#"
                                            ><i
                                              class="fa fa-eye"
                                              aria-hidden="true"
                                            ></i></a
                                          ><a style="margin-left: 15px" href="#"
                                            ><i
                                              class="fa fa-trash"
                                              aria-hidden="true"
                                            ></i
                                          ></a>
                                        </p>
                                      </div>
                                      <div class="col-sm-4 main wishlist">
                                        <img
                                          src="user1.jpeg"
                                          style="width: 100%"
                                          alt=""
                                        />
                                        <p
                                          style="text-align: center; margin-bottom: 0"
                                        >
                                          <a href="#">Skirt</a>
                                        </p>
                                        <p style="text-align: center">
                                          <a style="margin-right: 15px" href="#"
                                            ><i
                                              class="fa fa-eye"
                                              aria-hidden="true"
                                            ></i></a
                                          ><a style="margin-left: 15px" href="#"
                                            ><i
                                              class="fa fa-trash"
                                              aria-hidden="true"
                                            ></i
                                          ></a>
                                        </p>
                                      </div>
                                      <div class="col-sm-4 main wishlist">
                                        <img
                                          src="user1.jpeg"
                                          style="width: 100%"
                                          alt=""
                                        />
                                        <p
                                          style="text-align: center; margin-bottom: 0"
                                        >
                                          <a href="#">Skirt</a>
                                        </p>
                                        <p style="text-align: center">
                                          <a style="margin-right: 15px" href="#"
                                            ><i
                                              class="fa fa-eye"
                                              aria-hidden="true"
                                            ></i></a
                                          ><a style="margin-left: 15px" href="#"
                                            ><i
                                              class="fa fa-trash"
                                              aria-hidden="true"
                                            ></i
                                          ></a>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- <a class="nav-link" style='padding-top:1rem ;'href="#"><i class="far fa-heart" aria-hidden="true"></i></a> -->
                            <!-- <a class="nav-link" style='padding-bottom:1rem ;'href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> -->
                         
                            </div>
                              
                        </li>
                      </ul>
                </div>
              </nav>
        </div>
    </section>
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
    <script src="nav.js"></script>
</body>
</html>