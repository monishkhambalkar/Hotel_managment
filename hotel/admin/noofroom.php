<?php
define('TITLE', 'No of room');
define('PAGE', 'No of room');
include('includes/header.php');
include('db/db.php'); 




session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}








$select = "select * from noofroom ";
$result = mysqli_query($con, $select);
if (mysqli_num_rows($result)>0) {
    
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">Product/Parts Details</p>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">No of Room</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
       <?php
          while($row = mysqli_fetch_assoc($result))
          {
          ?> 
      <tr>
        <th scope="row"><?php echo $row['room_id'];?></th>
        <td><?php echo $row['noofroom'];?></td>
      
      
       
        <td>
          <a href="editnoofroom.php?id=<?php echo $row['room_id']; ?>" class="d-inline"> <button type="submit" class="btn btn-info"><i class="fas fa-pen"></i></button></form>  

          <a href="deletenoofroom.php?id=<?php echo $row['room_id']; ?>" class="d-inline"><button type="submit" class="btn btn-secondary"><i class="far fa-trash-alt"></i></button></a>
        </td>

      </tr>
    <?php }}?>
</tbody>
  </table>
</div>
</div>
<a class="btn btn-danger box" href="addnoofroom.php"><i class="fas fa-plus fa-2x"></i></a>
</div>

<?php
include('includes/footer.php'); 
?>



