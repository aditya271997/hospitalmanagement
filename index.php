<!DOCTYPE html>
<html>
<head>
	<title>Hospital-Management</title>
	<meta name="viewport" content="width=device-width, initial-scaled=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
	<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://kit.fontawesome.com/449816cdb5.js" crossorigin="anonymous"></script>

</head>

<body>
	<div class="contai">
		<div class="img">
			<img src="svg/med.svg">
		</div>
		<div class="login-container focus">
			<form action="./process/authUser.php" method="POST">
				<img class="avatar" src="svg/profile_pic.svg">
				<h2> Welcome </h2>
				<div class="input-div one focus">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
				<div>
					<h5>UserName</h5>
					<input type="text" name="username" class="input">
				</div>
				</div>

				<div class="input-div two focus">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
				<div>
					<h5>Password</h5>
					<input type="password" name="password" class="input">
				</div>
				</div>
				<a href="#">Forget Password ?</a>
				<button type="submit" class="btn btn-outline-primary" value="login">Login</button>
			</form>
		</div>
	</div>

<footer class="footer">
<div class="container">
<div class="row">
<div class=" col-lg-4 col-md-4 col-sm-4  col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">About</h5>
<p class=" text-grey font-weight-bold"><i class="fas fa-user"></i> Aditya Kumar Singh
</p>
<p><i class="fa fa-location-arrow"></i> L-31 Adarsh  colony ,Gandhinagar,BHOPAL<br>
 </p>
<p><i class="fa fa-phone"></i>  +91-8085433341 </p>
<p><i class="fa fa fa-envelope"></i> adityasinghrajput862@gmail.com  </p>
</div>

<div class=" col-lg-4 col-md-4 col-sm-4 col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Front-end Technologies</h5>
<!--headin5_amrc-->
<ul class="footer_ul">
<li><a href="index.php">HTML</a></li>
<li><a href="model.php">CSS</a></li>
<li><a href="gallery.php">BOOTSTRAP</a></li>
<li><a href="apply.php">JAVASCRIPT</a></li>
</ul>
</div>

<div class=" col-lg-4 col-md-4 col-sm-4 col-12">
<h5 class="text-white font-weight-bold pt2 " style="letter-spacing: 2px;">Back-end Technologies</h5>
<!--headin5_amrc-->
<ul class="footer_ul">
<li><a href="index.php">PHP</a></li>
<li><a href="model.php">MySQL</a></li>
<li><a href="gallery.php">XAMPP</a></li>
</ul>
</div>

</div>
</div>

<div style="background-color:white;">
<p class="text-center text-primary">Copyright @2019 | Designed by <b>Aadi</b></p>
<div>
<ul class="social_footer_ul">
<li><a href="#"><i class="fa fa-facebook-square fa-2x fa-primary"></i></a></li>
<li><a href="#"><i class="fa fa-instagram fa-2x fa-primary"></i></a></li>
<li><a href="#"><i class="fa fa-twitter fa-2x fa-primary"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin-square fa-2x fa-primary"></i></a></li>
<li><a href="#"><i class="fa fa-youtube fa-2x fa-primary"></i></a></li>
</ul>
</div>
</div>

</footer>


</body>
</html>