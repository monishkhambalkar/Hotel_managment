<?php
define('TITLE', 'Edit extra bed');
define('PAGE', 'Edit extra bed');
include('includes/header.php');   
include('db/db.php');


session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}





    $msg = "";
     $id = $_GET['id'];


if (isset($_POST['submit'])) {
    $extrabed = $_POST['extrabed'];
    $value = $_POST['value'];
    $sql2 = "select * from extrabed where extrabed = '$extrabed'";
    $result2 =mysqli_query($con,$sql2);
    $num = mysqli_num_rows($result2);
    if ($num==1) {
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">extrabed already available </div>';
    }else{

  $sql1 = "UPDATE extrabed SET extrabed = '$extrabed',value = '$value' WHERE bed_id = '$id'";
  $result1 = mysqli_query($con,$sql1);
    if($result1){
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
     header('location:extrabed.php');
    } else { 
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
}
}










     $id = $_GET['id'];
    $sql =  "SELECT * from extrabed WHERE bed_id ='$id'";

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
      <input type="text" class="form-control" name="extrabed" value="<?php echo $row['extrabed'] ?>">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>
     <div class="form-group">
      <label for="pname">Value</label>
      <input type="text" class="form-control" name="value" value="<?php echo $row['value'] ?>">
      <span><?php if(isset($msg)) {echo $msg; } ?></span>
    </div>


   
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="submit" name="submit">Submit</button>
      <a href="extrabed.php" class="btn btn-secondary">Close</a>
    </div>

  </form>
<?php }}?>
</div>


<?php
include('includes/footer.php'); 
?>