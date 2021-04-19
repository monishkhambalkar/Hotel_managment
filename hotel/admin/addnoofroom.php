<?php
define('TITLE', 'add no of room');
define('PAGE', 'add no of room');
include('includes/header.php');   
include('db/db.php');





session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}












$msg="";
if (isset($_POST['submit'])) {
  $noofroom  = $_POST['noofroom'];
 

$select = "select * from noofroom where noofroom='$noofroom'";
$result = mysqli_query($con, $select);
$num = mysqli_num_rows($result);
if ($num==1){
      $msg = "<h4 style='color:black;'>Category already inserted</h4>";
   }else
   {
      $insert = "insert into noofroom(noofroom)values('$noofroom')";
      mysqli_query($con,$insert);
      header('location:noofroom.php');
   }


}







?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pname">No of room</label>
      <input type="text" class="form-control" name="noofroom">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>


   
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
      <a href="noofroom.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
</div>
<!-- Only Number for input fields -->

<?php
include('includes/footer.php'); 
?>