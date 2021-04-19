<?php
define('TITLE', 'Date');
define('PAGE', 'Date');
include('includes/header.php');
include('db/db.php');




session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}












$select = "select * from user ";
$result = mysqli_query($con, $select);
if (mysqli_num_rows($result)>0) {

?>
<div class="col-sm-9 col-md-10 mt-5 text-center">


  <p class=" bg-dark text-white p-2 mt-4">Users</p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Customer ID</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result))
          {
          ?> 
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['email']; ?></td>
   
      </tr><tr>
   
  </tr></tbody>
<?php }}?>
  </table>
   <td><form class="d-print-none" style="float: right;"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form></td>
</div>
</div>
</div>

<?php
include('includes/footer.php'); 
?>