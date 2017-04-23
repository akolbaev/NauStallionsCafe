
<?php
include_once "includes/inc_header.php";
include_once "includes/signin.inc.php";

if(logged_in()) {
    redirect("index.php");
}
?>
<html>
<head>
	<title></title>
	<link href="css/login.css" rel="stylesheet">
	  <script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
	<script type="text/javascript">
		$(function() {

   			$('#login-form-link').click(function(e) {
    			$("#login-form").delay(100).fadeIn(100);
 				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
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
            <li class="active">Login</li>
        </ul>
    </div>            
</div>
<div class="main-container">
<?php display_message(); ?>
       <!-- Login preferences -->
      <div class = "login-container"> 
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="index.php?page=login_page" class="active" id="login-form-link">Sign In</a>
							</div>
							<div class="col-xs-6">
								<a href="index.php?page=signup_page">Sign Up</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="#" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" maxlength="60" required="" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" maxlength="50" required="">
									</div>
									<div class="input-group text-center">
										<div class="checkbox">
                            			<label>
                              				<input id="remember" type="checkbox" name="remember" value="1"> Remember me
                            			</label>
                        				</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Sign In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="index.php?page=forgot_password" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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

</body>
</html>
