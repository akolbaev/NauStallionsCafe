

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=home_page">Home</a></li>
            <li class="active">Bulletin Board</li>
        </ul>
    </div>            
</div>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body text-left">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <center>
                                            <a class="" href="#">
                                                <img class="media-object dp img-circle" src="images/avatars/default.jpg" style="width: 180px;height:180px;">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-12">

                                        <h2 style="text-align: center;">
                                        <?php echo "" . get_name($_SESSION['email']);  ?> 
                                        <?php echo "" . get_lastname($_SESSION['email']); ?> 

                                        </h2>
                                        <p style="text-align: center;"><?php echo "" . get_select($_SESSION['email']); ?></p>
                                        <p style="text-align: center;"><?php echo "" . get_dates($_SESSION['email']); ?></p>
                                        <p>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href=""><button type="button" class="btn btn-primary btn-lg btn-block">Order</button></a>
                                            </div>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href=""><button type="button" class="btn btn-primary btn-lg btn-block">Post</button></a>
                                            </div>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href="inc_user_profile.php"><button type="button" class="btn btn-primary btn-lg btn-block">Account Settings</button></a>
                                            </div>
                                            <div style="padding-bottom: 10px;"> 
                                                <a href="logout.php"><button type="button" class="btn btn-primary btn-lg btn-block btn-danger">Logout</button></a>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <div class="col-md-4"></div>
                </div>
    
    </div>
</div>
</body>
</html>