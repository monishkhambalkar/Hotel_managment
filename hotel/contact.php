
<?php 


include "header.php";
include "db/db.php";


$msg="";

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$insert = "insert into contact (name,email,message) values('$name','$email','$message')";
	  mysqli_query($con,$insert);
	  $msg = "<h2 style='color:orange;'>Message send</h2>";


}




?>




	<div id="fh5co-contact-section">
		<div class="row">
			<div class="col-md-6">
				<div id="map" class="fh5co-map"></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<h3>Our Address</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					<ul class="contact-info">
						<li><i class="ti-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="ti-mobile"></i>+ 1235 2355 98</li>
						<li><i class="ti-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="ti-home"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>
				<form method="post" action="#">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name="name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" name="email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" name="submit" value="Send Message" class="btn btn-primary"><?php echo $msg; ?>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	<?php 
	include 'footer.php';

	?>