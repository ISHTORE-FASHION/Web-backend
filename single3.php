<?php
include('security.php');
if(isset($_POST["cart"]))
{
$id=$_POST["pid"];
$name=$_POST["pname"];
$price=$_POST["pprice"];
$image=$_POST["pimage"];
$ori_price=$_POST["ori_price"];
$size=$_POST["size"];
    
$query = "SELECT * FROM cart";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row)
    {
      $ppid= $row['pid'];
    }
  if($ppid!=$id)
{
$sql="INSERT INTO cart(pname,img,org_price,price,size,pid) VALUES('".$name."','".$image."','".$ori_price."',
                                                                  '".$price."','".$size."','".$id."')";
 $no=mysqli_query($connection,$sql); 
echo'<div class="alert alert-success alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item added to your cart</strong>
      </div>';
}
else{
    echo'<div class="alert alert-danger alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item already added to your cart</strong>
      </div>';

}
}
if(isset($_POST["wishlist"]))
{
$id=$_POST["pid"];
$name=$_POST["pname"];
$price=$_POST["pprice"];
$image=$_POST["pimage"];
$ori_price=$_POST["ori_price"];
$size=$_POST["size"];
    
$query = "SELECT * FROM wishlist";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row)
    {
      $ppid= $row['pid'];
    }
  if($ppid!=$id)
{
$sql="INSERT INTO wishlist(pname,img,price,pid) VALUES('".$name."','".$image."',
                                                                  '".$price."','".$id."')";
 $no=mysqli_query($connection,$sql); 
