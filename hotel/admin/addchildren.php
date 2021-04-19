a<?php
define('TITLE', 'children');
define('PAGE', 'children');
include('includes/header.php');   
include('db/db.php');


session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}





$msg="";
if (isset($_POST['submit'])) {
  $children  = $_POST['children'];
 

$select = "select * from children where children='$children'";
$result = mysqli_query($con, $select);
$num = mysqli_num_rows($result);
if ($num==1){
      $msg = "<h4 style='color:black;'>children already inserted</h4>";
   }else
   {
      $insert = "insert into children(children)values('$children')";
      mysqli_query($con,$insert);
      header('location:children.php');
   }


}







?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pname">children</label>
      <input type="text" class="form-control" name="children">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>


   
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
      <a href="children.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
</div>
<!-- Only Number for input fields -->

<?php
include('includes/footer.php'); 
?>