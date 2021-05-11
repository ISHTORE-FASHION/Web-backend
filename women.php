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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOMEN PAGE</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awsome icons cdn link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@100;400&display=swap" rel="stylesheet">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!--swiper cdn link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- plain css link -->
    <link rel="stylesheet" href="./Women.css">
    
</head>
<body>

   <!-- -------------------side flat coupon start-------------- -->
   <div class="fixed">
    <button style="width: 100%;" class="openbtn" onclick="openNav()"> <p>FLAT 100 OFF</p>  <i class="fas fa-caret-up "></i></button>
  </div> 
  <div id="mySidepanel" class="sidepanel" >
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
      <img src="side.jpg" style="height: 245px; width: 100%;" alt="">
    

  </div>
  <!-- -------------------side flat coupon end-------------- -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row jumbo">
          <img  src="./2.jpg" class="col-lg-3 col-md-4  corouselimage">
          <div  class="flex flex-column content"  >
            <h5 style="margin:0;">INDIAN CLOTHING COMPANY</h5>
            <h5 style="color:grey ;margin: 0;">Casual Wear</h5>
            <hr style="border: 1px solid #000; margin:1rem; margin-left: 0;">
            <a href="" style="margin: 0; color:grey;font-size: large;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row jumbo">
          <img  src="./2.jpg" class="col-lg-3 col-md-4  corouselimage">
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
          <img  src="./3.jpg" class="col-lg-3 col-md-4 corouselimage">
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
  </div>

  
 
  <div class='container-fluid'>
        <h3 class="heading" style='margin:10px;margin-bottom: 0;'>Categories To Bag</h3>
        
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide categorytag">
            <form action="brandlist.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="ptype" value="Casual Wear">
            <button type="submit" class="btn" name="wear">
              <a>
                <div class=" circle">
                  <img src='./1.jpg'>
                </div>
                <h5>Casual Wear</h5>
                  </a>
                </button>
            </form>
            </div>

            <div class="swiper-slide categorytag">
            <form action="brandlist.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="ptype" value="Ethnic Wear">
            <button type="submit" class="btn" name="wear">
              <a>
                <div class=" circle">
                  <img src='./1.jpg'>
                </div>
                <h5>Ethnic Wear</h5>
              </a>
              </button>
            </form>          
            </div>

            <div class="swiper-slide categorytag">
            <form action="brandlist.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="ptype" value="Night Wear">
            <button type="submit" class="btn" name="wear">
              <a>
                <div class=" circle">
                  <img src='./1.jpg'>
                </div>
                <h5>Night Wear</h5>
              </a>
              </button>
            </form>          
            </div>
            
    
            <div class="swiper-slide categorytag">
              
              <a>
                <div class=" circle">
                  <img src='./1.jpg'>
                </div>
                <h5>Co-Ord</h5>
              </a>
               
            </div>
    
            <div class="swiper-slide categorytag">
              
              <a>
                <div class=" circle">
                  <img src='./1.jpg'>
                </div>
                <h5>Accessories</h5>
              </a>
               
            </div>
    
            <div class="swiper-slide categorytag">
              
              <a>
                <div class=" circle">
                  <img src='./1.jpg'>
                </div>
                <h5>Random</h5>
              </a>
               
            </div>
            
          </div>
          
          
          <div class="swiper-button-prev pos"></div>
          <div class="swiper-button-next pos"></div>
          
        </div>
       

    <h3 class="heading" style='margin:13px;'>Trending Now</h3>
    <?php
        
        $query = "SELECT * FROM products where category_id=1";
        $query_run = mysqli_query($connection, $query);
        
    ?>
    <div class="flex trendingflex" >
    <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                      $url="images/".$row["images"];
        ?>
         
         
      <form action="single3.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="p_id" value="<?php echo $row['id'] ?>">
            
            <button type="submit" class="btn" name="prodetail">
            <?php echo '<img src="images/'.$row['images'].'" style="width: 230px; height: 350px;""  alt="image">'?>
    
      </button>
            </form> 
      <!-- <div class='trending'></div>
      <div class='trending'></div>
      <div class='trending'></div>
      <div class='trending'></div>
      <div class='trending'></div> -->
      <?php
              } 
              }
              else {
                echo "No Record Found";
              }
              ?>

    </div>
    

    <h3 class="heading" style="margin:12px;" >Our Top Brands</h3>

    <div class="flex topbrandflex">
    <?php
        
        $query = "SELECT * FROM products where category_id=1";
        $query_run = mysqli_query($connection, $query);
        
    ?>
    <div class="flex trendingflex" >
    <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
        ?>
      <!-- <div class="ibrand" ></div> -->
      <!-- <div class="ibrand" ></div>
      <div class="ibrand" ></div>
      <div class="ibrand"  ></div>
      <div class="ibrand" ></div>
      <div class="ibrand" ></div>
      <div class="ibrand" ></div> -->
      <div style='position: relative;'class="ibrand textcon"  >
      <form action="brandlist2.php" method="POST" enctype="multipart/form-data">
            
            <button type="submit" class="btn" value="<?php echo $row['brand'] ?>" name="brand">
        <p  style='position: absolute;
        top: 5rem;
        font-size: 2rem;
        text-align: center;padding: 7%;'><?php echo $row['brand'] ?>
        </p>
        </button>
        </form>
      </div>
      <?php
              } 
              }
              else {
                echo "No Record Found";
              }
              ?>
      <div id="tbrem" class="ibrand tbrem"  ></div>
    </div>

  

    <div class="flex customerflex" >
      <h3 class="heading" style='margin: 12px; margin-top: 0;'>Customer Also Liked</h3>
      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0; ">Comfy Trees</p>
          <p style="margin: 0;">The Perfect Match</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
          
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class="productinfo">
          <p style="margin: 0;">Nightwear</p>
          <p style="margin: 0;">The Comfort Zone</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
        
      
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Co-Ords</p>
          <p style="margin: 0;">Perfect Pair</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
        
      
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Denim Collection</p>
          <p style="margin: 0;">Symbol of Bold</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
        
        
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Fusion Dress</p>
          <p style="margin: 0;">Colours of the Season</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
       
       
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0; ">Lingerie</p>
        <p style="margin: 0;">Made With Love</p>
        <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
        
        
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Smartwear</p>
          <p style="margin: 0;">Classy Lookbook</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
        
        </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Beachy Vibes</p>
          <p style="margin: 0;">Mood for Holiday</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
        </div>
       
       
      </div>

      <div class="flex flex-column likedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Style your own</p>
          <p style="margin: 0;">Handle with Care</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
         
        </div>
        
        
      </div>

      

      <div class="flex flex-column likedcontainer " id="lastlikedcontainer" style="align-items: center;">
        <div class="liked"></div>
        <div class='productinfo'>
          <p style="margin: 0;">Wedding Match</p>
          <p style="margin: 0;">Perfect look</p>
          <a href="#" style="margin: 0;color:grey;font-size: small;"><i style='margin:0 0.5rem;'class="fas fa-plus"></i>Explore</a>
          
        </div>
        
        
      </div>
      
    </div>

    <div class='flex mostlovedbrands'>
      <h3 style="margin: 12px;">Most-Loved Brands</h3>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
      <div class='mbrand'></div>
    </div>

    <div class="lastcontainer lastcontainerflex" >
      <div class='last' >
        <div class='lastcontent'>
          <p style='font-size: 12px;'>TEES</p>
        <a class='btn btn-sm' style='width:80%;color: #fff; border: 2px solid #fff;margin-left: 8%; margin-bottom: 2rem;'>Explore Now</a>
        </div>
        
      </div>
       
      
      <div class="last" >
        <div class='lastcontent'>
          <p style='font-size: 12px;' >DENIMS</p>
        <a class='btn btn-sm' style='width:80%;color: #fff; border: 2px solid #fff;margin-left: 8%; margin-bottom: 2rem;'>Explore Now</a>
        </div>
      </div>
      <div class="last" >
        <div class='lastcontent'>
          <p style='font-size: 12px;'>FORMALS</p>
        <a class='btn btn-sm' style='width:80%;color: #fff; border: 2px solid #fff;margin-left: 8%; margin-bottom: 2rem; width:80%;'>Explore Now</a>
        </div>
      </div>
      <div class="last"  >
        <div class='lastcontent'>
          <p style='font-size:12px;'>ACCESSORIES</p>
        <a class='btn btn-sm' style='width:80%; margin-left:8%;color: #fff; border: 2px solid #fff; margin-bottom: 2rem;'>Explore Now</a>
        </div>
      </div>  
      
    </div>

    
</div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src='./women.js'></script>
  
  
</body>
</html>






















