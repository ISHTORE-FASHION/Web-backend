<?php
include('database/dbconfig.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}
?>

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- bootstrap cdn link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous" 
    />

    <script
      src="https://kit.fontawesome.com/c98256b770.js"
      crossorigin="anonymous"
    ></script>

    <!-- font awsome icons cdn link -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- plain css link -->
    <link rel="stylesheet" href="index.css" />

    <title>Document</title>
  </head>
  <body>
    <!-- -------------------side flat coupon start-------------- -->
    <div class="fixed">
      <button style="width: 100%" class="openbtn" onclick="openNav()">
        <p>FLAT 100 OFF</p>
        <i class="fas fa-caret-up"></i>
      </button>
    </div>
    <div id="mySidepanel" class="sidepanel">
      <img src="side.jpg" style="height: 245px" alt="" />
    </div>
    <!-- -------------------side flat coupon end-------------- -->

    <section id="universal">
      <!-- NAVBAR SECTION -->
      <section class="navbar-section" id="top-nav" style="width: 100vw">
        <div class="main-navbar">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand myBtn2" role="button"
              ><img style="margin-left: 1rem; width: 20px" src="./bar.png"
            /></a>
            <div id="myModal2" class="modal2">
              <div class="modal-content2">
                <img style="width: 100%; height: auto" src="./11.jpg" />
                <div class="container" style="margin-top: 2rem">
                  <div class="row">
                    <div
                      class="col-12"
                      style="
                        padding-left: 1rem;
                        font-family: 'Roboto', sans-serif;
                      "
                    >
                      <ul style="list-style: initial">
                        <li style="margin-bottom: 0.5rem">
                          <a
                            style="
                              text-decoration: none;
                              color: black;
                              font-size: 0.8rem;
                            "
                            href="profile.html"
                            >MEN</a
                          >
                        </li>
                        <li style="margin-bottom: 0.5rem">
                          <a
                            style="
                              text-decoration: none;
                              color: black;
                              font-size: 0.8rem;
                            "
                            href="#"
                            >WOMEN</a
                          >
                        </li>
                        <li style="margin-bottom: 0.5rem">
                          <a
                            style="
                              text-decoration: none;
                              color: black;
                              font-size: 0.8rem;
                            "
                            href="#"
                            >KIDS</a
                          >
                        </li>
                        <li style="margin-bottom: 0.5rem">
                          <a
                            style="
                              text-decoration: none;
                              color: black;
                              font-size: 0.8rem;
                            "
                            href="#"
                            >UNISEX</a
                          >
                        </li>
                        <li style="margin-bottom: 0.5rem">
                          <a
                            style="
                              text-decoration: none;
                              color: black;
                              font-size: 0.8rem;
                            "
                            href="#"
                            >ACCESSORIES</a
                          >
                        </li>
                      </ul>

                      <!-- <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-primary p-0"
                            style="font-size: 27px;">Login</button>
                          <button type="button" onclick="document.location='loginmodal.html'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                          Signup</button>
                        </div> -->
                    </div>
                    <ul
                      style="
                        padding: 0;
                        list-style: none;
                        margin-top: 1.5rem;
                        text-align: end;
                      "
                    >
                      <li style="margin-bottom: 0.3rem">
                        <a
                          style="
                            text-decoration: none;
                            color: grey !important;
                            font-size: 0.7rem;
                          "
                          href="#"
                          >ACCOUNT</a
                        >
                      </li>
                      <li style="margin-bottom: 0.3rem">
                        <a
                          style="
                            text-decoration: none;
                            color: grey !important;
                            font-size: 0.7rem;
                          "
                          href="#"
                          >CONTACT US</a
                        >
                      </li>
                      <li style="margin-bottom: 0.3rem">
                        <a
                          style="
                            text-decoration: none;
                            color: grey !important;
                            font-size: 0.7rem;
                          "
                          href="#"
                          >FAQs</a
                        >
                      </li>
                      <li style="margin-bottom: 0.3rem">
                        <a
                          style="
                            text-decoration: none;
                            color: grey !important;
                            font-size: 0.7rem;
                          "
                          href="#"
                          >PRIVACY</a
                        >
                      </li>
                      <li style="margin-bottom: 0.3rem">
                        <a
                          style="
                            text-decoration: none;
                            color: grey !important;
                            font-size: 0.7rem;
                          "
                          href="#"
                          >TERMS & CONDITIONS</a
                        >
                      </li>
                    </ul>
                    <p
                      style="
                        font-size: 0.9rem;
                        text-align: center;
                        margin: 0;
                        margin-bottom: 0.5rem;
                      "
                    >
                      <a
                        style="
                          text-decoration: none;
                          color: #a1a0f8 !important;
                          font-size: 1rem;
                        "
                        href="loginmodal.php"
                        >Login</a
                      >
                      <span style="opacity: 0.7">/</span
                      ><a
                        style="
                          text-decoration: none;
                          color: #a1a0f8 !important;
                          font-size: 1rem;
                        "
                        href="signupmodal.php"
                        >Signup</a
                      >
                    </p>
                    <hr
                      style="
                        padding: 0;
                        width: 70%;
                        margin-bottom: 3rem;
                        margin-right: auto;
                        margin-left: auto;
                        border: 2px solid #6e6cd4;
                      "
                    />
                  </div>
                </div>
              </div>
            </div>
            <a class="navbar-brand brand" href="#"><img src="./logo.png" /></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" style="align-items: center">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal1"
                  >
                    WHAT'S NEW
                  </a>
                  <div
                    class="modal fade"
                    id="Modal1"
                    tabindex="-1"
                    aria-labelledby="Modal1"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-2 imgcontainer">
                                <div
                                  class="container"
                                  style="border: 2px solid black"
                                >
                                  <img src="7.jpeg" alt="" />
                                </div>
                                <div
                                  class="container"
                                  style="
                                    background: black;
                                    color: white;
                                    padding: 5px 20px;
                                    margin-top: 12px;
                                    font-size: 20px;
                                  "
                                >
                                  SHOP NOW
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="row">
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">New In Clothing</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Active Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Accessories</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Beauty</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Bags</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Beach Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Shoes</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 subcat">
                                      <a href="#">Jeans</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">T-Shirt</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Shirt</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Bottoms</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Cardigans</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Couple T-Shirts</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Men's Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Women's Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Kids's Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Accessories</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#"
                                        >New In Shoes and Accessories</a
                                      >
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In BagPack</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Active Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Nightwear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In Stocks</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2 imgcontainer">
                                <div
                                  class="container"
                                  style="border: 2px solid black"
                                >
                                  <img src="7.jpeg" alt="" />
                                </div>
                                <div
                                  class="container"
                                  style="
                                    background: black;
                                    color: white;
                                    padding: 5px 20px;
                                    margin-top: 12px;
                                    font-size: 20px;
                                  "
                                >
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
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal2"
                  >
                    MEN
                  </a>
                  <div
                    class="modal fade"
                    id="Modal2"
                    tabindex="-1"
                    aria-labelledby="Modal2"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div
                                class="col-md-2 imgcontainer"
                                style="padding: 0"
                              >
                                <div
                                  class="container"
                                  style="border: 2px solid black"
                                >
                                  <img src="7.jpeg" alt="" />
                                </div>
                                <div
                                  class="container"
                                  style="
                                    background: black;
                                    color: white;
                                    padding: 5px 20px;
                                    margin-top: 12px;
                                    font-size: 20px;
                                  "
                                >
                                  SHOP NOW
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="row">
                                  <div class="col-md-5 main">
                                    <p class="mb-0 cat">
                                      <a href="#">MEN'S WEAR</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">NEW IN</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">T-SHIRTS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SHIRTS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BOTTOMS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">ACCESSORIES</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">PREMIUN COLLECTIONS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">TOP RATED</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">ACTIVE WEAR</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">OUTWEAR</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">SweatShirt</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Hoodies</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Jackets</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Formal Wear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BOTTOMS</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Denims</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Shorts</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Formal Pants</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Leather Pants</a>
                                    </p>
                                  </div>
                                  <div class="col-md-3 main">
                                    <p class="mb-0 cat">
                                      <a href="#"><b>TOPS</b></a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Long Sleeve Tops</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Polo Tshirts</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Cotton Shirts</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Half Sleeve Tops</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SHOP BY OCCASION</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Party Wear</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Casual Wear</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Street Punk</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Formal Wear</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2 imgcontainer">
                                <div class="row" style="padding: 27px">
                                  <div
                                    class="col-md-6"
                                    style="margin-top: 51px"
                                  >
                                    <h5
                                      style="
                                        color: rgb(228, 102, 93);
                                        font-weight: bold;
                                      "
                                    >
                                      BUY 2 GET 1
                                    </h5>
                                    <h5>FREE</h5>
                                  </div>
                                  <div class="col-md-6">
                                    <img class="spimg" src="7.jpeg" alt="" />
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
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal3"
                  >
                    WOMEN
                  </a>
                  <div
                    class="modal fade"
                    id="Modal3"
                    tabindex="-1"
                    aria-labelledby="Modal3"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-2">
                                <div
                                  class="container wimgcontainer"
                                  style="padding: 0px; margin: 6px 0px"
                                >
                                  <img
                                    src="bombay.jpg"
                                    alt=""
                                    style="height: 120px; width: 161px"
                                  />
                                </div>
                                <div
                                  class="container wimgcontainer"
                                  style="padding: 0px; margin: 6px 0px"
                                >
                                  <img
                                    src="bombay.jpg"
                                    alt=""
                                    style="height: 120px; width: 161px"
                                  />
                                </div>
                              </div>
                              <div class="col-md-6 wcontent">
                                <div class="row">
                                  <div class="col-md-4 wmain">
                                    <p class="mb-0 cat">
                                      <a href="#">WOMEN'S CLOTHING</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">DRESSES</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BLOUSES</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">T-SHIRTS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SWEATSHIRTS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">ACCESSORIES</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BOTTOMS</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">SWEATERS</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">cardigans</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Knitwear</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Pullovers</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SWEATSHIRTS</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Hoddies</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Oversize</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">OUTWEAR</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Coats</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Jackets</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">JUMPSUIT & ROMPERS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BLOUSES</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">TANK TOPS</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">DRESSES</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BOTTOMS</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Jeans</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Straight Pants </a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Leather Pants</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Shorts</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Skirts</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="container p-0 wimgcontainer">
                                  <h3>Shop By Style</h3>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <img
                                        src="1.jpg"
                                        alt="..."
                                        style="
                                          height: 95px;
                                          border-radius: 4.25rem !important;
                                        "
                                      />
                                      <div>
                                        <p>Beachwear</p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <img
                                        src="1.jpg"
                                        alt="..."
                                        style="
                                          height: 95px;
                                          border-radius: 4.25rem !important;
                                        "
                                      />
                                      <div style="margin-left: 30px">
                                        <p>Party</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="align-items-center">
                                        <img
                                          src="1.jpg"
                                          alt="..."
                                          style="
                                            height: 95px;
                                            border-radius: 4.25rem !important;
                                          "
                                        />
                                        <p>Sporty</p>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <img
                                        src="1.jpg"
                                        alt="..."
                                        style="
                                          height: 95px;
                                          border-radius: 4.25rem !important;
                                        "
                                      />
                                      <div style="margin-left: 20px">
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
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal4"
                  >
                    KIDS
                  </a>
                  <div
                    class="modal fade"
                    id="Modal4"
                    tabindex="-1"
                    aria-labelledby="Modal4"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-2 imgcontainer">
                                <div
                                  class="container"
                                  style="border: 2px solid black"
                                >
                                  <img src="7.jpeg" alt="" />
                                </div>
                                <div
                                  class="container"
                                  style="
                                    background: rgb(111, 230, 164);
                                    color: white;
                                    padding: 5px 20px;
                                    margin-top: 12px;
                                    font-size: 20px;
                                  "
                                >
                                  SHOP NOW
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="row">
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">KIDS WEAR</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">VIEW ALL</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">TOP RATED</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In</a>
                                    </p>
                                    <p class="mb-0 cat"><a href="#">TOPS</a></p>
                                    <p class="mb-0 cat">
                                      <a href="#">BOTTOM</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Shoes</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SWEAT SHIRT</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">BABY GIRL'S CLOTHING</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Co-Ords</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Onesides</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Dresses</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Knitwear</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Partywear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BABY BOY'S CLOTHING</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Onesides</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Co-Ords</a>
                                    </p>
                                  </div>
                                  <div class="col-md-4 main">
                                    <p class="mb-0 cat">
                                      <a href="#">BABY'S ACCESSORIES</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Socks & Tights</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Hats & Gloves</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SHOP BY TREND</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Animal Print</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Cartoon Print</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Floral</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-2 imgcontainer">
                                <div
                                  class="container"
                                  style="border: 2px solid black"
                                >
                                  <img src="7.jpeg" alt="" />
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
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#Modal5"
                  >
                    SALE
                  </a>
                  <div
                    class="modal fade"
                    id="Modal5"
                    tabindex="-1"
                    aria-labelledby="Modal5"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col-md-4 imgcontainer">
                                <h3>Brand Of The Week</h3>
                                <img src="11.jpg" style="width: 100%" alt="" />
                                <!-- <div class="container"
                                      style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                                      SHOP NOW
                                    </div> -->
                              </div>
                              <div class="col-md-4">
                                <div class="row">
                                  <div class="col-md-6 main">
                                    <p class="mb-0 cat">
                                      <a href="#">KIDS WEAR</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">VIEW ALL</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">TOP RATED</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New In</a>
                                    </p>
                                    <p class="mb-0 cat"><a href="#">TOPS</a></p>
                                    <p class="mb-0 cat">
                                      <a href="#">BOTTOM</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">New IN Shoes</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">SWEAT SHIRT</a>
                                    </p>
                                  </div>
                                  <div class="col-md-6 main">
                                    <p class="mb-0 cat">
                                      <a href="#">BABY GIRL'S CLOTHING</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Co-Ords</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Onesides</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Dresses</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Knitwear</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Partywear</a>
                                    </p>
                                    <p class="mb-0 cat">
                                      <a href="#">BABY BOY'S CLOTHING</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Onesides</a>
                                    </p>
                                    <p class="mb-0 subcat">
                                      <a href="#">Co-Ords</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 main">
                                <p class="cat">SPECIAL OFFERS</p>
                                <div class="row">
                                  <div class="col-sm-6 wimgcontainer">
                                    <p class="subcat">FLAT 10% OFF</p>
                                    <img
                                      class="offerimg"
                                      src="33.jpeg"
                                      alt=""
                                    />
                                    <img
                                      class="offerimg"
                                      src="33.jpeg"
                                      alt=""
                                    />
                                    <img
                                      class="offerimg"
                                      src="33.jpeg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="col-sm-6">
                                    <p class="subcat">FLAT 20% OFF</p>
                                    <img
                                      class="offerimg"
                                      src="33.jpeg"
                                      alt=""
                                    />
                                    <img
                                      class="offerimg"
                                      src="33.jpeg"
                                      alt=""
                                    />
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
                    <div class="modal-content3">
                      <div class="container" style="margin-bottom: 2rem">
                        <div class="row">
                          <!-- <div class="input-group mb-3 mt-3">
                                <i class="fa fa-search"></i>
                                 <span class="input-group-text" id="basic-addon1"></span> 
                                <input type="text" class="form-control" placeholder="Casual Shirt" aria-label="Username"
                                  aria-describedby="basic-addon1">
                              </div> -->
                          <div
                            class="input-group"
                            style="
                              background-color: #f2f2f2;
                              height: 3rem;
                              width: 95%;
                              margin: auto;
                              margin-top: 2rem;
                              margin-bottom: 1rem;
                              border-radius: 0.8rem;
                            "
                          >
                            <i class="fa fa-search" style="margin: auto"></i>
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Casual Shirt"
                            />
                          </div>
                          <div class="col-12" style="margin-left: 7%">
                            <p style="margin-bottom: 10px">
                              <a class="title-modal3" href="#">SHOP BY BRAND</a>
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Shirt By Suited</a>
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Shirt By IDC</a>
                            </p>
                            <p style="margin-bottom: 10px">
                              <a class="subtitle" href="#">Shirt By Sukoon</a>
                            </p>
                            <p style="margin-bottom: 10px">
                              <a class="title-modal3" href="#"
                                >SHOP BY MATERIAL</a
                              >
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Cotton Shirt</a>
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Polyster Shirt</a>
                            </p>
                            <p style="margin-bottom: 10px">
                              <a class="subtitle" href="#">Polyster T-Shirt</a>
                            </p>
                            <p style="margin-bottom: 10px">
                              <a class="title-modal3" href="#"
                                >SHOP BY OCCASION</a
                              >
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Party Wear</a>
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Formal Wear</a>
                            </p>
                            <p style="margin-bottom: 7px">
                              <a class="subtitle" href="#">Casual Wearsub</a>
                            </p>

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
            <div>
              <ul class="navbar-nav navbar-2-links">
                <li class="nav-item">
                  <div
                    class="d-flex flex-row"
                    style="align-items: center; justify-content: center"
                  >
                    <i
                      class="fa fa-search searchicon mobileicons"
                      aria-hidden="true"
                    ></i>
                    <i
                      id="myBtn1"
                      style="margin-bottom: 0.7rem; margin-right: 0.1rem"
                      class="fa fa-user fa-2x usericon"
                      aria-hidden="true"
                    ></i>
                    <div id="myModal1" class="modal1">
                      <div class="modal-content1">
                        <span class="close1">&times;</span>
                        <br />
                        <div class="container">
                          <div class="row">
                            <div class="col-3 p-0">
                              <img style="width: 100%" src="user.png" alt="" />
                              <img
                                style="
                                  margin-left: -20px;
                                  margin-top: 78px;
                                  width: 60%;
                                "
                                src="circle.png"
                                alt=""
                              />
                            </div>
                            <div class="col-9">
                              <ul style="list-style: initial">
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="profile.php"
                                    >Profile</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Wallet</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Track Order</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Help</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Gift Card</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Saved Address</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Saved Cards</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="#"
                                    >Contact Us</a
                                  >
                                </li>
                                <li>
                                  <a
                                    style="
                                      text-decoration: none;
                                      color: black;
                                      font-size: 0.9rem;
                                    "
                                    href="logoutconf.php"
                                    >Log Out</a
                                  >
                                </li>
                              </ul>
                              <!-- <div class="btn-group" role="group" aria-label="Basic example">
                                      <button type="button" class="btn btn-outline-primary p-0"
                                        style="font-size: 27px;">Login</button>
                                      <button type="button" onclick="document.location='loginmodal.html'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                                      Signup</button>
                                    </div> -->
                            </div>
                            <p
                              class="mt-3"
                              style="text-align: center; font-size: 0.9rem"
                            >
                              <a
                                style="
                                  text-decoration: none;
                                  color: #a1a0f8 !important;
                                  font-size: 1rem;
                                "
                                href="FrontEnd-With-Navbar/Login Modal/index.php"
                                >Login</a
                              >
                              <span style="opacity: 0.7"> or </span
                              ><a
                                style="
                                  text-decoration: none;
                                  color: #a1a0f8 !important;
                                  font-size: 1rem;
                                "
                                href="signupmodal.php"
                                >Signup</a
                              >
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="iconsop"
                      role="button"
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

      <section id="header">
        <div class="intro">
          <h1>ISHTORE</h1>
          <p
            style="color: #b69dfa; font-family: 'Playfair Display', serif"
            class="dest"
          >
            Your One Stop Destination
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quae
            ipsam quo iste ut non harum alias esse similique atque. Doloremque
            repudiandae ab nostrum laborum necessitatibus rerum commodi labore.
            Labore.
          </p>
          <a href="product_orignal.php" class="shop">SHOP NOW</a>
          <!-- onmouseover="style.background='green'" onmouseout="style.background='red'" -->
        </div>
        <div class="waste">
          <div class="main-circle">
            <div class="rotate-div">
              <div class="child1 newClass"><div class="elem1 cir"></div></div>
              <div class="child2 newClass"><div class="elem2 cir"></div></div>
              <div class="child3 newClass"><div class="elem3 cir"></div></div>
              <div class="child4 newClass"><div class="elem4 cir"></div></div>
              <div class="child5 newClass"><div class="elem5 cir"></div></div>
              <div class="child6 newClass"><div class="elem6 cir"></div></div>
              <div class="child7 newClass"><div class="elem7 cir"></div></div>
              <div class="child8 newClass"><div class="elem8 cir"></div></div>
              <div class="child9 newClass"><div class="elem9 cir"></div></div>
              <div class="child10 newClass"><div class="elem10 cir"></div></div>
            </div>
          </div>

          <div class="nav-circle"></div>
          <div class="arrow2">
            <a href="#" id="ar2" style="color: #000"
              ><i class="fas fa-arrow-down"></i
            ></a>
          </div>
          <div class="arrow1">
            <a href="#" id="ar1" style="color: #000"
              ><i class="fas fa-arrow-down"></i
            ></a>
          </div>
        </div>
      </section>
    </section>

    <!-- ----------------shop section------ -->

    <span class="mobile UI COde. Please delete this tag to activate">
      <!-- ---------------mobile UI--------------- -->

      <!-- -----------GO TO SECTION start----------->
      <section id="go-to">
        <div class="go-div">
          <h1 class="desk-shop">SHOP</h1>
          <div class="swiper-container1 swiper-container4">
            <div class="swiper-wrapper">
              <div class="swiper-slide go-slide">
                <a href="women.php">
                  <img
                    src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p1/2015/03/18/Incoming/Pictures/1327679_Wallpaper2.jpg"
                    href="#"
                    alt=""
                  />
                  <p>Women</p>
                </a>
              </div>
              <div class="swiper-slide go-slide">
                <a href="men.php">
                  <img
                    src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p1/2015/03/18/Incoming/Pictures/1327679_Wallpaper2.jpg"
                    href="#"
                    alt=""
                  />
                  <p>Men</p>
                </a>
              </div>
              <div class="swiper-slide go-slide">
                <a href="unisex.php">
                  <img
                    src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p1/2015/03/18/Incoming/Pictures/1327679_Wallpaper2.jpg"
                    href="#"
                    alt=""
                  />
                  <p>Unisex</p>
                </a>
              </div>
              <div class="swiper-slide go-slide">
                <a href="kids.php">
                  <img
                    src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p1/2015/03/18/Incoming/Pictures/1327679_Wallpaper2.jpg"
                    href="#"
                    alt=""
                  />
                  <p>Kids</p>
                </a>
              </div>
              <div class="swiper-slide go-slide">
                <a href="accessories.php">
                  <img
                    src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p1/2015/03/18/Incoming/Pictures/1327679_Wallpaper2.jpg"
                    href="#"
                    alt=""
                  />
                  <p>Accessories</p>
                </a>
              </div>
              <!-- <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div> -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination go-to-pag"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next1"></div>
            <div class="swiper-button-prev1"></div>
          </div>
        </div>
      </section>
      <!-- -----------GO TO SECTION ends----------->

      <!-- -----------Flat Off SECTION start----------->

      <section id="flat">
        <div class="flat-div">
          <div class="swiper-container2">
            <div class="swiper-wrapper">
              <div class="swiper-slide flat-slide">
                <a href="#">
                  <img
                    src="https://www.fmjfee.com/i901fee/img/home/learn/learn_1.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="swiper-slide flat-slide">
                <a href="#">
                  <img
                    src="https://www.fmjfee.com/i901fee/img/home/learn/learn_1.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="swiper-slide flat-slide">
                <a href="#">
                  <img
                    src="https://www.fmjfee.com/i901fee/img/home/learn/learn_1.jpg"
                    alt=""
                  />
                </a>
              </div>
              <div class="swiper-slide flat-slide">
                <a href="#">
                  <img
                    src="https://www.fmjfee.com/i901fee/img/home/learn/learn_1.jpg"
                    alt=""
                  />
                </a>
              </div>

              <!-- <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div> -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination go-to-flat"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next2"></div>
            <div class="swiper-button-prev2"></div>
          </div>
        </div>
      </section>

      <!-- -----------Flat Off SECTION ends----------->

      <!-- -----------Deals SECTION start----------->
      <section id="deals">
        <div class="deals-div">
          <div class="deals-heading">
            <p class="title">DEALS OF THE WEEK</p>
          </div>
          <div class="deals-slider">
            <div class="swiper-container3">
              <div class="swiper-wrapper">
                <div class="swiper-slide go-deal">
                  <a href="#">
                    <img
                      src="https://i.pinimg.com/564x/21/43/f1/2143f1e90369d750eceafdf536369cf5.jpg"
                      href="#"
                      alt=""
                    />
                    <p>Upto 30% Off</p>
                    <p class="on">On Watches</p>
                  </a>
                  <p class="terms">T & C Apply</p>
                </div>
                <div class="swiper-slide go-deal">
                  <a href="#">
                    <img
                      src="https://i.pinimg.com/564x/21/43/f1/2143f1e90369d750eceafdf536369cf5.jpg"
                      href="#"
                      alt=""
                    />
                    <p>Upto 30% Off</p>
                    <p class="on">On Watches</p>
                  </a>
                  <p class="terms">T & C Apply</p>
                </div>
                <div class="swiper-slide go-deal">
                  <a href="#">
                    <img
                      src="https://i.pinimg.com/564x/21/43/f1/2143f1e90369d750eceafdf536369cf5.jpg"
                      href="#"
                      alt=""
                    />
                    <p>Upto 30% Off</p>
                    <p class="on">On Watches</p>
                  </a>
                  <p class="terms">T & C Apply</p>
                </div>
                <div class="swiper-slide go-deal">
                  <a href="#">
                    <img
                      src="https://i.pinimg.com/564x/21/43/f1/2143f1e90369d750eceafdf536369cf5.jpg"
                      href="#"
                      alt=""
                    />
                    <p>Upto 30% Off</p>
                    <p class="on">On Watches</p>
                  </a>
                  <p class="terms">T & C Apply</p>
                </div>
                <div class="swiper-slide go-deal">
                  <a href="#">
                    <img
                      src="https://i.pinimg.com/564x/21/43/f1/2143f1e90369d750eceafdf536369cf5.jpg"
                      href="#"
                      alt=""
                    />
                    <p>Upto 30% Off</p>
                    <p class="on">On Watches</p>
                  </a>
                  <p class="terms">T & C Apply</p>
                </div>

                <!-- <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div> -->
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination go-to-pag"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next3"></div>
              <div class="swiper-button-prev3"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- -----------Deals SECTION ends----------->

      <!-- -----------top Brand SECTION start----------->
      <section id="top-brand">
        <div class="top-brand-heading">
          <p class="title">OUR TOP BRANDS</p>
        </div>
        <div class="top-brand-grid">
        <?php
        
        $query = "SELECT * FROM products where category_id=1";
        $query_run = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
    ?>
       
          <div class="brand-company">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p><?php echo $row['brand'] ?></p>
            </a>
          </div>
          <?php
              } 
              }
              else {
                echo "No Record Found";
              }
              ?>

          <!-- <div class="brand-company">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>
          <div class="brand-company">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>
          <div class="brand-company">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>
          <div class="brand-company">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>

          <div class="brand-company">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>

          <div class="brand-company extra-brand">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>
          <div class="brand-company extra-brand">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>
          <div class="brand-company extra-brand">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div>
          <div class="brand-company extra-brand">
            <a href="#">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                alt=""
              />
              <p>Indian Clothing Company</p>
            </a>
          </div> -->
        </div>
      </section>

      <!-- -----------top Brand SECTION ends----------->

      <!-- -----------wardrobe SECTION starts----------->

      <section id="wardrobe">
        <div class="wardrobe-div">
          <div class="wardrobe-img">
            <img
              src="https://pbs.twimg.com/profile_images/1274326228665659393/-Zde-9Hn_400x400.jpg"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="https://img.wattpad.com/0ed277a884fa22719085dcfb75ff9a4d1872d322/687474703a2f2f6f72696730312e64657669616e746172742e6e65742f643833632f662f323031332f3231342f652f372f6b61776169695f68696e6174615f6368696c645f62795f74696e615f75736167696b61776169696368616e2d643667647a756a2e6a7067?s=fit&h=360&w=360&q=80"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="https://qph.fs.quoracdn.net/main-qimg-aa034f4cb542b2a0c315ae631ee42a37"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="https://i.pinimg.com/236x/74/a2/43/74a243fbc2b0e73d9c9e58299bff89db.jpg"
              alt=""
            />
          </div>
          <div class="wardrobe-img center">
            <img
              src="data:image/jpeg;base64,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"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="https://pbs.twimg.com/profile_images/1274326228665659393/-Zde-9Hn_400x400.jpg"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="https://data.whicdn.com/images/325848008/original.jpg"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="data:image/jpeg;base64,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"
              alt=""
            />
          </div>
          <div class="wardrobe-img">
            <img
              src="https://i.pinimg.com/236x/74/a2/43/74a243fbc2b0e73d9c9e58299bff89db.jpg"
              alt=""
            />
          </div>
        </div>
      </section>
      <!-- -----------wardrobe SECTION ends----------->

      <!-- -----------Our Brand Section starts----------->

      <section id="our-brand">
        <div class="our-brand-heading">
          <p class="title">OUR BRAND</p>
        </div>
        <div class="our-brand-div">
          <div class="our-brand-img">
            <!-- <img src="https://pbs.twimg.com/profile_images/1274326228665659393/-Zde-9Hn_400x400.jpg" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiajv1ZMk-r2VldrXhuL5JFQ6-pKTs6RHrkA&usqp=CAU" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="https://qph.fs.quoracdn.net/main-qimg-aa034f4cb542b2a0c315ae631ee42a37" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="https://i.pinimg.com/236x/74/a2/43/74a243fbc2b0e73d9c9e58299bff89db.jpg" alt=""> -->
          </div>
          <div class="our-brand-img center">
            <!-- <img src="data:image/jpeg;base64,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" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="https://pbs.twimg.com/profile_images/1274326228665659393/-Zde-9Hn_400x400.jpg" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="https://data.whicdn.com/images/325848008/original.jpg" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="data:image/jpeg;base64,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" alt=""> -->
          </div>
          <div class="our-brand-img">
            <!-- <img src="https://i.pinimg.com/236x/74/a2/43/74a243fbc2b0e73d9c9e58299bff89db.jpg" alt=""> -->
          </div>
        </div>
      </section>

      <!-- -----------Our Brand Section ends----------->

      <!-- -----------catageroies SECTION start----------->
      <section id="categories">
        <div class="categories-heading">
          <p class="title">CATEGORIES</p>
        </div>
        <div class="categories-grid">
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Comfy Tees</p>
              <p>The Perfect Match</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Lingerie</p>
              <p>Made With Love</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Nighwear</p>
              <p>The Comfort Zone</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Co-Ords</p>
              <p>Perfect Pair</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Fusion Dress</p>
              <p>Colours Of The Season</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Comfy Tees</p>
              <p>The Perfect Match</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Comfy Tees</p>
              <p>The Perfect Match</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Comfy Tees</p>
              <p>The Perfect Match</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Comfy Tees</p>
              <p>The Perfect Match</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
          <div class="collection extra-collection">
            <a href="#">
              <img
                src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/491554ba-456c-4219-a6bb-734f5504ac65/d5d8ex5-2232757a-5b98-4780-adf5-c985b0236d1d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNDkxNTU0YmEtNDU2Yy00MjE5LWE2YmItNzM0ZjU1MDRhYzY1XC9kNWQ4ZXg1LTIyMzI3NTdhLTViOTgtNDc4MC1hZGY1LWM5ODViMDIzNmQxZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.T6WhXXuw68QrKlBd6fznf-RbK-zGl4oaNSp9UBru7jM"
                alt=""
              />
              <p>Comfy Tees</p>
              <p>The Perfect Match</p>
              <div class="explore">
                <i class="fa fa-plus"></i>
                <p>EXPLORE</p>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- -----------categories SECTION ends----------->

      <!-- -----------more SECTION ends----------->

      <section id="more">
        <div class="more-div">
          <div class="more-div-img">
            <a href="#">
              <img
                src="https://cdn.staticneo.com/w/naruto/thumb/Minatonamikaze.jpg/413px-Minatonamikaze.jpg"
                alt=""
              />
            </a>

            <a href="#"> <p>ACCESSORIES</p> </a>
            <a href="#" class="explore-button">EXPLORE MORE</a>
          </div>
          <div class="more-div-img">
            <a href="#">
              <img
                src="https://cdn.staticneo.com/w/naruto/thumb/Minatonamikaze.jpg/413px-Minatonamikaze.jpg"
                alt=""
              />
            </a>

            <a href="#"> <p>ACCESSORIES</p> </a>
            <a href="#" class="explore-button">EXPLORE MORE</a>
          </div>
          <div class="more-div-img">
            <a href="#">
              <img
                src="https://cdn.staticneo.com/w/naruto/thumb/Minatonamikaze.jpg/413px-Minatonamikaze.jpg"
                alt=""
              />
            </a>

            <a href="#"> <p>ACCESSORIES</p> </a>
            <a href="#" class="explore-button">EXPLORE MORE</a>
          </div>
          <div class="more-div-img">
            <a href="#">
              <img
                src="https://cdn.staticneo.com/w/naruto/thumb/Minatonamikaze.jpg/413px-Minatonamikaze.jpg"
                alt=""
              />
            </a>

            <a href="#"> <p>ACCESSORIES</p> </a>
            <a href="#" class="explore-button">EXPLORE MORE</a>
          </div>
        </div>
      </section>

      <!-- -----------more SECTION ends----------->

      <!-- --------------------after 768px px---------------- -->
    </span>

    <!-- ---------footer section start------------------ -->
    <section id="footer">
      <section id="promise">
        <h1>OUR PROMISE</h1>
        <div class="promise-div">
          <div class="prom1">
            <i class="fas fa-motorcycle" aria-hidden="true"></i>
            <p>
              Home Delivery <br />
              At Your Doorstep
            </p>
          </div>
          <div class="prom2">
            <i class="fas fa-shield-alt" aria-hidden="true"></i>
            <p>
              Minimum <br />
              6 Months Warranty
            </p>
          </div>
          <div class="prom3">
            <i class="fas fa-thumbs-up"></i>
            <p>
              Brand <br />
              Assured Quality
            </p>
          </div>
          <div class="prom4">
            <i class="fas fa-undo-alt" aria-hidden="true"></i>
            <p>
              Easy <br />
              250 Hour Return
            </p>
          </div>
        </div>
      </section>
      <section id="useful">
        <div class="useful-div">
          <div class="use1">
            <p>Ishtore</p>
            <span class="isht-dis">
              As India’s first e-commerce platform committed <br />
              to boosting Indian Fashion and apparel Brands <br />
              Accessible to everyone. <br />
            </span>
            <span class="green" style="color: rgb(46, 184, 46)">
              #atmanirbharbharat
            </span>
          </div>
          <div class="use-combine">
            <div class="use2">
              <p>USEFUL LINKS</p>
              <ul>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
              </ul>
            </div>
            <div class="use3">
              <p>ABOUT US</p>
              <ul>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
                <li><a href="#">LOREM</a></li>
              </ul>
            </div>
          </div>

          <div class="use4">
            <div class="use4-divs large">
              <p class="init">AN INNTIATIVE BY</p>
              <i class="fas fa-thumbs-up"></i>
            </div>
            <div class="use4-divs">
              <p>Lorem</p>
              <i class="fas fa-thumbs-up"></i>
            </div>
            <div class="use4-divs">
              <p>Lorem</p>
              <i class="fas fa-thumbs-up"></i>
            </div>
            <div class="use4-divs four">
              <p>Lorem</p>
              <i class="fas fa-thumbs-up"></i>
            </div>
          </div>
        </div>
      </section>
      <section id="follow">
        <p>FOLLOW US</p>
        <div class="follow-div">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram-square"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
      </section>
      <section id="subscribe">
        <div class="subscribe-div">
          <div class="sub1">
            <p>SUBSCRIBE FOR MORE UPDATES</p>
            <input type="text" /> <i class="fas fa-caret-right"></i>
          </div>
          <div class="sub2">
            <div class="smile">
              <p>DONATE TO SPREAD SMILES</p>
              <i class="fab fa-amazon-pay"></i>
            </div>
            <i class="far fa-smile-beam" aria-hidden="true"></i>
          </div>
          <div class="sub3">
            <p>
              INDIAN FASHION BRAND! INTERESTED TO JOIN <br />

              OUR PLATFORM ? SCAN QR CODE BELOW <br />
              OR WRITE TO US AT :
              <a href="mailto:ishtoreofficial@gmail.com"
                >ishtoreofficial@gmail.com</a
              >
            </p>
          </div>
        </div>
      </section>
    </section>

    <!-- ---------footer section end------------------ -->

    <div class="btn-for-footer">
      <hr class="bottom-line" />
      <p class="know-more" onclick="openFooter()">Know More About Ishtore</p>
    </div>

    <!-- -----------bootstrap cdn --------------- -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>

    <!-- --------------------bootstrap js cdn----------- -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>

    <!-- Swiper JS  cdn -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- ------------javascript for go-to section---------- -->

    <!-- -------------mobile UI------------------- -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="index.js"></script>
  </body>
</html>