echo'<div class="alert alert-success alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item added to your wishlist</strong>
      </div>';
}
else{
    echo'<div class="alert alert-danger alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Item already added to your wishlist</strong>
      </div>';

}
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="sing.css">
     
         <!-- font awsome icons cdn link -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
     
  <title>Hello</title>
  <style>
   
    .small-container {
      max-width: 1080px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
      border: none!important;
    }

    .single-product {
      margin-top: 30px;

    }

    .single-product .col-2 img {
      padding: 0;
    }

    .single-product .col-2 {
      padding: 20px;
    }

    .single-product h4 {
      margin: 20px 0;
      font-size: 22px;
      font-weight: bold;
    }

    .single-product select {
      display: block;
      padding: 7px;
      margin-top: 45px;
      border-radius: 10px;
      border: 3px solid #dccefa;
    }

    .single-product input {
      width: 45%;
      height: 40px;
      padding: 10px;
      font-size: 15px;
      margin-right: 5px;

    }

    input:focus {
      outline: none;
    }

    .row1 {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .small-img-row1 {
      padding-top: 5px;
      display: flex;
      justify-content: space-between;

    }

    .small-img-col {
      flex-basis: 24%;
      cursor: pointer;
    }
    @media(min-width:901px)
    {
      
    .col-2 {
      flex-basis:50%!important;
      /* min-width: 300px; */

    }
    }
    @media(max-width:900px)
    {
      
    .col-2 {
      flex-basis:100%;
      /* min-width: 300px; */

    }
    }

    .col-2 img {
      max-width: 100%;
      padding: 50px 0;
    }

    .col-2 h1 {
      font-size: 50px;
      line-height: 60px;
      margin: 25px 0;
    }

    .single-product .col-2 .bagbtn {
      background-color: #dccefa;
      padding: 8px 38px 8px 38px;
      font-size: 20px;
      margin-top: 14px;
      /* border-radius: 10px; */
      border: 1px solid #000;
      color: black!important;
      font-family: auto;
    }

    .single-product .col-2 .wishlist {
      background-color: #ffffff;
      padding: 8px 42px 8px 42px;
      font-size: 20px;
      margin-top: 14px;
      /* border-radius: 10px; */
      color: black!important;
      font-family: auto;
      border: 1px solid #000;
    }

    .middle {
      width: 55%;
      height: 200px;
      border: 1px solid black;
      margin: auto;
      margin-top: 38px;
      box-shadow: 3px 3px 7px grey;
    }

    .middle h4 {
      text-align: center;
      font-family: serif;
    }

    .categories {
      margin: 70px 0;
    }

    .col-3 {
      flex-basis: 30%;
      /* min-width: 250px; */
      margin-bottom: 30px;
      text-align: center;
    }

    .col-3 img {
      width: 100%;
    }
    

    .col-3 a {
      
      text-decoration: none;
      color: black;
      font-size: 27px;
    }

    @media only screen and (max-width:600px) {
      .row1 {
        text-align: center;

      }

      .col-2,
      .col-3 {
        flex-basis: 100%;
      }

      .single-productc.row1 {
        text-align: left;
      }

      .single-product .col-2 {
        padding: 20px 15px;
      }

      .single-product h1 {
        font-size: 26px;
        line-height: 32px;
      }
    }
  </style>
</head>

<body>

     
    <!-- NAVBAR SECTION -->
    <section class="navbar-section">
      <div class="main-navbar">
          <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand myBtn2" role='button'><img style='margin-left: 1rem;width: 20px;'src='./bar.png'></a>
              <div id="myModal2" class="modal2">
                <div class="modal-content2">
                  
                  <img style='width: 100%;height: auto;' src='./11.jpg'>
                  <div class="container" style="margin-top: 2rem;">
                    <div class="row">
                      
                      <div class="col-12" style="padding-left: 1rem;font-family:'Roboto', sans-serif; ">
                        <ul style='list-style:initial;'>
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
                      <ul style="padding: 0; list-style: none; margin-top: 1.5rem;text-align: end;">
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
                <ul class="navbar-nav ml-auto" style="align-items: center;">
                 
                    
              
                  <li class="nav-item ">
                    <a class="nav-link" href="#"role="button" data-bs-toggle="modal"
                    data-bs-target="#Modal1">
                      WHAT'S NEW
                    </a>
                    <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1" aria-hidden="true">
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
                      data-bs-target="#Modal2">
                        MEN
                      </a>
                      <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true">
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
                                      <div class="col-md-6">
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
                      data-bs-target="#Modal3">
                        WOMEN
                      </a>
                      <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="Modal3" aria-hidden="true">
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
                      data-bs-target="#Modal4">
                        KIDS
                      </a>
                      <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="Modal4" aria-hidden="true">
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
                      data-bs-target="#Modal5">
                        SALE
                      </a>
                      <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="Modal5" aria-hidden="true">
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
                      <a class="nav-link" href="#" role="button" id="myBtn3">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </a>
                      <div id="myModal3" class="modal3">
                        <div class="modal-content3" >
                          
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
                                <input type="text" class="form-control" placeholder="Casual Shirt" >
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
                  <ul class="navbar-nav navbar-2-links">
                      <li class="nav-item">
                          <div class="d-flex flex-row " style="align-items: center; justify-content: center;">
                            <i class="fa fa-search searchicon mobileicons" aria-hidden="true"></i>
                           <i id="myBtn1" style='margin-bottom: 0.7rem; margin-right: 0.1rem;' class="fa fa-user fa-2x usericon" aria-hidden="true"></i>
                           <div id="myModal1" class="modal1">
                            <div class="modal-content1" >
                              <span class="close1">&times;</span>
                              <br>
                              <div class="container">
                                <div class="row">
                                  <div class="col-3 p-0">
                                    <img style="width: 100%;" src="user.png" alt="">
                                    <img style="margin-left: -20px; margin-top: 78px; width: 60%;" src="circle.png" alt="">
                                  </div>
                                  <div class="col-9">
                                    <ul style='list-style:initial;'>
                                      <li><a style="text-decoration: none; color: black; " href="profile.html">Profile</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Wallet</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Track Order</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Help</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Gift Card</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Saved Address</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Saved Cards</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Contact Us</a></li>
                                      <li><a style="text-decoration: none; color: black;" href="#">Log Out</a></li>
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
                                                    <!-- ----------------when size is <1080px-------------- -->
                          <a href="www.google.com">
                            <div
                            class="iconsop"
                            role="button"
                            id="cart-heart1"
                            data-bs-toggle="modal"
                            data-bs-target="#Modal8"
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
                          </a>
                     


                        <!-- ----------------when size is >1080px-------------- -->
                        <div
                        class="iconsop"
                        role="button"
                        id="cart-heart2"
                        data-bs-toggle="modal"
                        data-bs-target="#Modal8"
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
                            id="Modal8"
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
  <!-- NAVBAR SECTION -->




  <div class="small-container single-product" style="margin-top: 90px;">
    <div class="row1">
    <?php

if(isset($_POST['prodetail']))
{
    $id = $_POST['p_id'];
    
    $query = "SELECT * FROM products WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    

    foreach($query_run as $row)
    {
     
        ?>
      <div class="col-2 gallery-div">
      <?php echo '<img src="images/'.$row['images'].'" width="100%" id="product-img" alt="">'?> 
        <div class="small-img-row1">
          <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image1'].'" width="100%" class="small-img" alt="image1">'?>
          </div>
          <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image2'].'" width="100%" class="small-img" alt="image2">'?>
          </div>
          <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image3'].'" width="100%" class="small-img" alt="image3">'?>
          </div>
          <!-- <div class="small-img-col">
          <?php echo '<img src="images/'.$row['image4'].'" width="100%" class="small-img" alt="image4">'?>
        </div> -->
      
        </div>
      </div>

      <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper-container mySwiper2"
    >
      <div class="swiper-wrapper gallery-div2">
        <div class="swiper-slide">
          <img src="https://5.imimg.com/data5/UT/HO/MY-31482776/sarees-500x500.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://webmerx.sgp1.cdn.digitaloceanspaces.com/yoyo/product_images/1585746777.Ladies-New-Stylish-Multi-Color-Sana-Silk-Saree-SARI2671-YOYO-Fashion.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
     
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper-container mySwiper small-img-col2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img style="object-fit: cover;" src="https://5.imimg.com/data5/UT/HO/MY-31482776/sarees-500x500.jpg"  style="object-fit: cover;"/>
        </div>
        <div class="swiper-slide">
          <img  style="object-fit: cover;" src="https://webmerx.sgp1.cdn.digitaloceanspaces.com/yoyo/product_images/1585746777.Ladies-New-Stylish-Multi-Color-Sana-Silk-Saree-SARI2671-YOYO-Fashion.jpg" />
        </div>
        <div class="swiper-slide">
          <img  style="object-fit: cover;" src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img  style="object-fit: cover;" src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img  style="object-fit: cover;" src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
       
      </div>
    </div> 
   

    <div class="col-2 gallery-disc">
      <form   method="post" id="myform" >
        <h2 style=" margin-bottom: 0;">Indian Clothing Company</h2>
        <p style=" opacity: 0.7; font-size: 23px;"><?php echo $row['name'] ?>
        </p>
        <hr style="height: 1.5px;">
        <p style="font-size: 26px;  margin-bottom: 0;">Rs
           <span><?php echo $row['price'] ?> </span><strike
            style="opacity: 0.7;">&nbsp;&nbsp;&nbsp;<?php echo $row['saleprice'] ?></strike></p>
        <p style=" color: #af92f5; font-size: 14px;">Inclusive Of All Taxes
        </p>
        <select name="size">
          <option>Select Size</option>
          <option>XXL</option>
          <option>XL</option>
          <option>Large</option>
          <option>Medium</option>
          <option>Small</option>
        </select>
        <br>
         <!-- add to cart -->
        <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="pname" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="pimage" value="<?php echo $row['images'] ?>">
        <input type="hidden" name="ori_price" value="<?php echo $row['saleprice'] ?>">
      
        <input  type="submit" name="cart" id="submit" value="ADD TO BAG"  class="btn btn-outline-secondary bagbtn real-btn1">
       <!-- add to wishlist -->
        <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="pname" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="pimage" value="<?php echo $row['images'] ?>">
        <input type="hidden" name="ori_price" value="<?php echo $row['saleprice'] ?>">
      
        <input  type="submit" name="wishlist" id="submit_wish" value="WISHLIST" class="btn btn-outline-secondary wishlist  real-btn2">
      
        <!-- <a class="btn btn-outline-secondary bagbtn real-btn1">ADD TO BAG</a>&nbsp;
        <a class="btn btn-outline-secondary wishlist  real-btn2">WISHLIST</a> -->
        <hr style="height: 1.5px;">
        <p >Delivery Options</p>
        <input style="width: 50%;" type="text" class="pincode-btn" placeholder="Enter Pincode"> <a href="#" style="text-decoration: none;"><span style="color: blueviolet;cursor: pointer;">Check</span></a>
        <p style=" font-size: 13px; opacity: 0.9;" class="pincode-text">Please Enter Pincode To
          Check Delivery Time And Availability Of Cash On Delivery</p>
      </div>
      </form>
    </div>
    <hr style="height: 1.5px;">
    <p style=" margin-bottom: 0;">Product Details</p>
    <p style=" font-size: 16px; opacity: 0.8; padding-top: 5px;"><?php echo $row['prod_details'] ?></p>
    <p style=" margin-bottom: 0;" class="type-para1">Fabric
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material
      And Care</p>
    <p style=" opacity: 0.8; font-size: 20px; " class="type-para2"><?php echo $row['material'] ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dry
      Clean Only</p>

    <p style=" margin-bottom: 0;" class="type-para1">Size And Fit
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specification
    </p>
    <p style=" opacity: 0.8; font-size: 20px;" class="type-para2"><?php echo $row['size'] ?>,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['sizefit'] ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xyz,
      abc</p>
      <?php
                }
            }
        ?>
  </div>


  <div class="categories">
    <div class="small-container small-container2"    style="border: 1px solid black; box-shadow: 3px 3px 5px gray; padding: 40px; padding-bottom: 0;">
       <h3 style="margin-bottom: 20px;text-align: center;">Pair With It</h3>
      <div class="row1"
     >
       
        <div class="col-3">
          <img src="category-1.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; ">Rs 1299</p>
        </div>
        <div class="col-3">
          <img src="category-2.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; ">Rs 1299</p>
        </div>
        <div class="col-3">
          <img src="category-3.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; ">Rs 1299</p>
        </div>
      </div>
    </div>
  </div>


  <!-- --------------------------------recently view section start------------------ -->

<section class="customer">
  <h3>Customers Also Liked</h3>
  <div class="customer-div">
    <div class="cus cus-1">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-2">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-3">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-4">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-5">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
    <div class="cus cus-extra">
      <img src="user1.jpeg" alt="">
      <h1>Sukoon</h1>
      <p>Blue Cotton Shirt</p>
      <span>899</span> <strike>2999</strike>
      <p class="size">S,L,M,XL</p>
    </div>
  </div>
</section>


  <!-- --------------------------------customer liked section end------------------ -->

  <div class="main-btn"></div>


  <!-- --------------------------------recently view section start------------------ -->

  <section class="customer last-section">
    <h3>Recently viewed</h3>
    <div class="customer-div">
      <div class="cus cus-1">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-2">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-3">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-4">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-5">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
      <div class="cus cus-extra">
        <img src="user1.jpeg" alt="">
        <h1>Sukoon</h1>
        <p>Blue Cotton Shirt</p>
        <span>899</span> <strike>2999</strike>
        <p class="size">S,L,M,XL</p>
      </div>
    </div>
  </section>
  
  <!-- <div class="arrow-1">
    <i class="fas fa-arrow-right"></i>
  </div>

  <div class="arrow-2">
    <i class="fas fa-arrow-left"></i>
  </div> -->


  <!-- --------------------------------recently view section end------------------ -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="sing.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <script>
      var ProductImg = document.getElementById("product-img");
      var SmallImg = document.getElementsByClassName("small-img");
      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
      }
      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
      }
      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
      }
      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
      }
    </script>
     <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
</body>

</html>





