<?php
        include('security.php');
        $query = "SELECT * FROM wishlist";
        $query_run = mysqli_query($connection, $query);
            ?>
                
                <div class="container">
                <div class="row">
                <h3>Wishlist</h3>
                
                <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                      $id=$row['pid'];
                      
         
        ?>
                    <div class="col-sm-4 main wishlist">
                    <form action="singleproduct.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="p_id" value="<?php echo $row['pid'] ?>">
                     <button type="submit" class="btn" name="prodetail">
                    <?php echo '<img src="images/'.$row['img'].'" style="width: 100%;""  alt="image">'?>
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">
                      <?php echo $row['pname'] ?></a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="">
                      </button>
            </form>
                                             
                      <input type="hidden" value=" <?php echo $row['pid'] ?>" name="hide">
                      <button class="fa fa-trash" type="submit" value="Delete"  name="del"></button>
                      <!-- <input class="fa fa-eye" type="submit" value="Delete"  name="del"
                      id="bu" > -->
                            </a><a style="margin-left: 15px;" href=""><i class="fa fa-eye"
                            aria-hidden="true"></i></a></p>
                           
                    </div>
                    <?php
              } 
              }
              ?>
              <?php
              if(isset($_POST["del"]))
              {
                $valuep=$_POST["hide"];
                $sql="DELETE FROM wishlist WHERE id='".$valuep."'";
                $query_run = mysqli_query($connection, $sql);
          }
            
              ?>
               
                  </div> 
                </div>
              </div>
            </div>
        
  
            <script src="jquery.js"></script>
            <script>
function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();

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
         


</script>