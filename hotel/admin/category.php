<?php
define('TITLE', 'Assests');
define('PAGE', 'assets');
include('includes/header.php');
include('db/db.php'); 





session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}




$select = "select * from category ";
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
        <th scope="col">categories</th>
        <th scope="col">Guest</th>
        <th scope="col">image</th>
        <th scope="col">price</th>
        <th scope="col">check in</th>
        <th scope="col">check out</th>
        <!-- <th scope="col">No of room</th>
        <th scope="col">age of extra bed</th>
        <th scope="col">age of children</th> -->
      <!--    <th scope="col">Total</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th> -->
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
       <?php
          while($row = mysqli_fetch_assoc($result))
          {
          ?> 
      <tr>
        <td scope="row"><?php echo $row['id'];?></td>
        <td><?php echo $row['categories'];?></td>
        <td><?php echo $row['guest'];?></td>
           <td ><img src="<?php echo $row['image'];?>" height="50px;" width="50px;"> </td>
        <td><?php echo $row['price'];?></td>
        <td><?php echo $row['check_in'];?></td>
           <td ><?php echo $row['check_out'];?></td>
       <!--  <td><?php echo $row['no_of_room'];?></td>
        <td><?php echo $row['age_for_extra_bed'];?></td>
           <td ><?php echo $row['age_of_children'];?></td> -->
<!--         <td><?php echo $row['total'];?></td>
        <td><?php echo $row['name'];?></td>
           <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td> -->

        
        
      
       
        <td>
          <a href="editcategory.php?id=<?php echo $row['id']; ?>" class="d-inline"> <button type="submit" class="btn btn-info"><i class="fas fa-pen"></i></button></a>


            <a href="deletecategory.php?id=<?php echo $row['id']; ?>" class="d-inline"><button type="submit" class="btn btn-secondary"><i class="far fa-trash-alt"></i></button></a>
         
        </td>
      </tr>
    <?php }}?>
</tbody>
  </table>
</div>
</div>
<a class="btn btn-danger box" href="addcategory.php"><i class="fas fa-plus fa-2x"></i></a>
</div>

<?php
include('includes/footer.php'); 
?>