<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
         <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="index.php?page=home_page">Home</a></li>
                   <li class="active">Post</li>
               </ul>
            </div>            
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
                                       <form action="addposts.inc.php" method="post" enctype="multipart/form-data" name="addroom"> 
											Upload Image: <br />
											<input type="file" name="image" class="form-control" placeholder="Upload Image" required=""><br />
											Caption:<br />
									 		<input name="caption" type="text"  class="form-control" placeholder="Title" required="" />
									 		<br />
									  		Posts Type:<br />
									 		<input name="type" type="text" class="form-control" placeholder="selling, living, or buying" required="" />
									 		<br />
									 		Price:<br />
									 		<input name="price" type="text" class="form-control" placeholder="price" required="" />
									 		<br />
									 		Contact Info:<br />
									 		<input name="contact" type="text" class="form-control"  placeholder="phone number or email" required="" />
									 		<br />
									 		<input type="submit"  class="btn btn-primary btn-md btn-block" name="Submit" value="Submit"/>
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