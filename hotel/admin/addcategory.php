<?php
define('TITLE', 'Add New category');
define('PAGE', 'Add New category');
include('includes/header.php');   
include('db/db.php');

session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}




$msg="";
if (isset($_POST['submit'])) {
  $categories  = $_POST['categories'];
  $guest  = $_POST['guest'];
  $price  = $_POST['price'];
  $date  = $_POST['date'];
  $date2  = $_POST['date2'];

$file = $_FILES['image'];
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];
if ($fileerror==0) {
  $destfile = 'upload/'.$filename;
  move_uploaded_file($filepath, $destfile);




$select = "select * from category where categories='$categories'";

$result = mysqli_query($con, $select);

$num = mysqli_num_rows($result);

if ($num==1){
      $msg = "<h4 style='color:black;'>Category already inserted</h4>";
   }else
   {
      $insert = "INSERT into category(categories,guest,image,price,check_in,check_out)values('$categories','$guest','$destfile','$price','$date','$date2')";
      mysqli_query($con,$insert);
      
   }


}
}







?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="pname">Category Name</label>
      <input type="text" class="form-control" name="categories" required="">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>

    <div class="form-group">
      <label for="pava">Guest/Room</label>
      <input type="text" class="form-control"  name="guest"  required="">
    </div>

      <div class="form-group">
      <label for="pava">image</label>
      <input type="file" class="form-control"  name="image" required="" >
    </div>

      <div class="form-group">
      <label for="pava">Price</label>
      <div class="form-group"> <input class="form-control" type="text" name="price" required> </div>
    </div>

      <div class="form-group">
      <label for="pava">Check In</label>
      <div class="form-group"> <input class="form-control" name="date" type="date" > </div>
    </div>
      <div class="form-group">
      <label for="pava">Check out</label>
     <div class="form-group"> <input class="form-control" name="date2" type="date">
    </div>
<!--       <div class="form-group">
      <label for="pava">No Of Rooms</label>
      <select class="form-control" name="room" required> -->
         <!--                                
                                            <?php

                  //  $sql1 = "SELECT * from noofroom ORDER BY noofroom ASC";
                  //  $result1 = mysqli_query($con,$sql1);
                   //  while ($row1 = mysqli_fetch_assoc($result1)){
                      ?>
                      <option value="1" selected hidden>1</option>
                      <option value="<?php// echo $row1['room_id'];?>"><?php// echo $row1['noofroom'];?></option>

                      <?php
                     
                    ?> -->
                                      
<!--                                     </select>
    </div>
      <div class="form-group">
      <label for="pava">Age For Extra Bed</label>
      <select class="form-control" name="extrabed" required> -->
                <!--              
                                                                 <?php

                  //  $sql2 = "SELECT * from extrabed ORDER BY extrabed ASC";
                   // $result2 = mysqli_query($con,$sql2);
                   // while ($row2 = mysqli_fetch_assoc($result2)){
                      ?>
                                 <option value="0" selected hidden>age for extra bed</option>
                                        <option value="0" >No. of extra bed</option>
                      <option value="500"><?php// echo $row2['extrabed'];?></option>

                      <?php
                     

                    ?>
                              -->        
<!--                                     </select>
    </div>
      <div class="form-group">
      <label for="pava">Age Of Children</label>
      <select class="form-control" name="children" required>
                                        <option value="0" selected hidden>No. of Children</option>
                                        <option value="0">No Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select> -->
<!--     </div>
      <div class="form-group">
      <label for="pava">Total</label>
      <input type="text" class="form-control"  name="total" >
    </div>
      <div class="form-group">
      <label for="pava">Name</label>
      <input class="form-control" type="text"  name="name">
    </div>
      <div class="form-group">
      <label for="pava">Email</label>
      <input class="form-control" type="text" name="email">
    </div>

        <div class="form-group">
      <label for="pava">Phone</label>
      <input class="form-control" type="text"  name="Phone">
    </div> -->

<br>
   
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
      <a href="category.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
</div>
<!-- Only Number for input fields -->

<?php
include('includes/footer.php'); 
?>