<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<form action="addposts.inc.php" method="post" enctype="multipart/form-data" name="addroom"> 
		Upload Image: <br />
		<input type="file" name="image" placeholder="Upload Image"><br />
		Caption:<br />
 		<input name="caption" type="text" placeholder="Title" />
 		<br />
  		Posts Type:<br />
 		<input name="type" type="text" placeholder="selling, living, or buying" />
 		<br />
 		Price:<br />
 		<input name="price" type="text" placeholder="price"/>
 		<br />
 		Contact Info:<br />
 		<input name="contact" type="text" placeholder="phone number or email" />
 		<br />
 		<input type="submit" name="Submit" value="Submit"/>
    </form>
</div>
</body>
</html>