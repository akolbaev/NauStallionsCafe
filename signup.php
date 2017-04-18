<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
if(isset($_GET['name']) && $_GET['name']!='')
{
	$msg=$_GET['name'];
}
error_reporting(0);

?>

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
								<form id="register-form" action="signuppros.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" required="" value="">
									</div>
									<div class="form-group">
										<input type="text" name="fullname" id="fullname" tabindex="1" class="form-control" placeholder="Full Name" required="" value="">
									</div>
                                    <div class="form-group">
                                        <select class="form-control" required="" id="sel1">
                                            <option selected name="notselected" class="form-control" value="notselected">Not Selected</option>
                                            <option name="staff" class="form-control" value="staff">Staff</option>
                                            <option name="student" class="form-control" value="student">Student</option>
                                            <option name="visitor" class="form-control" value="visitor">Visitor</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" required="" value="">
                                    </div>
									<div class="form-group">
										<input type="text" name="mobilenumber" id="mobilenumber" tabindex="1" class="form-control" placeholder="Mobile Number" required="" value="">
									</div>
									
									<div class="form-group">
										<input type="password" name="u_hash" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="">
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

</body>
</html>