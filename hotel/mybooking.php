
<?php 
session_start();
include "db/db.php";

if (!isset($_SESSION['email'])) {
 echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>


<h2 class="title text-center">My Bookings</h2>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>REEF</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />



    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

  <!-- Stylesheets -->
  <!-- Dropdown Menu -->
  <link rel="stylesheet" href="css/superfish.css">
  <!-- Owl Slider -->
  <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
  <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
  <!-- CS Select -->
  <link rel="stylesheet" href="css/cs-select.css">
  <link rel="stylesheet" href="css/cs-skin-border.css">

  <!-- Themify Icons -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- Flat Icon -->
  <link rel="stylesheet" href="css/flaticon.css">
  <!-- Icomoon -->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  
</head>


<?php

/*SELECT DATA*/
/*  $sql =  "SELECT * FROM final JOIN user ON final.user = user.email ";*/
    $sql =  "SELECT * FROM final WHERE user = '" . $_SESSION['email'] . "' ";

    $result = mysqli_query($con,$sql); 
 
    if(mysqli_num_rows($result)>0)    {
      while ($row = mysqli_fetch_assoc($result)) {


?>



            
        <div class="row">
                <div class="feature-full-1col">
                    <div class="image" style="background-image: url(admin/<?php echo $row['image']; ?>);"></div>
                     
                    


                    <div class="desc">
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">

                
                
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group"><h4><?php echo $row['categories']; ?></h4>Room</span> </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"><h4> <?php echo $row['guest']; ?></h4><span class="form-label">Room/Adult</span> </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group"><h4> <?php echo $row['check_in']; ?></h4> <span class="form-label" >Check In</span> </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group"> <h4><?php echo $row['check_out']; ?></h4> <span class="form-label">Check out</span> </div>
                            </div>
                        </div>

                            <div class="row">
                            <div class="col-md-4">
                                    <div class="descrip text-center" style="background-color: #FF5722;">
                            <h2 style="color: white"><span >Rs. <?php echo $row['total'];?></span></h2>
                        </div>
                            </div>
                        </div>    
                </div>
            </div>
        </div>
    </div>
</div>

                        <a href="index.php" class="btn btn-primary btn-luxe-primary">Re-Book<i class="ti-angle-right"></i></a>
                       
                        <a href="index.php">Change Room</a></p>
                    </div>
                </div></div>

        <?php }} ?>

