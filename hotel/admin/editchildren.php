<?php
define('TITLE', 'children');
define('PAGE', 'children');
include('includes/header.php');   
include('db/db.php');




session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}










    $msg = "";
     $id = $_GET['id'];


if (isset($_POST['submit'])) {
    $children = $_POST['children'];

    $sql2 = "select * from children where children = '$children'";
    $result2 =mysqli_query($con,$sql2);
    $num = mysqli_num_rows($result2);
    if ($num==1) {
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> No of room already available </div>';
    }else{

  $sql1 = "UPDATE children SET children = '$children' WHERE children_id = '$id'";
  $result1 = mysqli_query($con,$sql1);
    if($result1){
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
     /*header('location:noofroom.php');*/
    } else { 
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
}
}







    $sql =  "SELECT * from children  WHERE children_id ='$id'";
    $result = mysqli_query($con,$sql); 
    if(mysqli_num_rows($result)>0)
    {
      while ($row = mysqli_fetch_assoc($result)) {   

?>
<div class="col-sm-6 mt-5  mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pname">Category Name</label>
      <input type="hidden" class="form-control" name="children_id" value="<?php echo $row['children_id'] ?>">
      <input type="text" class="form-control" name="children" value="<?php echo $row['children'] ?>">
      <span><?php echo $msg;?></span>
    </div>

   
   
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
      <a href="children.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
<?php }}?>
</div>


<?php
include('includes/footer.php'); 
?>