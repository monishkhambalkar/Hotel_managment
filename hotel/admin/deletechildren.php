
<?php 

include 'db/db.php';

session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}











  $msg = "";
  $id = $_GET['id'];

     $sql1 = "DELETE FROM children WHERE children_id = '$id'";
     $result1 = mysqli_query($con,$sql1);
     if ($result1) {
       $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">  delete successful </div>';
       header('location:children.php');
     }else{
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> unable to delete </div>';
        /*header('location:noofroom.php');*/

      } 
      





?>
