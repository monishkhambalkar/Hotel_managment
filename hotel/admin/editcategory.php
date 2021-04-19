<?php
define('TITLE', 'Edit category');
define('PAGE', 'Edit category');
include('includes/header.php');   
include('db/db.php');



session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}



    $msg1 = "";
    $msg = "";
     $id = $_GET['id'];


if (isset($_POST['submit'])) {
      $id = $_POST['id'];
      $categories = $_POST['categories'];
      $guest = $_POST['guest'];
      $price = $_POST['price'];
      $date = $_POST['date'];
      $date2 = $_POST['date2'];
      $file = $_FILES['image'];
      $filename = $file['name'];
      $filepath = $file['tmp_name'];
      $fileerror = $file['error'];
      if ($fileerror==0) {
    $destfile = 'upload/'.$filename;
    move_uploaded_file($filepath, $destfile);

    $sql2 = "SELECT * FROM category WHERE categories = '$categories'";
    $result2 =mysqli_query($con,$sql2)or die ("query unsuccess");
    $num = mysqli_num_rows($result2);
    if ($num==1) {
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">extrabed already available </div>';
    }else{

  $sql1 = "UPDATE category SET categories='$categories', guest='$guest', image='$category', price='$price', check_in='$date', check_out='$date2' WHERE id = '$id'";
  $result1 = mysqli_query($con,$sql1);
    if($result1){
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
     header('location:category.php');
    } else { 
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
}
}

}






     $id = $_GET['id'];
    $sql =  "SELECT * from category WHERE id ='$id'";

    $result = mysqli_query($con,$sql); 
 
    if(mysqli_num_rows($result)>0)
    {
      while ($row = mysqli_fetch_assoc($result)) {   

?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="pname">Category Name</label>
      <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
      <input type="text" class="form-control" name="categories" value="<?php echo $row['categories'] ?>">
      <span><?php  echo $msg;  ?></span>
    </div>

    <div class="form-group">
      <label for="pava">Guest/Room</label>
      <input type="text" class="form-control"  name="guest" value="<?php echo $row['guest'] ?>" >
    </div>

      <div class="form-group">
      <label for="pava">image</label>
      <input type="file" class="form-control"  name="image" value="<?php echo $row['image'] ?>" > <img src=" <?php echo $row['image'] ?>" height="50px;">  
    </div>

      <div class="form-group">
      <label for="pava">Price</label>
      <div class="form-group"> <input class="form-control" type="text" name="price" value="<?php echo $row['price'] ?>" required> </div>
    </div>

      <div class="form-group">
      <label for="pava">Check In</label>
      <div class="form-group"> <input class="form-control" type="date" name="date" value="<?php echo $row['check_in'] ?>" > </div>
    </div>
      <div class="form-group">
      <label for="pava">Check out</label>
     <div class="form-group"> <input class="form-control" type="date" name="date2" value="<?php echo $row['check_out'] ?>">
    </div>


<br>
   <span><?php echo  $msg1 ;  ?></span>

   <br>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Update</button>
      <a href="category.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
</div>
<?php } } ?>



<?php
include('includes/footer.php'); 
?>