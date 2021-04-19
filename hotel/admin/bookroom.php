<?php
define('TITLE', 'Date');
define('PAGE', 'Date');
include('includes/header.php');
include('db/db.php');




session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
}


?>
                




<?php

$select = "select * from final ";
$result = mysqli_query($con, $select);
if (mysqli_num_rows($result)>0) {


?>
<div class="col-sm-9 col-md-10 mt-5 text-center">


  <p class=" bg-dark text-white p-2 mt-4">Bookings</p>
 <table class="table">
    <thead>
      <tr>
     <th scope="col">Product ID</th>
     <th scope="col">user</th>
        <th scope="col">categories</th>
        <th scope="col">Guest</th>
        <th scope="col">image</th>
        <th scope="col">price</th>
        <th scope="col">check in</th>
        <th scope="col">check out</th>
        <th scope="col">No of room</th>
        <th scope="col">age of extra bed</th>
        <th scope="col">age of children</th>
         <th scope="col">Total</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        
      </tr>
    </thead>
    <tbody>
       <?php
          while($row = mysqli_fetch_assoc($result))
          {
          ?> 
          <tr>

        <th scope="row"><?php echo $row['id'];?></th>
        <th><?php echo $row['user']; ?></th>
        <th><?php echo $row['categories']; ?></th>
        <th><?php echo $row['guest']; ?></th>
        <th><img src="<?php echo $row['image']; ?>" height="50px;"></th>
        <th><?php echo $row['price']; ?></th>
        <th><?php echo $row['check_in']; ?></th>
        <th><?php echo $row['check_out']; ?></th>
        <th><?php echo $row['noofroom']; ?></th>
        <th><?php echo $row['extra_bed']; ?></th>
        <th><?php echo $row['children']; ?></th>
        <th><?php echo $row['total']; ?></th>
        <th><?php echo $row['name']; ?></th>
        <th><?php echo $row['email']; ?></th>
        <th><?php echo $row['phone']; ?></th>
      </tr>
  
  </tbody>
<?php }} ?>
  <td><form class="d-print-none"><input class="btn btn-danger" type="submit" value="Print" onClick="window.print()"></form></td>
  </table>
</div>
</div>
</div>

<?php
include('includes/footer.php'); 
?>




  <script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript">

  
$(document).ready(function(){

$("#search").on("keyup",function(){

var serch_term = $(this).val();

$.ajax({
url: "ajax-live-search.php",
type: "POST",
data : {search:search_term},
success : function(data){

}

});
});
});

</script>