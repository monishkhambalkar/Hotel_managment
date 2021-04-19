<?php
define('TITLE', 'Edit no of room');
define('PAGE', 'Edit no of room');
include('includes/header.php');   
include('db/db.php');




session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}










    $msg = "";
     $id = $_GET['id'];


if (isset($_POST['submit'])) {
    $noofroom = $_POST['noofroom'];

    $sql2 = "select * from noofroom where noofroom = '$noofroom'";
    $result2 =mysqli_query($con,$sql2);
    $num = mysqli_num_rows($result2);
    if ($num==1) {
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> No of room already available </div>';
    }else{

  $sql1 = "UPDATE noofroom SET noofroom = '$noofroom' WHERE room_id = '$id'";
  $result1 = mysqli_query($con,$sql1);
    if($result1){
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
     /*header('location:noofroom.php');*/
    } else { 
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
}
}







    $sql =  "SELECT * from noofroom  WHERE room_id ='$id'";
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
      <input type="hidden" class="form-control" name="id" value="<?php echo $row['room_id'] ?>">
      <input type="text" class="form-control" name="noofroom" value="<?php echo $row['noofroom'] ?>">
      <span><?php echo $msg;?></span>
    </div>

   
   
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
      <a href="noofroom.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
<?php }}?>
</div>


<?php
include('includes/footer.php'); 
?>