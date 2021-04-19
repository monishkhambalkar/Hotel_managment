<?php
define('TITLE', 'Date');
define('PAGE', 'Date');
include('includes/header.php');
include('db/db.php');




session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}











$select = "select * from contact ";
$result = mysqli_query($con, $select);
if (mysqli_num_rows($result)>0) {


?>
<div class="col-sm-9 col-md-10 mt-5 text-center">


  <p class=" bg-dark text-white p-2 mt-4">Contact</p>
  <table class="table">
    <thead>
      <tr>
    <th scope="col">contact ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
     <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while($row = mysqli_fetch_assoc($result))
          {
          ?> 
      <tr>
       <th scope="col"><?php echo $row['id']; ?></th>
    <th scope="col"><?php echo $row['name']; ?></th>
    <th scope="col"><?php echo $row['email']; ?></th>
     <th scope="col"><?php echo $row['message']; ?></th>
   
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