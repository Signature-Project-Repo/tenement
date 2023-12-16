 <?php
$id=$_GET['Email'];
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Reset</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Desk Login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->

	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">

	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<section class="w3l-forms-main-61">
		<div class="form-inner">
			<div class="wrapper">
				<div class="d-grid top-form">
				</div>
				<div class="form-bg-blur">
					<div class="form-61">
						<h4 class="form-head">Password Update</h4>

						<form action="php/resetcomplete.php" method="POST">
							
							<div class="">
								<p class="text-head">Password</p>
								<input type="password" name="password" value="" class="input" required />
							</div>
							<div class="">
								<p class="text-head">Confirm Password</p>
								<input type="password" name="cpassword" value="" class="input" required />
                                <input type="email" name="Email" class="input" value="<?php echo $id;?>" required hidden />
							</div>
							
							<button type="submit" class="signinbutton btn" name="update" value="update">Update</button>
							
						</form>
					</div>
				</div>
				<!-- 
				<div class="go-to-home text-center">
					<p>Want to Create account? <a class="btn" href="signup.html"> Signup </a></p>
				</div> -->
			</div>
			<div class="copyright text-center">
				<div class="wrapper">
					<p class="copy-footer-29">© All rights reserved | Designed by TENEMENT </a></p>
				</div>
			</div>
		</div>
	</section>
</body>

</html>