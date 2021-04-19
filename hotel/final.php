
<?php 
session_start();
include "db/db.php";
include "header.php";



if (!isset($_SESSION['email'])) {
 echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}





$total1="";
$msg="";
if (isset($_POST['submit'])) {
  $s_user = $_POST['user'];
  $categories  = $_POST['categories'];  
  $guest  = $_POST['guest'];
  $file = $_POST['image'];
  $price  = $_POST['price'];
  $date  = $_POST['date'];
  $date2  = $_POST['date2'];
  $noofroom = $_POST['noofroom'];
  $value = $_POST['value'];
  $children = $_POST['children'];
  $total = $_POST['total'];
  $name  = $_POST['name'];
  $email  = $_POST['email'];
  $phone = $_POST['phone'];
  
   


      $insert = "INSERT into final(user,categories,guest,image,price,check_in,check_out,noofroom,extra_bed,children,total,name,email,phone)values('$s_user','$categories','$guest','$file','$price','$date','$date2','$noofroom','$value','$children','$total','$name','$email','$phone')";
      mysqli_query($con,$insert);
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('your Rooms are book');
    window.location.href='http://localhost/hotel/index.php';
    </script>");
 
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




<a href="" style="flood-color: green"></a>




	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">


				<form method="post" enctype="multipart/form-data" >
        <input type="hidden" name="user" id="selectedFile" value="<?php echo $_SESSION['email'];?>" />
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
                              <input class="form-control" type="hidden" name="date" required value="<?php echo $row['check_in']; ?>"> 
                                <div class="form-group"><h4> <?php echo $row['check_in']; ?></h4> <span class="form-label" >Check In</span> </div>
                            </div>
                            <div class="col-md-2">
                              <input class="form-control" type="hidden" name="date2" value="<?php echo $row['check_out']; ?>" required>
                                <div class="form-group"> <h4><?php echo $row['check_out']; ?></h4> <span class="form-label">Check out</span> </div>
                            </div>
                        </div>








                        <div class="row">    
                          <div class="col-md-1">
                                <div class="form-group">  
                                    <input class="form-control" type="hidden" name="noofroom" required value="<?php echo $row['noofroom']; ?>"> 
                              <div class="form-group"><h4> <?php echo $row['noofroom']; ?></h4> <span class="form-label" >No. Of Rooms</span> </div>
                                      </div>
                            </div>

                                <div class="col-md-1">
                                <div class="form-group"> 
                                    <input class="form-control" type="hidden" name="value" required value="<?php echo $row['value']; ?>"> 
                              <div class="form-group"><h4> <?php echo $row['value']; ?></h4> <span class="form-label" >Extra bed charg</span> </div>
                                      </div>
                            </div>


                              <div class="col-md-1">
                                <div class="form-group"> 
                                    <input class="form-control" type="hidden" name="children" required value="<?php echo $row['children']; ?>"> 
                              <div class="form-group"><h4> <?php echo $row['children']; ?></h4> <span class="form-label" >Age of children</span> </div>
                                      </div>
                            </div>
                          </div>

                 



                                 <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> <input class="form-control" type="text" name="name" placeholder="Enter your Name"> <span class="form-label">Name</span> </div>
                            </div></div>

                                <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> <input class="form-control" type="email" name="email" placeholder="Enter your Email"> <span class="form-label">Email</span> </div>
                            </div></div>

                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> <input class="form-control" type="tel" name="phone" placeholder="Enter you Phone"> <span class="form-label">Phone</span> </div>
                            </div>
                        </div>





                            <div class="row">
                            <div class="col-md-4">
                                    <div class="descrip text-center" style="background-color: #FF5722;">
                            <h2 style="color: white"><span >Rs. <input type="hidden" name="total" value="<?php echo $row['total']?>"><?php echo $row['total']?></span></h2>
                        </div>
                            </div>
                        </div>
             
   
                    </form>
                </div>
            </div>

        <?php }} ?>
        </div>
    </div>




            
        
            <input type="submit" name="submit" value="Book Now" class="btn btn-primary btn-luxe-primary"></a>
            <a href="index.php">Change Room</a></p>
          </div>
        </div>

      </div>
      </div>

    </div>
  </div>












<?php 
include "footer.php";
?>
