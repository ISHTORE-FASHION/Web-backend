
<?php
include('security.php');
include('navbar.php');
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
  <div class="small-container single-product">
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
      <div class="col-2">
      <center><?php echo '<img src="images/'.$row['images'].'" width="80%" id="product-img" alt="">'?>  </center>
      
        <div class="small-img-row1">
          <div class="small-img-col">
          <center><?php echo '<img src="images/'.$row['image1'].'" width="80%" class="small-img" alt="image1">'?></center>
          </div>
          <div class="small-img-col">
          <center><?php echo '<img src="images/'.$row['image2'].'" width="80%" class="small-img" alt="image1">'?></center>
          </div>
          <div class="small-img-col">
          <center><?php echo '<img src="images/'.$row['image3'].'" width="80%" class="small-img" alt="image1">'?></center>
          </div>
          <!-- <div class="small-img-col">
          <center><?php echo '<img src="images/'.$row['image4'].'" width="80%" class="small-img" alt="image1">'?></center>
          </div> -->
         
          
        </div>
      </div>
      
      <div class="col-2">
      
      <form   method="post" id="myform" >
        <h2 style="font-family: 'Times New Roman', Times, serif; margin-bottom: 0;">Indian Clothing Company</h2>
        <p style="font-family: 'Times New Roman', Times, serif; opacity: 0.7; font-size: 23px;"><?php echo $row['name'] ?>
        </p>
        <hr style="height: 1.5px;">
        <p style="font-size: 26px; font-family: 'Times New Roman', Times, serif; margin-bottom: 0;">Rs <span
            style="font-family: 'Patrick Hand', cursive;"><?php echo $row['price'] ?> </span><strike
            style="opacity: 0.7;"><?php echo $row['saleprice'] ?></strike></p>
        <p style="font-family: 'Times New Roman', Times, serif; color: #af92f5; font-size: 18px;">Inclusive Of All Taxes
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
        &nbsp;
        <!-- add to cart -->
        <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="pname" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="pimage" value="<?php echo $row['images'] ?>">
        <input type="hidden" name="ori_price" value="<?php echo $row['saleprice'] ?>">
      
        <input  type="submit" name="cart" id="submit" value="ADD TO BAG"  class="btn btn-success btn-md">
       <!-- add to wishlist -->
        <input type="hidden" name="pid" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="pname" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="pprice" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="pimage" value="<?php echo $row['images'] ?>">
        <input type="hidden" name="ori_price" value="<?php echo $row['saleprice'] ?>">
      
        <input  type="submit" name="wishlist" id="submit_wish" value="Wishlist"  class="btn btn-success btn-md">
        
        <p style="font-family: 'Times New Roman', Times, serif;">Delivery Options</p>
        <input style="width: 50%;" type="text" placeholder="Enter Pincode"><span style="color: blueviolet;">Check</span>
        <p style="font-family: 'Times New Roman', Times, serif; font-size: 13px; opacity: 0.9;">Please Enter Pincode To
          Check Delivery Time And Availability Of Cash On Delivery</p>
      </div>
      </form>
      
    </div>
    <hr style="height: 1.5px;">
    <p style="font-family: 'Times New Roman', Times, serif; margin-bottom: 0;">Product Details</p>
    <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px; opacity: 0.8;"><?php echo $row['prod_details'] ?></p>
    <p style="font-family: 'Times New Roman', Times, serif; margin-bottom: 0;">Fabric
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material
      And Care</p>
    <p style="font-family: 'Times New Roman', Times, serif; opacity: 0.8; font-size: 20px;"><?php echo $row['material'] ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['care'] ?></p>

    <p style="font-family: 'Times New Roman', Times, serif; margin-bottom: 0;">Size And Fit
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specification
    </p>
    <p style="font-family: 'Times New Roman', Times, serif; opacity: 0.8; font-size: 20px;"><?php echo $row['size'] ?>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['specify'] ?></p>
      <?php
                }
            }
        ?>
  </div>
  <!-- <div class="middle">
    <h4>Pair With It</h4>
    <div class="row1">
      
    </div>
  </div> -->

  <div class="categories">
    <div class="small-container">
      <div class="row1"
        style="border: 1px solid black; box-shadow: 3px 3px 5px gray; padding: 40px; padding-bottom: 0;">
        <!-- <h3 style="font-family: 'Times New Roman', Times, serif;">Pair With It</h3> -->
        <div class="col-3">
          <img src="category-1.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; font-family: 'Times New Roman', Times, serif;">Rs 1299</p>
        </div>
        <div class="col-3">
          <img src="category-2.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; font-family: 'Times New Roman', Times, serif;">Rs 1299</p>
        </div>
        <div class="col-3">
          <img src="category-3.jpg" alt="">
          <p style="text-align: center; margin-bottom: 0;"><a href="#">Sukoon</a></p>
          <p style="text-align: center; opacity: 0.8; font-family: 'Times New Roman', Times, serif;">Rs 1299</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5" style="padding-left: 3rem; padding-right: 4rem;">
  <div class="shop">
        <h1
        style="font-size: 35px; padding-bottom: 25px; font-family: 'Times New Roman', Times, serif; padding-left: 38px; font-size: 31px;">
        Customers Also Liked</h1>
        <?php
        
        $query = "SELECT * FROM products";
        $query_run = mysqli_query($connection, $query);
    ?>

        <div class="container">
          <div class="row">
          <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
        ?>
            <div class="col-sm-3 main wishlist">
            <form action="singleproduct.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="p_id" value="<?php echo $row['id'] ?>">
            <button type="submit" class="btn" name="prodetail">
            <?php echo '<img src="images/'.$row['images'].'" style="width: 230px; height: 350px;""  alt="image">'?>
              <p style="margin-bottom: 0;"><?php echo $row['name'] ?></p>
              <p style="opacity: 0.5; font-size: 16px; margin-bottom: 0;"><?php echo $row['material'] ?></p>
              <p style="font-size: 16px;"><?php echo $row['price'] ?><strike style="opacity: 0.5;" class="mx-3"><?php echo $row['saleprice'] ?></strike></p>
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

        
                </div>
            </div>
          
    
          </div>
  </div>
  <?php
  include('footer.php');
?>
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

    <script type="text/javascript">
    $(document).ready(function(){    
               displaydata();
       function displaydata(){
           $.ajax({
          url:'action.php',
          type:'post',
          success:function(responsedata){
            $('#response').html(responsedata);
          }

           });
       }
       });
       $(document).ready(function(){    
               displaydata();
       function displaydata(){
           $.ajax({
          url:'wishlist.php',
          type:'post',
          success:function(responsedata){
            $('#wish').html(responsedata);
          }

           });
       }
       });         
    

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
</body>

</html>