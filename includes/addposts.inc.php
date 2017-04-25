<?php 
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"posts/" . $_FILES["image"]["name"]);
			
			$location="posts/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			$type=$_POST['type'];
			$price=$_POST['price'];
			$contact=$_POST['contact'];
			
			$save=mysqli_query($conn, "INSERT INTO posts (location, caption, type, price, contact) VALUES ('$location','$caption', '$type', '$price', '$contact')");
			header("index.php?page=user_submit");
			exit();					
	}
	 ?>