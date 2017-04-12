<!DOCTYPE html>
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
            <li><a href="index.php?page=login_page">Login</a></li>
            <li class="active">Forgot Password</li>
        </ul>
    </div>            
</div>
<div class="main-container">
       <!-- Forgot Password preferences -->
            <div class="password-container">
                 <div class="row">
                     <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="text-center">
                                         <h3><i class="fa fa-lock fa-4x"></i></h3>
                                        <h2 class="text-center">Forgot Password?</h2>
                                        <p>You can reset your password here.</p>
                                     <div class="panel-body">
                              
                                    <form class="form">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                                </div>
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