
<?php 
include "db/db.php";
include "header.php";
?>

	


	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Hotels</h2>
					</div>
				</div>
			</div>

		
				<?php 

				$select = "select * from category";
				$result= mysqli_query($con, $select);
				if(mysqli_num_rows($result)>0){
					while ($row	=mysqli_fetch_assoc($result)) {
					
					
				 ?>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(admin/<?php echo $row['image']; ?>);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>Rs.<?php echo $row['price']; ?></span></p>

						</div>
					</div>
					<div class="desc">
						<h3><?php echo $row['categories']; ?></h3>
						<h3><?php echo $row['guest']; ?></h3>
						<p>Our comfortable single rooms are just the right size if you are travelling alone. Similar to all the other rooms in the Amsterdam Forest Hotel, the single room is fully equipped with all comforts.
					</p>
						<p><a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-luxe-primary">View Detail<i class="ti-angle-right"></i></a></p>
					</div>
				</div>
			</div>
		<?php  }}?>

		</div>
	</div>





<?php 

include "footer.php";
?>




