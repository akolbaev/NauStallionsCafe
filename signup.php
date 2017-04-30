<?php
include_once "includes/inc_header.php";
include_once "includes/signup.inc.php";
?>
	<div class="row">
		<div class="col-md-12">
			<?php display_message(); ?>
		</div>
	</div>

<html>
<head>
	<title></title>
	<link href="css/login.css" rel="stylesheet">
	  <script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
	<script type="text/javascript">
		$(function() {
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
 				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});

 	</script>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=home_page">Home</a></li>
            <li class="active">SignUp</li>
        </ul>
    </div>            
</div>
<div class="main-container">

       <!-- Login preferences -->
      <div class = "login-container"> 
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="index.php?page=login_page">Sign In</a>
							</div>
							<div class="col-xs-6">
								<a href="index.php?page=signup_page" class="active" id="register-form-link">Sign Up</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" action="#" method="post" role="form" style="display: block;">
									<div class="text-center">
        								<img src="images/avatars/default.jpg" style="width: 200px;" class="avatar img-circle img-thumbnail" alt="avatar">
        								<h6>Upload a photo...</h6>
        								<input type="file" name="image" class="form-control" placeholder="Upload Image">
      								</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required="" value="">
									</div>
									<div class="form-group">
										<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" required="" value="">
									</div>
									<div class="form-group">
										<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" required="" value="">
									</div>
                                    <div class="form-group">
										<input type="text" name="selection" id="selection" tabindex="1" class="form-control" placeholder="Type Staff, Student, or Visitor" required="" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" required="" value="">
                                    </div>
									<div class="form-group">
										<input type="text" name="mobilenumber" id="mobilenumber" tabindex="1" class="form-control" placeholder="Mobile Number" required="" value="">
									</div>
									
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control" placeholder="Confirm Password" required="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Sign Up">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
       </div>
    </div>
<script>
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>
