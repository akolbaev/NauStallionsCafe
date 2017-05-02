<?php 
include 'includes/init.php';

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"posts/" . $_FILES["image"]["name"]);
			
			$user_id			=get_id($_SESSION['email']);
			$location			="posts/" . $_FILES["image"]["name"];
			$caption			=$_POST['caption'];
			$type				=$_POST['type'];
			$price				=$_POST['price'];
			$contact			=$_POST['contact'];

			$save=mysqli_query($conn, "INSERT INTO posts (user_id, location, caption, type, price, contact) VALUES ('$user_id', '$location','$caption', '$type', '$price', '$contact')");
			echo "Hello1";
			header("location: index.php?page=user_submit");
			echo "hello2";
			exit();		
	}
	 ?>