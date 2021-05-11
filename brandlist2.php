<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    
    <script src="https://kit.fontawesome.com/c98256b770.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="brandlist.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <!-- NAVBAR SECTION -->
  

<!--     
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row jumbo">
          <img  src="./Images/10.jpg" class="col-lg-3 col-md-4  corouselimage">
          <div  class="flex flex-column content"  >
            <h5 style="margin:0;">INDIAN CLOTHING COMPANY</h5>
            <h5 style="color:grey ;margin: 0;">Casual Wear</h5>
            <hr style="border: 1px solid #000; margin:1rem; margin-left: 0;">
            <a href="#" style="margin: 0; color:grey;font-size: large;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row jumbo">
          <img  src="./Images/11.jpg" class="col-lg-3 col-md-4  corouselimage">
          <div  class="flex flex-column content"   >
            <h5 style="margin:0;">INDIAN CLOTHING COMPANY</h5>
            <h5 style="color:grey ;margin: 0;">Formals</h5>
            <hr style="border: 1px solid #000; margin:1rem; margin-left: 0;">
            <a href="#" style="margin: 0; color:grey;font-size: large;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row jumbo">
          <img  src="./Images/12.jpg" class="col-lg-3 col-md-4 corouselimage">
          <div  class="flex flex-column content"   >
            <h5 style="margin:0;">INDIAN CLOTHING COMPANY</h5>
            <h5 style="color:grey ;margin: 0;">Wedding Match</h5>
            <hr style="border: 1px solid #000; margin:1rem; margin-left: 0;">
            <a href="#" style="margin: 0; color:grey;font-size: large;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid bg-dark text-white " style='width: 95%;' >
                <div class="row">
                  <img src="./Images/10.jpg" class="col-lg-3 col-sm-4 headerimage">
                  <div  class=" col-sm-7 row headerinside" >
                    <p class="p1">INDIAN CLOTHING COMPANY</p>
                    <p class="p2">EXPLORE MORE</p>
                  </div>
                </div>
            
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid bg-dark text-white " style='width: 95%;' >
                <div class="row ">
                  <img src="./Images/11.jpg"  class="col-lg-3 col-sm-4 headerimage ">
                  <div  class=" col-sm-7 row headerinside">
                    <p class="p1">INDIAN CLOTHING COMPANY</p>
                    <p class="p2">EXPLORE MORE</p>
                  </div>
                </div>
            
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid bg-dark text-white " style='width: 95%;' >
                <div class="row">
                  <img src="./Images/12.jpg"  class="col-lg-3 col-sm-4 headerimage">
                  <div  class=" col-sm-7  row headerinside" >
                    <p class="p1" >INDIAN CLOTHING COMPANY</p>
                    <p class="p2">EXPLORE MORE</p>
                  </div>
                </div>
            
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <?php
      if(isset($_POST['brand']))
      {
     $type = $_POST['brand'];
        }
      ?>
    <div class="row headertext" style="margin: 1rem; margin-top: 2rem;">
        <hr class="toberem" style="background-color: black; width:15%;">
        <p style='font-weight: bold;' class='header'> <?php echo $type?><spam style='font-weight: normal;color: grey;'>(1899)</spam></p>
        <hr class="inc" style="background-color: black; width:15%;">
        <div class="row filtercontainer">
            <p class=" btn mobileview" style="padding: 0; margin: 0;">Filters</p>
            <p class="btn desktopsort" style="margin:0;" id="myBtn3">Sort By</p>
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
                      <div class="input-group" style='background-color: #f2f2f2;
                      height: 3rem;
                      width: 95%;
                      margin: auto;
                      margin-top: 2rem;
                      margin-bottom: 1rem;
                      border-radius: 0.8rem;'>
                        <i class="fa fa-search " style='margin:auto ;margin-left:1rem;'></i>
                        <input type="text" style='margin:auto;'class="form-control" placeholder="Sort By" >
                        </div>

                        <div class="col-12" style='margin-left: 7%;font-size: 13.6px;'>
                            <div class="form-check" >
                                <label class="form-check-label subtitle">
                                  <input type="radio" class="form-check-input " name="optradio">Price:High to Low
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label subtitle">
                                  <input type="radio" class="form-check-input " name="optradio">Price:Low to High
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label subtitle">
                                  <input type="radio" class="form-check-input " name="optradio">Popularity
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label subtitle">
                                  <input type="radio" class="form-check-input " name="optradio">What's New
                                </label>
                              </div>
                        </div>
                       

                      <!-- <div class="col-12" style='margin-left: 7%;'>
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
                       
                      
                      </div> -->
                     
                    </div>
                  </div>
                </div>
    
              </div>
               <div class="dropdown mobiledropdown">
             
                <p class="btn dropdown-toggle mobiledropdownbtn" style="margin:0;" data-toggle="dropdown"  id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false">Sort By</p>
                <div class="dropdown-menu">
                  <a class="dropdown-item subtitle" href="#">Price:High to Low</a>
                  <a class="dropdown-item subtitle" href="#">Price:Low to High</a>
                  <a class="dropdown-item subtitle" href="#">Popularity</a>
                  <a class="dropdown-item subtitle" href="#">What's new</a>
                </div>
              </div>
               
              <!-- <div class="dropdown">
                <p class="btn dropdown-toggle" style="margin:0;" data-toggle="dropdown"  id="dropdownMenuButton"  aria-haspopup="true" aria-expanded="false">Sort By</p>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" tabindex="0">Action</a>
                  <a class="dropdown-item active" tabindex="0">Another action</a>
                  <a class="dropdown-item" tabindex="0">Something else here</a>
                </div>
              </div> -->
           
        </div>
        
        <hr class="toberem" style="background-color: black; width:15%;">
    </div>
    

    <div class="container-fluid">
        
        <div class="row"style="justify-content: space-around;">
            <div class="col-sm-4 col-md-3 col-lg-2 filters" >
                <div class="row filterhead"  >
                    <p>Filters</p>
                    <a class="btn btn-sm btn-outline-primary" style='background: transparent; border: 2px solid black;'>
                        Reset
                    </a>
                </div>
                
                <div class="t1">
                
                    <h3>Type</h3>
                    <div class="type">
                        <div class="t11">
                            <div >Formals</div>
                            <div >Casual</div>
                            <div >Fusion</div>
                        </div>
                        <div class="t11">
                            <div >22</div>
                            <div >60</div>
                            <div >120</div>
                        </div>
                        <div class="t11">
                            <div ><input type="checkbox"></div>
                            <div ><input type="checkbox"></div>
                            <div ><input type="checkbox"></div>
                        </div>
                    </div>
                </div>

                
            <div class="t1">
                <h3>Categories</h3>
                <div class="type">
                <div class="t11">
                    <div >Shirt</div>
                    <div >Dress</div>
                    <div >T Shirt</div>
                    <div >SweatShirt</div>
                    <div >Jeans</div>
                    <div >Jacket</div>
                    <div >Shoes</div>
                    <div >Shorts</div>
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Price</h3>
                <div class="t12">
                    <div class="d-flex flew-row" style="margin:0; margin-bottom: 5px; justify-content: space-evenly;align-items: center;">
                        <input type="text" id="r1" readonly style="width:22%;border:2px solid black!important; color:#000; font-size: 12px;">
                        <hr style='width: 10px; border: 2px solid #000;margin: 0;'>
                        <input type="text" id="r2" readonly style="width:22%;border:2px solid black!important; color:#000; font-size: 12px;">
                        <a class="btn btn-sm" href="#" style='background: transparent; border: 2px solid black;color: black;font-size: 10px;'>
                            Apply
                        </a>
                    </div>
                    
                    <div id="slider-range"></div> 
                   
                </div>
            </div>
            
            <div class="t1">
                <h3>Size</h3>
                <div class="type">
                <div class="t11">
                    <div >S</div>
                    <div >M</div>
                    <div >L</div>
                    <div >XL</div>
                    <div >XXL</div>
                    <div >XXXL</div>
                  
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Colour</h3>
                <div class="type">
                <div class="t11">
                    <div >Red</div>
                    <div >Yellow</div>
                    <div >Blue</div>
                    <div >Black</div>
                    <div >Brown</div>
                    <div >White</div>
                  
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                  
                </div>
                
                </div>

            </div>
            
            <div class="t1">
                <h3>Occasion</h3>
                <div class="type">
                <div class="t11">
                    <div >Casula</div>
                    <div >Festive</div>
                    <div >Day</div>
                    <div >Formal</div>
                    <div >Everyday</div>
                    <div >Evenings</div>
              
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
               
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Discount</h3>
                <div class="type">
                <div class="t11">
                    <div >10%</div>
                    <div >20%</div>
                    <div >30%</div>
                    <div >60%</div>
                    <div >80%</div>
                    <div >90%</div>
                    <div >Sale</div>
                    <div >Festive Sale</div>
                    <div>Gift Card</div>
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>60</div>
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div><input type="checkbox"></div>
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Material</h3>
                <div class="type">
                <div class="t11">
                    <div >Cotton</div>
                    <div >Rayon</div>
                    <div >Polyester</div>
                    <div >Viscose</div>
                    <div >Chikankari</div>
                    <div >Velvet</div>
                    <div >Crepe</div>
                    <div >Chanderi</div>
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Fit</h3>
                <div class="type">
                <div class="t11">
                    <div >Regular</div>
                    <div >Straight</div>
                    <div >A-Line</div>
                    <div >Slim Fit</div>
                    <div >Relaxed</div>
                    <div >Flarred</div>
                   
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                   
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Pattern</h3>
                <div class="type">
                <div class="t11">
                    <div >Printed</div>
                    <div >Solid</div>
                    <div >Plain</div>
                    <div >Embroided</div>
                    <div >Stripes</div>
                    <div >Geometric</div>
                   
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                   
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    
                </div>
                
                </div>

            </div>

            <div class="t1">
                <h3>Sleeve Length</h3>
                <div class="type">
                <div class="t11">
                    <div >3/4th</div>
                    <div >Long</div>
                    <div >Sleeveless</div>
                    <div >Half</div>
                    <div >Short</div>
                    <div >Flarred</div>
                    
                
                </div>
                <div class="t11">
                    <div>22</div>
                    <div>60</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                    <div>120</div>
                   
                </div>
                <div class="t11">
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                    <div ><input type="checkbox"></div>
                </div>
                
                </div>

            </div>

                
            </div>
            <?php
            if(isset($_POST['brand']))
           $type = $_POST['brand'];
    $query = "SELECT * FROM products where brand='$type'";
    $query_run = mysqli_query($connection, $query);
    ?>
     <div class="col-sm-8 col-md-9 col-lg-9">
     <div class="row ">
    <?php
                foreach($query_run as $row)
               {
     
                   ?>
     
           
                
                               <div class="col-6 col-lg-3 image" >
                               <?php echo '<img src="images/'.$row['images'].'" width="100%" id="product-img" alt="">'?> 
                        <p class='animation' style="margin: 0;">WIshlist</p>
                        
                        <div class="i11">
                            <h3 style="margin:0"><?php echo $row['brand'] ?></h3>
                            <div><?php echo $row['material'] ?></div>
                            <div ><?php echo $row['price'] ?>  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;"><?php echo $row['saleprice'] ?></spam></div>
                            <div style='color: #757575;font-size: 1rem;'><?php echo $row['size'] ?></div>
                        </div>
                    </div>
                    <?php
                }
            
        ?>
                    <!-- <div class="col-6 col-lg-3 image" id="2">
                        <img src="./Images/3.jpg">
                        <p class='animation' style='margin: 0;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/4.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/6.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/7.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/8.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/9.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/10.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/11.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6  col-lg-3 image">
                        <img src="./Images/12.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6  col-lg-3 image">
                        <img src="./Images/13.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6  col-lg-3 image">
                        <img src="./Images/14.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    
                    <div class="col-6  col-lg-3 image">
                        <img src="./Images/15.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/16.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/17.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/19.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    
                    <div class="col-6  col-lg-3 image">
                        <img src="./Images/20.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6  col-lg-3 image">
                        <img src="./Images/21.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/22.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 image">
                        <img src="./Images/23.jpg">
                        <p class='animation' style='width:100%;text-align:center;background-color:#d1cfc9; opacity:0.6;margin: 0;margin-top: -11%;color: #000;'>WIshlist</p>
                        <div class="i11">
                            <h3 style="margin:0">BRAND</h3>
                            <div>Material</div>
                            <div >Price  <spam style="text-decoration-line: line-through; color:#757575;font-size: 1rem;">Price</spam></div>
                            <div style='color: #757575;font-size: 1rem;'>Size</div>
                        </div>
                    </div> -->
                </div>
                  
            </div>
        </div>
    </div>
    <hr style="margin:1.5rem auto; width:80%; ">
    <div class="container-fluid">
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item ptbr"><a class="page-link" href="#">5</a></li>
              <li class="page-item ptbr"><a class="page-link" href="#">6</a></li>
              <li class="page-item ptbr"><a class="page-link" href="#">7</a></li>
              <li class="page-item ptbr"><a class="page-link" href="#">8</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
    </div>
   
    <div class="container-fluid">
        <div class="row" style="justify-content: space-around;">
            <div class="col-sm-5 col-md-2 hmcard">
                <div class="hm1">
                    <h4>F L A T</h4>
                    <h4>1 0 0</h4>
                    <h4>O F F</h4>
                    <p>On Formal Footwear</p>
                </div>
                <a class="btn btn-sm"style=" width:70%; border:2px solid #000;"  data-toggle="modal" data-target="#CouponModal1">
                    Redeem Now
                </a>
                <div class="modal fade" id="CouponModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body" style='margin: auto;text-align: center;'>
                            <h1 >Congratulations</h1>
                          <img style='width: 100px;height: 100px;'src='./Images/modalimage.png'>
                          <p style='color: grey;'>You Have Successfully Redeemed Your Coupon</p>
                          
                        </div>
                        <div class="modal-footer">
                        <p style='margin-left: auto;'>T&C</p>  
                        </div> 
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-5 col-md-2 hmcard">
                <div class="hm1">
                    <h4>F L A T</h4>
                    <h4>5 0 %</h4>
                    <h4>O F F</h4>
                    <p>On Sneakers</p>
                </div>
                <a class="btn btn-sm"style="width:70%;border:2px solid #000;" data-toggle="modal" data-target="#CouponModal2">Redeem Now</a>
                <div class="modal fade" id="CouponModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body" style='margin: auto;text-align: center;'>
                            <h1 >Congratulations</h1>
                          <img style='width: 100px;height: 100px;'src='./Images/modalimage.png'>
                          <p style='color: grey;'>You Have Successfully Redeemed Your Coupon</p>
                          
                        </div>
                        <div class="modal-footer">
                        <p style='margin-left: auto;'>T&C</p>  
                        </div> 
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-5 col-md-2 hmcard">
                <div class="hm1">
                    <h4>F L A T</h4>
                    <h4>2 0 0</h4>
                    <h4>O F F</h4>
                    <p>On Denim Wear</p>
                </div>
                <a class="btn btn-sm"style="width:70%;border:2px solid #000;" data-toggle="modal" data-target="#CouponModal3">Redeem Now</a>
                <div class="modal fade" id="CouponModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body" style='margin: auto;text-align: center;'>
                            <h1 >Congratulations</h1>
                          <img style='width: 100px;height: 100px;'src='./Images/modalimage.png'>
                          <p style='color: grey;'>You Have Successfully Redeemed Your Coupon</p>
                          
                        </div>
                        <div class="modal-footer">
                        <p style='margin-left: auto;'>T&C</p>  
                        </div> 
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-5 col-md-2 hmcard">
                <div class="hm1">
                    <h4>F L A T</h4>
                    <h4>3 0 %</h4>
                    <h4>O F F</h4>
                    <p>On Tshirts</p>
                </div>
                <a class="btn btn-sm"style="width:70%;border:2px solid #000;" data-toggle="modal" data-target="#CouponModal4">Redeem Now</a>
                <div class="modal fade" id="CouponModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body" style='margin: auto;text-align: center;'>
                            <h1 >Congratulations</h1>
                          <img style='width: 100px;height: 100px;'src='./Images/modalimage.png'>
                          <p style='color: grey;'>You Have Successfully Redeemed Your Coupon</p>
                          
                        </div>
                        <div class="modal-footer">
                        <p style='margin-left: auto;'>T&C</p>  
                        </div> 
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
 
    <script src='./brandlist.js'></script> 
    
</body>
</html>