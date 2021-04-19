
<?php 
include "db/db.php";
include "header.php";


?>


<?php


/*INSERT DATA*/

 $id = $_GET['id'];
$total2="0";
$total1="0";
$msg="";



if (isset($_POST['submit'])) {
  $categories  = $_POST['categories'];
  $guest  = $_POST['guest'];
  $price  = $_POST['price'];
  $date  = $_POST['date'];
  $date2  = $_POST['date2'];
  $noofroom = $_POST['room'];
   $extrabed = $_POST['value'];
   $children = $_POST['children'];
	$file = $_POST['image'];
  $total = $_POST['total'];


     $insert = "UPDATE category SET categories='$categories',guest='$guest', image='$file',price='$price',check_in='$date', check_out='$date2',noofroom='$noofroom',value='$extrabed',children='$children',total='$total' WHERE id = '$id'";
   
  $result1 = mysqli_query($con,$insert);


}


?>



<?php

/*SELECT DATA*/

$id = $_GET['id'];
    
  

    $sql =  "SELECT * from category WHERE id ='$id'";

    $result = mysqli_query($con,$sql); 
 
    if(mysqli_num_rows($result)>0)
    {
      while ($row = mysqli_fetch_assoc($result)) {

?>


	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">


				<form method="post" enctype="multipart/form-data" >
				<input type="hidden" name="id" id="selectedFile" value="<?php echo $row['id'];?>" />
				<input type="hidden" name="image" id="selectedFile" value="<?php echo $row['image'];?>"/>


			
			
			<div class="row">
				<div class="feature-full-1col">


					<div class="image" style="background-image: url(admin/<?php echo $row['image']; ?>);">

						<div class="descrip text-center">
							<p><small>For as low as</small><span name="price">Rs.  <input type="hidden" id="price" name="price" value="<?php echo $row['price']; ?>"><?php echo $row['price']; ?> </span></p>
						</div>

					</div>



					<div class="desc">

						<div id="booking" class="section">
           <div class="section-center">
           <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                          <h1>Make your reservation</h1>
                    </div>

                       <?php  


                       $date1=date_create($row['check_in']);
                       $date2=date_create($row['check_out']);

                       $diff=date_diff($date1,$date2);
                       /*echo $diff->format("%a");*/


                    
                         
             



                       $total1 = $total1+($row['price']*$row['noofroom']*($diff->format("%a")) +$row['value']);

                 ?>


							 <input type="hidden" id="total1" name="total" value="<?php echo $total1;?>">
                   <!--   <i class="fas fa-rupee-sign"> </i> <h2 style="color: orange; margin-left: 250px;"><?php echo $total1;?> <span id="total1"></span></h2> -->


                      <div class="row">
                            <div class="col-md-2">
                                <div class="form-group"><h4><?php echo $row['categories']; ?></h4> <input class="form-control" type="hidden" name="categories" id="categories" value="<?php echo $row['categories']; ?>"><span class="form-label">Room</span> </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"><h4> <?php echo $row['guest']; ?></h4><input class="form-control" type="hidden" name="guest" id="guest" value="<?php echo $row['guest']; ?>"> <span class="form-label">Room/Adult</span> </div>
                            </div>
                        </div>



                          <div class="row">
                            <div class="col-md-2">
                                <div class="form-group"> <input class="form-control" type="date" name="date" required value="<?php echo $row['check_in']; ?>"> <span class="form-label" >Check In</span> </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"> <input class="form-control" type="date" name="date2" value="<?php echo $row['check_out']; ?>" required> <span class="form-label">Check out</span> </div>
                            </div>
                        </div>




                        <div class="row">    
                          <div class="col-md-1">
                                <div class="form-group"> <select class="form-control" name="room" required> 
                                 <?php
                   $sql1 = "SELECT * from noofroom ";
                    $result1 = mysqli_query($con,$sql1);
                   while ($row1 = mysqli_fetch_assoc($result1)){
                      ?>
                                        <option value="1" selected hidden>1</option>
                                        <option value="<?php echo $row1['noofroom'];?>"><?php echo $row1['noofroom'];?></option>
                                          <?php } ?> 
                                    </select> <span class="select-arrow"></span> <span class="form-label">No. Of Rooms</span> </div>
                            </div>


                            <div class="col-md-2">
                                <div class="form-group"> <select class="form-control" name="value" required> 
                     <?php
                      $sql2 = "SELECT * from extrabed ";
                   $result2 = mysqli_query($con,$sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)){
                      ?>
                                         <option value="0" selected hidden>No extra bed</option>
                                         <option value="<?php echo $row2['value'];?>"><?php echo $row2['extrabed'];?></option>
                      <?php } ?>
                                    </select> <span class="select-arrow"></span> <span class="form-label"></span>Age For Extra Bed</div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group"> <select class="form-control"  name="children" required>
                                            <?php
                      $sql3 = "SELECT * from children ";
                   $result3 = mysqli_query($con,$sql3);
                    while ($row3 = mysqli_fetch_assoc($result3)){
                      ?>
                                        <option value="0" selected hidden>No Children</option>
                                        <option value="<?php echo $row3['children'];?>"><?php echo $row3['children'];?></option>
                                          <?php } ?>
                                   
                                    </select> <span class="select-arrow"></span> <span class="form-label">Age Of Children</span> </div>
                            </div>

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
	
					    <a href="final.php?id=<?php echo $row['id'];?>"><button type="submit" name="submit" class="btn btn-primary btn-luxe-primary">Save dates <i class="ti-angle-right"></i></button></a> 
                <a href="final.php?id=<?php echo $row['id'];?>" type="submit" name="submit" class="btn btn-primary btn-luxe-primary">Continue<i class="ti-angle-right"></i></button></a> 

						<a href="index.php">Change Room</a><br><br><b>Per Extra bed 500 Rs. upto the age of 13 Year</b>
						
					</div>  
				</div>
			</div>
		</form>
		</div>
	</div>



<?php }}?>










<?php 
include "footer.php";
?>
