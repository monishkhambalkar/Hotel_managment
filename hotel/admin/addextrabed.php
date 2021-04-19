a<?php
define('TITLE', 'Add New extra bed');
define('PAGE', 'Add New extra bed');
include('includes/header.php');   
include('db/db.php');


session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}





$msg="";
if (isset($_POST['submit'])) {
  $extrabed  = $_POST['extrabed'];
  $value  = $_POST['value'];
 

$select = "select * from extrabed where extrabed='$extrabed'";
$result = mysqli_query($con, $select);
$num = mysqli_num_rows($result);
if ($num==1){
      $msg = "<h4 style='color:black;'>extrabed already inserted</h4>";
   }else
   {
      $insert = "insert into extrabed(extrabed,value)values('$extrabed','$value')";
      mysqli_query($con,$insert);
      header('location:extrabed.php');
   }


}







?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pname">Extra bed</label>
      <input type="text" class="form-control" name="extrabed">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>
     <div class="form-group">
      <label for="pname">Value</label>
      <input type="text" class="form-control" name="value">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>


   
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