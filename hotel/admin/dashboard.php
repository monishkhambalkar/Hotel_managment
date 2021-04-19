<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php'); 
include('db/db.php');


session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}






?>
<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Contact</div>
        <div class="card-body">
        
          <a class="btn text-white" href="contact.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Login Users</div>
        <div class="card-body">
          <a class="btn text-white" href="users.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Book Rooms</div>
        <div class="card-body">
          <a class="btn text-white" href="bookroom.php">View</a>
        </div>
      </div>
    </div>
  </div>



 
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>