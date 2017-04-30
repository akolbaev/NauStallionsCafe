<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
  <form action="includes/profile.inc.php" method="post" enctype="multipart/form-data" name="addroom"> 
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="images/avatars/default.jpg" style="width: 150px;" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" name="avatar" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
     
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo "" . get_name($_SESSION['email']);  ?> " type="text">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo "" . get_lastname($_SESSION['email']); ?> " type="text">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Selection:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo "" . get_select($_SESSION['email']); ?>" type="text">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo "" . get_email($_SESSION['email']); ?>" type="email">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="<?php echo "" . get_user($_SESSION['email']); ?>" type="text">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" id="password" value="<?php echo "" . get_password($_SESSION['email']); ?>" type="password">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" id="confirm_password" value="<?php echo "" . get_password($_SESSION['email']); ?>" type="password">
            <div style="padding: 8px;"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
          <div style="padding: 20px;"></div>
            <input class="btn btn-primary" value="Save Changes" type="submit" name="Submit">
            <span></span>
            <a href="index.php?page=user"><input class="btn btn-default" value="Cancel" type=""></a>
            <div style="padding: 50px;"></div>
          </div>
        </div>
      </div>

    </form>

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